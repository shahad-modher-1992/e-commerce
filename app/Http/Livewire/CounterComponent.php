<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;


class CounterComponent extends Component
{
    protected $listeners = ['refreshComponent'=> '$refresh'];
    public function render()
    {
        $product = Product::where('featured', '=', 1);
        return view('livewire.counter-component',
    [
        'product'=>$product
    ]);
    }
}
