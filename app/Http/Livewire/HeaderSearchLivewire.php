<?php

namespace App\Http\Livewire;

use App\Models\Catigory;
use Livewire\Component;

class HeaderSearchLivewire extends Component
{
    public $search;
    public function render()
    {
        $cats = Catigory::get();
        return view('livewire.header-search-livewire', ['cats'=>$cats]);
    }
}
