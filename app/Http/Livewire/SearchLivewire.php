<?php

namespace App\Http\Livewire;

use App\Models\Brand;
use App\Models\Color;
use App\Models\Product;
use Livewire\Component;
use App\Models\Catigory;

class SearchLivewire extends Component
{
    public $sorting;
    public $pagesize;
    public $search;
    public $search_product;
    public $product_cate;
    public $cat;
    
    public function mount() {
        $this->sorting = 'defualt';
        $this->pagesize = 8;
        $this->fill(request()->only('search', 'search_product'));
        $this->fill(request()->only('product_cate', 'cat'));
    }
    
    public function render()
    {
        $brands = Brand::paginate(5);
        $cats = Catigory::get();
        $colors = Color::get();
        if($this->sorting =='date') {
            $products = Product::where('name', 'LIKE', $this->search . '%')->where('catigory_id', '=', $this->cat)->orderBy('created_at', 'desc')->paginate($this->pagesize);
        }
        else if ($this->sorting=='price') {
            $products = Product::where('name', 'LIKE', $this->search . '%')->where('catigory_id', '=', $this->cat)->orderBy('regular_price', 'asc')->paginate($this->pagesize);
        }
        else if ($this->sorting=='price-desc') {
            $products = Product::where('name', 'LIKE', $this->search . '%')->where('catigory_id', '=', $this->cat)->orderBy('regular_price', 'desc')->paginate($this->pagesize);
        } else {
         $products = Product::where('name', 'LIKE', $this->search . '%')->where('catigory_id', '=', $this->cat)->paginate($this->pagesize); 
        }
        
            // $products = Product::where('name', 'LIKE', $this->search . '%')->where('catigory_id', '=', $this->cat)->paginate($this->pagesize);
       
        return view('livewire.search-livewire', [
            'products'=>$products,
            'cats'=>$cats,
            'brands'=>$brands,
            'colors'=>$colors
        ])->extends('layout')->section('main');
    }
}
