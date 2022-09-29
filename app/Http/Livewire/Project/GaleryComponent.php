<?php

namespace App\Http\Livewire\Project;

use Livewire\Component;
use App\Models\Galery;
use App\Models\Image;
class GaleryComponent extends Component
{
    public function render()
    { 

        $galery = Galery::all();
        $image = Image::all();
        return view('livewire.project.galery-component' , ['galery' => $galery , 'image' => $image ])->layout('layouts.base');
    } 
}
