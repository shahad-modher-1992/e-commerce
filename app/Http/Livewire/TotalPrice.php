<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use Livewire\Component;

class TotalPrice extends Component
{

    protected $listeners = ['refreshTotal'=> '$refresh'];

    public function render()
    {
        $total_price =Cart::sum('total');
        $tax = Cart::sum('tax');
        $total = ($total_price) *($tax) / 100;
        $this->emitTo('total-price', 'refreshTotal');

        return view('livewire.total-price',[
             'total_price'=>$total_price,
             'total' => $total
        ]);
    }
}
