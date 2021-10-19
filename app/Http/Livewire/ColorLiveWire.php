<?php

namespace App\Http\Livewire;

use App\Models\Brand;
use App\Models\Color;
use App\Models\Product;
use Livewire\Component;
use App\Models\Catigory;

class ColorLiveWire extends Component
{
    public $color_id;
    public $sorting;
    public $pagesize;
    protected $listeners = ['refreshColor'=> '$refresh'];

    public function mount() {
        $this->fill(request()->only('color_id'));
        $this->sorting = 'defualt';
        $this->pagesize = 8;

    }
    public function render()
    {
        $brands = Brand::paginate(5);
        $cats = Catigory::paginate(5);
        $colors = Color::paginate(5);
         $pc =  Color::where('id', '=', $this->color_id )->first();   


         if($pc->id == $this->color_id && $this->sorting =='date')   {
             $products = $pc->products()->orderBy('created_at', 'desc')->paginate($this->pagesize);
         }
         else if($pc->id == $this->color_id && $this->sorting =='price')   {
             $products = $pc->products()->orderBy('regular_price', 'asc')->paginate($this->pagesize);
         }
         else if($pc->id == $this->color_id && $this->sorting =='price-desc')   {
             $products = $pc->products()->orderBy('regular_price', 'desc')->paginate($this->pagesize);
         } 
         else if($pc->id == $this->color_id && $this->sorting =='defualt') {
             $products = $pc->products()->paginate($this->pagesize);
         }
         else {
             $products = Product::paginate($this->pagesize);
         }
       $this->emitTo('shop-componen', 'refreshColor');
        return view('livewire.color-live-wire',
        [
            'products'=>$products,
            'cats'=>$cats,
            'brands'=>$brands,
            'colors'=>$colors
        ]
        )->extends('layout')->section('main');
    }
}
