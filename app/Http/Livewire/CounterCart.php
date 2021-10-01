<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CounterCart extends Component
{

    protected $listeners = ['refreshComponent'=> '$refresh'];

    public function render()
    {
        if(Auth::check()) {
            $c_product = Cart::where('user_id', '=',Auth::user()->id)->get();
            $this->emitTo('counter-cart', 'refreshComponent');

        } else {
            $c_product = 0;
        }  

        return view('livewire.counter-cart',[
            'c_product'=>$c_product
        ]);
    }
}
