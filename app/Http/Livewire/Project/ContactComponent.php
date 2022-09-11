<?php

namespace App\Http\Livewire\Project;

use Livewire\Component;
use App\Models\Setting;

class ContactComponent extends Component
{
    public function render()
    {

        $setting = Setting::all();
        return view('livewire.project.contact-component' , ['setting' => $setting])->layout('layouts.base');
    }
}
