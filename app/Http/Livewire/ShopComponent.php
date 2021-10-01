<?php

namespace App\Http\Livewire;

use App\Models\Brand;
use App\Models\Cart as ModelsCart;
use App\Models\Product;
use Livewire\Component;
use App\Models\Catigory;
use App\Models\Color;
use Gloudemans\Shoppingcart\Facades\Cart;
use GuzzleHttp\Psr7\Request;
use Livewire\WithPagination;

class ShopComponent extends Component
{

    public $sorting;
    public $pagesize;
    protected $listeners = ['refreshShop'=> '$refresh'];
  

    public function mount() {
        $this->sorting = "defualt";
        $this->pagesize = 8;
       
    }

    
   
    public function addToWishList($id){
        $product = Product::findOrFail($id);
        $product->update([
            'featured'=>1
        ]);
        $this->emitTo('counter-component', 'refreshComponent');
    }

    public function removeFromWishList($id) {
        $product = Product::findOrFail($id);
        $product->update([
            'featured'=>0
        ]);
        $this->emitTo('counter-component', 'refreshComponent');
    } 
    public function render()
    { 
        $brands = Brand::paginate(5);
        $cats = Catigory::get();
        $colors = Color::paginate(5);

       if($this->sorting =='date') {
           $products = Product::orderBy('created_at', 'desc')->paginate($this->pagesize);
       }
       else if ($this->sorting=='price') {
           $products = Product::orderBy('regular_price', 'asc')->paginate($this->pagesize);
       }
       else if ($this->sorting=='price-desc') {
           $products = Product::orderBy('regular_price', 'desc')->paginate($this->pagesize);
       } else {
        $products = Product::paginate($this->pagesize); 
       }
       $this->emitTo('shop-component', 'refreshShop');
        return view('livewire.shop-component', [
            'products'=>$products,
            'cats'=>$cats,
            'brands'=>$brands,
            'colors'=>$colors
        ]);
    }
}
