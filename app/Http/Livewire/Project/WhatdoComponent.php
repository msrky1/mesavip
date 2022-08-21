<?php

namespace App\Http\Livewire\Project;

use Livewire\Component;
use App\Models\Whatdo;
class WhatdoComponent extends Component
{
    public function render()
    {
        $whatdo = Whatdo::all();
        return view('livewire.project.whatdo-component', ['whatdo' => $whatdo])->layout('layouts.base-w');
    }
}
    