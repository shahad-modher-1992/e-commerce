<?php

namespace App\Http\Livewire;

use App\Models\Coupon;
use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartComponent extends Component
{

    public $haveCodeCoupon;
    public $couponCode;
    public $discount;
    public $subtotalAfterDiscount;
    public $taxAfterDiscount;
    public $totalAfterDiscount;

    public function increaseQuantity($rowId) {
         $product = Cart::get($rowId);
         $qty = $product->qty + 1;
         Cart::update($rowId, $qty);
         $this->emitTo('counter-cart', 'refreshComponent');


    }
    public function decreaseQuantity($rowId) {
         $product = Cart::get($rowId);
         $qty = $product->qty - 1;
         Cart::update($rowId, $qty);
         $this->emitTo('counter-cart', 'refreshComponent');

    }
    
    public function destroy($rowId) {
        Cart::remove($rowId);
        $this->emitTo('counter-component', 'refreshComponent');
        session()->flash('success', 'this item has been removed');
    }

    public function destroyAll() {
        Cart::destroy();
        $this->emitTo('counter-cart', 'refreshComponent');

    }

    public function applyCode() {
        $coupon =Coupon::where('code', '=', $this->couponCode)->where('cart_value', '<=', Cart::subtotal())->first();
        if(!$coupon) {
            session()->flash('coupon_message', 'coupon code is invalid');
            return;
        }
        session()->put('coupon',[
            'code'=>$coupon->code,
            'type'=>$coupon->type,
            'value'=>$coupon->value,
            'cart_value'=>$coupon->cart_value
        ]);
    }

    public function calculatedDiscount() {
        if(session()->has('coupon')) {
            if(session()->get('coupon')['type'] == 'fixed') {
                $this->discount = session()->get('coupon')['value'];
            }
            else {
                $this->discount = Cart::subtotal() *  session()->get('coupon')['value']/100;
            }
            $this->subtotalAfterDiscount = Cart::subtotal() - $this->discount;
            $this->taxAfterDiscount = ($this->subtotalAfterDiscount * config('cart.tax'))/100;
            $this->totalAfterDiscount = $this->subtotalAfterDiscount * $this->taxAfterDiscount;
        }
    }

    public function removeCoupon() {
        session()->forget('coupon');
    }
    public function render()
    {
        if(session()->has('coupon')) {
            if(Cart::subtotal() < session()->get('coupon')['cart_value']){
                session()->forget('coupon');
            } else {
                $this->calculatedDiscount();
            }

        }
        return view('livewire.cart-component');
    }
}
