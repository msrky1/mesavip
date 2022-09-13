<?php

namespace App\Http\Livewire\Project;

use Livewire\Component;
use App\Models\Lawyer;

class TeamComponent extends Component
{
    public function render()
    { 

        $team = Lawyer::all();
        return view('livewire.project.team-component', ['team' => $team])->layout('layouts.base');
    }
}
