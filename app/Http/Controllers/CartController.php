<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function store(Request $request) {
       
     $product = Product::findOrFail($request->product_id);   
     $taxsum = $product->taxes->sum('percentage');  
     if(Cart::where('product_id', $product->id)->where('user_id' , '=', Auth::user()->id)->count() == 0  && Cart::where('user_id', '=', Auth::user()->id)->count() >= 0){
            Cart::create([
                'name'           =>      $product->name,
                'product_id'     =>      $product->id,
                'sale_price'     =>      $product->sale_price,
                'regular_price'  =>      $product->regular_price,
                'tax'            =>      $taxsum,
                'quantity'       =>      $product->quantity,
                'total'          =>      $product->regular_price * $product->quantity,
                'image'          =>      $product->image,
                'user_id'        =>      Auth::user()->id,

            ]);          
        session()->flash('success', 'item added in cart');     
    } else {
       session()->flash('success', 'item is found in cart');
    }      
      return back();
    }

    public function cart() {
        $c_products = Cart::get();
        $totalTax = Cart::sum('tax');
       
        return view( 'cart', compact('c_products', 'totalTax'));
    }

    public function deleteCart($id) {
        $product = Cart::findOrFail($id);
        $product->delete();
        return back()->with('success', 'item deleted from cart successfuly');
    }
    public function destroy() {
        $c_products = Cart::get();
        foreach($c_products as $c_product) {
            $c_product->delete();
        }
        session()->flash('success', 'delete All Item successfuly');
        return back();
    }

    public function increaseQuantity($id ) {
        $product = Cart::findOrFail($id);
        $qty = $product->quantity + 1;      
        $product->update([
          'quantity'=> $qty,
          'total' => $product->regular_price * $qty
        ]);

        return back();
   }
   public function decreaseQuantity($id) {
      
    $product = Cart::findOrFail($id);

    $qty = $product->quantity - 1 ;
        $product->update([
      'quantity'=> $qty,
      'total' => $product->regular_price * $qty
    ]);
    return back();

   }

 

}


