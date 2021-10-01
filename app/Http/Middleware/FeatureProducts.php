<?php

namespace App\Http\Middleware;

use App\Models\Product;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class FeatureProducts
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $products = Product::get();
        $users = User::get();
        foreach($users as $user) {
            if(auth()->user()->email != $user->email){
                foreach($products as $product) {
                    $product->update([
                        'featured'=> 0,
                    ]);
                } 

             }else {
                return $next($request);
            }

        }
    }
}
