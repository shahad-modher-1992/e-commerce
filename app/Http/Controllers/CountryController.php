<?php

namespace App\Http\Controllers;

use App\Http\Requests\CountryRequest;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function show() {
        $countries = Country::paginate(5);
        return view('admin.showcountries',compact('countries') );
    }
    public function create(){
     return view('admin.addcountry');
    }
    public function store(CountryRequest $request) {
    Country::create($request->all());
    return redirect()->route('country.show')->with('message', 'this country is added successfuly');
    }
    public function edit($id) {
        $country = Country::findOrFail($id);
        return view('admin.editcountry', compact('country'));
    }
    public function update($id, CountryRequest $request) {
        $country = Country::findOrFail($id);
        $country->update($request->all());
        return redirect()->route('country.show')->with('message', 'this country is updated successfuly');
    }
    public function delete($id) {
        $country = Country::findOrFail($id);
        $country->delete();
        session()->flash('message', 'this country is deleted successfully');
        return back();
    }
}
