<?php

namespace App\Http\Controllers;

use Cart;
use App\Models\Tax;
use App\Models\Sale;
use App\Models\Brand;
use App\Models\Color;
use App\Models\Order;
use App\Models\Product;
use App\Models\Catigory;
use App\Models\HomeSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
   public function __construct()
    {
        $this->middleware(['auth'])->except('product_on_sale', 'details', 'shop', 'showProduct');
    }
    public function product_on_sale() {
        $product_on_sale = Product::where('sale_price', '>', 0)->inRandomOrder()->get()->take(7);
        $home_slider = HomeSlider::get();
        $latest_products = Product::orderBy('created_at','desc')->get()->take(7);
        $category = Catigory::get();
        $sale = Sale::find(1);
        return view('index', compact('product_on_sale', 'home_slider', 'latest_products', 'category', 'sale'));
    }

    public function details($id) {
        $product = Product::findOrFail($id);
       return view('details', compact('product'));
    }
    public function shop(){
        return view('shop');
    }

    public function showProduct() {
        $products = Product::paginate(5);
       return view('admin.showproducts', compact('products')) ;
    }
   
   
     public function wishlist() {
         $products = Product::where('featured', '=', 1)->paginate(5);
         return view('wishlist', compact('products'));
     }

     public function addToWishList($id){
        $product = Product::findOrFail($id);
        $product->update([
            'featured'=>1
        ]);
        session()->flash('success', 'this item has been added');
        return back();
    }
     public function removeFromWishList($id) {
        $product = Product::findOrFail($id);
        $product->update([
            'featured'=>0
        ]);
        session()->flash('success', 'this item has been deleted');
        return back();
    }

    public function destroyWishlist() {
      $products =  Product::where('featured', '=', 1)->get();
      foreach($products as $product) {
          $product->update([
              'featured' => 0
          ]);
      }
         return back();
    }

    public function create(){
        $cats = Catigory::get();
        $taxes = Tax::get();
        $brands = Brand::get();
        $colors = Color::get();
        return view('admin.addproduct', compact('cats', 'taxes', 'brands', 'colors'));
    }

  
    public function store(ProductRequest $request) {   

        $created_data = $request->except(
            'bulkunits',
            'vendors',
            'warehouses',
            'prices',
            'symbols',
            'max_stocks',
            'min_stocks',
            'order_limits',
            'consumer_prices',
            'min_prices_sale',
            'prices_buy',
            'options',
            'relative_prices',
            'twosides',
            'cost_prices',
            'opening_cost_prices',
            'quantaties'
        );

        if($request->hasFile('image')) {
            $image = $request->image;
            $path=time().'.'.$image->getClientOriginalExtension();          
            $request->image->move('uploads/products/', $path);
            $created_data['image'] = $path;
        }
    $product = Product::create($created_data);
    $data = $request->all()['tax'];
    $product->taxes()->attach($data);
        return redirect()->route('products.show')->with('message', 'Product has been created successfuly');
    }
    public function edit($id) {
        $product= Product::findOrFail($id);
        $cats  = $product->catigory;
        $category = Catigory::get();
        $colors = Color::get();
        // dd($cats);
        return view('admin.editproduct', compact('product', 'cats', 'category', 'colors'));
    }
    public function update($id, Request $request) {
      
        $created_data = $request->except(
            'bulkunits',
            'vendors',
            'warehouses',
            'prices',
            'symbols',
            'max_stocks',
            'min_stocks',
            'order_limits',
            'consumer_prices',
            'min_prices_sale',
            'prices_buy',
            'options',
            'relative_prices',
            'twosides',
            'cost_prices',
            'opening_cost_prices',
            'quantaties'
        );

        if($request->hasFile('image')) {
            $image = $request->image;
            $path=time().'.'.$image->getClientOriginalExtension();          
            $request->image->move('uploads/products/', $path);
            $created_data['image'] = $path;
        }
       
        $product= Product::findOrFail($id);
         $product->update($created_data);

  return redirect()->route('products.show')->with('message', 'Product has been updated successfuly');
}

public function delete($id) {
    $product = Product::findOrFail($id);
    $product->delete();
    return redirect()->route('products.show')->with('message', 'Product has been deleted successfuly');
}
public function showuser() {
    $orders = Order::where('user_id', '=', Auth::user()->id)->get();
    $order = Order::where('user_id', '=', Auth::user()->id)->first();
    return view('user.show', compact('orders', 'order'));
}
}

