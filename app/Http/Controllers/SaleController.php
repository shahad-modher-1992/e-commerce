<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index() {
        $sale  = Sale::find(1);
        return view('admin.sale', compact('sale'));
    }
    
    public function update(Request $request) {
        $sale = Sale::find(1);
        $sale->update([
          'sale_date' =>$request->sale_date,
        ]);
        session()->flash('message', 'Sale Date has been updated successfuly');
        return redirect()->back();
    }
}
