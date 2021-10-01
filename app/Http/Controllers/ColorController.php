<?php

namespace App\Http\Controllers;

use App\Http\Requests\ColorRequest;
use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function show() {
        $colors = Color::paginate(5);
        return view('admin.color.show', compact('colors'));
    }

    public function create() {
        return view('admin.color.add');
    }
    public function store(ColorRequest $request) {
        Color::create($request->all());
        return redirect()->route('color.show')->with('message', 'This Color is added successfuly');
    }

    public function edit($id) {
        $color = Color::findOrFail($id);
        return view('admin.color.edit', compact('color'));
    }
    
    public function update($id, ColorRequest $request) {
        $color = Color::findOrFail($id);
        $color->update($request->all());
        return redirect()->route('color.show')->with('message', 'This Color is updated successfuly');
    }
    public function delete($id){
        $color = Color::findOrFail($id);
        $color->delete();
        return redirect()->route('color.show')->with('message', 'This Color is deleted successfuly');

    }

}
