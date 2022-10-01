<?php

namespace App\Http\Livewire\Project;

use Livewire\Component;
use App\Models\Galery;
use App\Models\Image;
use App\Models\GaleryCategory;
class GaleryComponent extends Component
{
    public function render()
    { 

        $galery = Galery::all();
        $category = GaleryCategory::all();
        $image = Image::all();
        return view('livewire.project.galery-component' , ['galery' => $galery , 'image' => $image , 'category' => $category ])->layout('layouts.base');
    } 
}
