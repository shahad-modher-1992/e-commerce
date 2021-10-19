<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CartController;
use App\Http\Livewire\ShopComponent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CatigoryController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\CountryController;
// use App\Http\Controllers\CouponController;
use App\Http\Controllers\HomeSliderController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\TaxController;
use App\Http\Livewire\Brand;
use App\Http\Livewire\BrandLivewire;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\ColorLiveWire;
use App\Http\Livewire\SearchLivewire;
use App\Models\Catigory;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/about', function(){
    return view('about');
});
Route::get('/',[ ProductController::class, 'product_on_sale']);
Route::get('/details/{id}', [ProductController::class, 'details'])->name('details');
Route::get('/cat/{id}', [CatigoryController::class, 'cats']);
Route::get('/shop', [ProductController::class, 'shop']);

Route::post('/shop/search', SearchLivewire::class)->name('shop.search');

Route::group(['middleware'=>'auth'], function() {
    Route::get('/cart', [CartController::class, 'cart'])->name('cart');
    Route::get('/checkout', [OrderController::class, 'checkout']);
    Route::get('/wishlist', [ProductController::class, 'wishlist'])->name('wishlist');    
});

 Route::get('addwish/{id}', [ProductController::class, 'addToWishList']);
 Route::get('removewish/{id}', [ProductController::class, 'removeFromWishList']);
// Auth::routes();

//add to cart
Route::post('/cart/store', [CartController::class, 'store'])->name('cart.store');
Route::get('/removewish/{id}', [ProductController::class, 'removeFromWishList']);

Route::get('/destroywishlist', [ProductController::class, 'destroyWishlist']);
//remove items from cart
Route::get('/cart/delete/{id}', [CartController::class, 'deleteCart'])->name('cart.delete');

//delete all items from cart
Route::get('/cart/destroy', [CartController::class, 'destroy'])->name('cart.destroy');

//increase quantity items of cards
Route::get('cart/increase/{id}', [CartController::class, 'increaseQuantity'])->name('card.increase');

//decrease quantity items of cards
Route::get('cart/decrease/{id}', [CartController::class, 'decreaseQuantity'])->name('card.decrease');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//admin dashbord
Route::get('/admin/dashbord', [CatigoryController::class, 'adminDashbord']);

//admin homepage
Route::get('/admin/home', [HomeSliderController::class, 'home'])->name('admin.home');

//adimn add home
Route::get("/admin/home/create", [HomeSliderController::class, 'create'])->name("home.create");
Route::post("/admin/home/store", [HomeSliderController::class, 'store'])->name("home.store");

//admin edit home
Route::get('/admin/home/edit/{id}', [HomeSliderController::class, 'edit'])->name('home.edit');
Route::post('/admin/home/update/{id}', [HomeSliderController::class, 'update'])->name('home.update');

//admin home delete
Route::get("/admin/home/delete/{id}", [HomeSliderController::class, 'delete'])->name('home.delete');

//show catigory to adnin
Route::get("/admin/cats", [CatigoryController::class, 'admincats'])->name("show");

//add new catigory
Route::get("/admin/cats/create", [CatigoryController::class, 'create'])->name("create");
Route::post("admin/cats/store", [CatigoryController::class, 'store'])->name('store');

//edit Catigory
Route::get("admin/cat/edit/{id}",[CatigoryController::class, 'edit'])->name("cat.edit");
Route::post("admin/cat/update/{id}",[CatigoryController::class, 'update'])->name("cat.update");

//delete Catiggory 
Route::get("admin/cats/delete/{id}", [CatigoryController::class, 'delete'])->name("cat.delete");

//show products to admin
Route::get("/admin/products", [ProductController::class, 'showProduct'])->name('products.show');

//add new product
Route::get('/admin/product/create',[ProductController::class, 'create'])->name("product.create");
Route::post('/admin/product/store',[ProductController::class, 'store'])->name("product.store");

//edit product admin
Route::get("/admin/product/edit/{id}", [ProductController::class, 'edit'])->name("product.edit");
Route::post("/admin/product/update/{id}", [ProductController::class, 'update'])->name("product.update");

//delete product admin
Route::get("/admin/product/delete/{id}", [ProductController::class, 'delete'])->name('product.delete');

//admin Sale
Route::get("/admin/sale", [SaleController::class, 'index'])->name('admin.sale');
Route::post('/admin/sale/update', [SaleController::class, 'update']);


//admin show countries 
Route::get('/admin/country/show', [CountryController::class, 'show'])->name('country.show');
//admin add country
Route::get('/admin/country/create', [CountryController::class, 'create'])->name('country.create');
Route::post('/admin/country/store',[CountryController::class, 'store'])->name('country.store');

//admin update country
Route::get('/admin/country/edit/{id}', [CountryController::class, 'edit'])->name('country.edit');
Route::post('/admin/country/update/{id}',[CountryController::class, 'update'])->name('country.update');

//admin dlete country
Route::get('/admin/country/delete/{id}', [CountryController::class, 'delete'])->name('country.delete');

//admin show taxes
Route::get('/admin/tax/show',[TaxController::class, 'show'])->name('tax.show');

//admin add taxes
Route::get('/admin/tax/create', [TaxController::class, 'create'])->name('tax.create');
Route::post('/admin/tax/store', [TaxController::class, 'store'])->name('tax.store');

//admin edit taxes
Route::get('/admin/tax/edit/{id}', [TaxController::class, 'edit'])->name('tax.edit');
Route::post('/admin/tax/update/{id}', [TaxController::class, 'update'])->name('tax.update');

//admin delete tax
Route::get('/admin/tax/delete/{id}', [TaxController::class, 'delete'])->name('tax.delete');

//admin show brands
Route::get('/admin/brand/show', [BrandController::class, 'show'])->name('brand.show');

//admin add brand
Route::get('/admin/brand/create', [BrandController::class, 'create'])->name('brand.create');
Route::post('/admin/brand/store', [BrandController::class, 'store'])->name('brand.store');

//admin edit brand
Route::get('/admin/brand/edit/{id}', [BrandController::class, 'edit'])->name('brand.edit');
Route::post('/admin/brand/update/{id}', [BrandController::class, 'update'])->name('brand.update');

//admin delete brand
Route::get('/admin/brand/delete/{id}', [BrandController::class, 'delete'])->name('brand.delete');

//admin show brands
Route::get('/admin/color/show', [ColorController::class, 'show'])->name('color.show');

//admin add color 
Route::get('/admin/color/create', [ColorController::class, 'create'])->name('color.create');
Route::post('/admin/color/store', [ColorController::class, 'store'])->name('color.store');

//admin edit color
Route::get('/admin/color/edit/{id}', [ColorController::class, 'edit'])->name('color.edit');
Route::post('/admin/color/update/{id}', [ColorController::class, 'update'])->name('color.update');

//admin delete brand
Route::get('/admin/color/delete/{id}', [ColorController::class, 'delete'])->name('color.delete');

// order page
Route::get('/admin/order/show/{id}/{notifyId}', [OrderController::class, 'show'])->name('order.show');

//show all orders
Route::get('/admin/order/all', [OrderController::class, 'allorders'])->name('order.all');

//add orders
Route::post('/order/store', [OrderController::class, 'storeOrder'])->name('order.store');

// search by brand
Route::post('/shop/search/brand', BrandLivewire::class)->name('shop.brand');

//search by color 
Route::post('/shop/search/color', ColorLiveWire::class)->name('shop.color');


Route::get('/user/show',[ProductController::class, 'showuser'])->name('user.show');
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
