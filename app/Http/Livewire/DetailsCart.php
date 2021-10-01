<?php

namespace App\Http\Livewire;

use App\Models\Sale;
use App\Models\Product;
use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class DetailsCart extends Component
 {
    public $product;
    public function mount($product) {
     $this->product= $product;
    }

  //   public function store($product_id, $product_name, $product_price) {
  //       Cart::add($product_id, $product_name,1, $product_price)->associate(Product::class);
  //       session()->flash('success', 'item added in cart');
  //       return redirect()->route('cart');
  //     }

  //     public function increaseQuantity($rowId) {
  //       $product = Cart::get($rowId);
  //       $qty = $product->qty + 1;
  //       Cart::update($rowId, $qty);

  //  }
  //  public function decreaseQuantity($rowId) {
  //       $product = Cart::get($rowId);
  //       $qty = $product->qty - 1;
  //       Cart::update($rowId, $qty);
  //  }
      
    public function render()
    {

        // $product = Product::findOrFail($this->id);
        $Popular_Products = Product::inRandomOrder()->get()->take(4);
        $related_product = Product::where('catigory_id', $this->product->catigory_id)->inRandomOrder()->get()->take(6);
        $sale = Sale::find(1);
        return view('livewire.details-cart', 
        [
        //    'product'=>$product,
          'Popular_Products'=>$Popular_Products,
          'related_product'=>$related_product,
          'sale'=>$sale
    ]);
    }
}
