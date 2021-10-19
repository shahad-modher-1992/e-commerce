<?php

namespace App\Http\Controllers;

use App\Http\Requests\CatigoryRequest;
use App\Models\Brand;
use session;
use App\Models\Catigory;
use App\Models\Color;
use Illuminate\Http\Request;

class CatigoryController extends Controller
{

    public function adminDashbord() {
        return view('admin.dashbord');
    }
    public function cats($id){
        $cat = Catigory::findorFail($id);
        $cats = Catigory::paginate(5);
        $brands = Brand::paginate(5);
        $colors = Color::paginate(5);
        $products = $cat->products;
        return view('catigory', compact('cat', 'cats', 'products', 'brands', 'colors'));
       }
 
       public function admincats() {
           $cats = Catigory::paginate(4);
           return view('admin.showcats', compact('cats'));
       }

       public function create(){
           return view('admin.addcats');
       }

       public function store(CatigoryRequest $request) {               
         
           Catigory::create($request->all());
           session()->flash("message", " Catigory has been created successfuly" );
           return redirect()->back();
       }

       public function edit($id) {
           $cat = Catigory::findOrFail($id);
           return view('admin.editcat', compact('cat'));
       }

       public function update($id, CatigoryRequest $request) {
       
        $cat = Catigory::findOrFail($id);
        $cat->update($request->all());
        session()->flash('message', "Catigory has been updated successfuly");
        return redirect()->back();
       }

       public function delete($id) {
           $cat = Catigory::findOrFail($id);
           $cat->delete();
           return redirect()->route('show')->with('message', 'Catigory has been deleted successfuly');
       }
}
