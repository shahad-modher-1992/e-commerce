<?php

namespace App\Http\Controllers;

use App\Http\Requests\HomeSliderRequest;
use App\Models\HomeSlider;
use Illuminate\Http\Request;

class HomeSliderController extends Controller
{
    public function home() {
        $sliders = HomeSlider::paginate(2);
        return view('admin.home', compact('sliders'));
    }
    public function create() {
        return view('admin.addhome');
    }
    public function store(HomeSliderRequest $request) {
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
        $request->image->move('uploads/homeslider/', $path);
        $created_data['image'] = $path;
    }
      
        HomeSlider::create($created_data);
        return redirect('/admin/home')->with('message', 'Slider has been created successfuly');
    }

    public function edit($id) {

        $slider = HomeSlider::findOrFail($id);
        return view('admin.edithome', compact('slider'));
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
        $request->image->move('uploads/homeslider/', $path);
        $created_data['image'] = $path;
    }
        $slider = HomeSlider::findOrFail($id);
        
        $slider->update($created_data);
        return redirect('/admin/home')->with('message', 'Slider has been updated successfuly');
    }
    public function delete($id) {
        $slider = HomeSlider::findOrFail($id);
        $slider->delete();
        return redirect('/admin/home')->with('message', 'Slider has been deleted successfuly');

    }
}
