<?php
namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Events\OrderCreate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\OrderRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Relations\Pivot;

class OrderController extends Controller
{
    public function show($id, $notifyId) { 
      if($notifyId) {
        if(Auth::user()->notifications->where('id', $notifyId)) {
          Auth::user()->notifications->where('id', $notifyId)->markAsRead();
        }
      }
      $order = Order::findOrFail($id);
  //    dd($order);
      $products = $order->carts;
    //  dd($products);
      return view('admin.order', compact('order', 'products'));
    }

    public function allOrders() {
     $users = User::get();
      $resualt = Order::join('cart_order', 'orders.id', '=', 'cart_order.order_id')
      ->join('carts', 'carts.id', '=', 'cart_order.cart_id')->get();
      return view('admin.allorder', compact( 'resualt', 'users'));
    }

    public function create(){
        return view('addorder', compact('product'));
    }
    // public function store(Request $request){

    //   $order = Order::create([
    //     'status'=>$request->status,
    //     'phone'=>$request->phone,
    //     'user_id'=>Auth::user()->id
    //   ]);
    //   event(new OrderCreate($order));
    //   $product = Cart::findOrFail($request->product_id);
    //   $qty = $product->quantity;
    //   $order->products()->attach($product, ['qty'=> $qty] );
    //   session()->flash('message', 'this order has been reached');
    //   return back();
    // }

    public function checkout() {
    $c_products =  Cart::where('user_id', '=', Auth::user()->id)->get();
    $total = Cart::where('user_id', '=', Auth::user()->id)->sum('total');
    $tax = Cart::where('user_id', '=', Auth::user()->id)->sum('tax');
    $total_with_tax = $total - $tax / 100; 
      return view('checkout', compact( 'total', 'tax', 'total_with_tax'));
  }

  public function storeOrder(OrderRequest $request) {
    $order = Order::create($request->all());
    event(new OrderCreate($order));

    $carts = Cart::get();
     foreach($carts as $cart) {

      $order->carts()->attach([
        ['cart_id'=>$cart->id, 'qty'=>$cart->quantity],
      ]);
    }
    session()->flash('message', 'this order has been reached');
    return back();  }
}
