<?php

namespace App\Http\Livewire;

use Livewire\Component;

class QuantityProduct extends Component
{
    public $c_product;
    protected $listeners = ['refreshTotalPrice'=> '$refresh'];

    public function render()
    {
        $total = $this->c_product->regular_price * $this->c_product->quantity;
        $this->emitTo('quantity-product', 'refreshTotalPrice');
        return view('livewire.quantity-product', ['total'=>$total]);
    }
}
