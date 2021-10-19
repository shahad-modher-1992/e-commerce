<?php

namespace App\Http\Livewire;

use App\Models\Brand;
use App\Models\Product;
use Livewire\Component;
use App\Models\Catigory;
use App\Models\Color;

class BrandLivewire extends Component
{
    public $color;
    public $brand_id;
    public $sorting;
    public $pagesize;

    protected $listeners = ['refreshBrand'=> '$refresh'];

    public function mount() {
        $this->fill(request()->only('brand_id') );
        $this->sorting = 'defualt';
        $this->pagesize = 8;
    }
    public function render()
    {
        $brands = Brand::paginate(5);
        $cats = Catigory::paginate(5);
        $colors = Color::paginate(5);
        $brand =  Brand::where('id', '=', $this->brand_id)->first();  


        if($brand->id == $this->brand_id && $this->sorting =='date')    {
            $products = $brand->products()->orderBy('created_at', 'desc')->paginate($this->pagesize);
        } 
       else if($brand->id == $this->brand_id && $this->sorting =='price')    {
            $products = $brand->products()->orderBy('regular_price', 'asc')->paginate($this->pagesize);
        } 
      else  if($brand->id == $this->brand_id && $this->sorting =='price-desc')    {
            $products = $brand->products()->orderBy('regular_price', 'desc')->paginate($this->pagesize);
        } else if ($brand->id == $this->brand_id && $this->sorting =='defualt' ) {
           $products = $brand->products()->paginate($this->pagesize);
        } 
        else  {
            $products = Product::paginate($this->pagesize);
        }
        $this->emitTo('shop-componen', 'refreshBrand');
        return view('livewire.brand-livewire',[
            'products'=>$products,
            'cats'=>$cats,
            'brands'=>$brands,
            'colors'=>$colors
        ])->extends('layout')->section('main');
    }
}
