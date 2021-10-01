<?php

namespace App\Http\Controllers;

use App\Http\Requests\BrandRequest;
use App\Models\Brand;
use App\Models\Catigory;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function show() {
        $brands = Brand::paginate(5);
        return view('admin.brand.show', compact('brands'));
    }

    public function create() {
        $catigories = Catigory::get();
        return view('admin.brand.add',compact('catigories'));
    }
    public function store(BrandRequest $request) {
        Brand::create($request->all());
        return redirect()->route('brand.show')->with('message', 'this brand is updated successfuly');
    }

    public function edit($id){
        $brand = Brand::findOrFail($id);
        $catigory = $brand->catigory;
        $cats = Catigory::get();
        return view('admin.brand.edit', compact('brand', 'cats', 'catigory'));
    }
    public function update($id, BrandRequest $request) {
        $brand = Brand::findOrFail($id);
        $brand->update($request->all());
        return redirect()->route('brand.show')->with('message', 'this brand is updated successfuly');
    }
    public function delete($id) {
        $brand = Brand::findOrFail($id);
        $brand->delete();
        session()->flash('message', 'this brand is deleted successfuly');
        return back();
    }
}
