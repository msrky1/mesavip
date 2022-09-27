<?php

namespace App\Http\Livewire\Project;

use Livewire\Component;
use App\Models\Setting;
class HumanResourcesComponent extends Component
{
    public function render()
    {

        $setting = Setting::all();
        return view('livewire.project.human-resources-component' , ['setting' => $setting])->layout('layouts.base');
    }
}
