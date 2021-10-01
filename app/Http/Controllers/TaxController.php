<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaxRequest;
use App\Models\Country;
use App\Models\Tax;
use Illuminate\Http\Request;

class TaxController extends Controller
{
    public function show() {
        $taxes = Tax::paginate(3);
        return view('admin.showtaxes', compact('taxes'));
    }
    public function create( ) {
        $countries = Country::get();
        return view('admin.addtax', compact('countries'));    
    }
    public function store(Request $request) {
        $tax = Tax::create([
            'name'=>$request->name,
            'percentage'=>$request->percentage,
            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date,
            'active'=>$request->active
        ]);
       $tax->countries()->attach($request->country);
       session()->flash('message', 'this tax is added successfuly');
       return redirect()->route('tax.show');
    }

    public function edit($id) {
    $tax = Tax::findOrFail($id);
    $countries = Country::get();
    return view('admin.edittax', compact('tax', 'countries'));
}

   public function update($id, Request $request) {
    $tax = Tax::findOrFail($id);
    $tax->update([
           'name'=>$request->name,
            'percentage'=>$request->percentage,
            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date,
            'active'=>$request->active
    ]);
    $tax->countries()->sync($request->country);
    session()->flash('message', 'this tax is updated successfuly');
       return redirect()->route('tax.show'); 
      }
      public function delete($id) {
        $tax = Tax::findOrFail($id);
        $tax->delete();
        session()->flash('message', 'this tax is deleted successfuly');
        return back();
      }
}

