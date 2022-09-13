<?php

namespace App\Http\Livewire\Project;

use Livewire\Component;
use App\Models\About;
use App\Models\Galery;

class AboutComponent extends Component
{
    public function render()
    {

        $about = About::all();
        $galery = Galery::all();
        return view('livewire.project.about-component' , ['about' => $about , 'galery' => $galery])->layout('layouts.base');
    }
}
