<?php

namespace App\Http\Livewire\Project;

use Livewire\Component;
use App\Models\Galery;
class GaleryComponent extends Component
{
    public function render()
    { 

        $galery = Galery::all();
        return view('livewire.project.galery-component' , ['galery' => $galery])->layout('layouts.base');
    } 
}
