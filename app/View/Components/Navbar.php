<?php

namespace App\View\Components;

use App\Models\Catigory;
use Illuminate\View\Component;

class Navbar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $cats = Catigory::get();
        return view('components.navbar', compact('cats'));
    }
}
