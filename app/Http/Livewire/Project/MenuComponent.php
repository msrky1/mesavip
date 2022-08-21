<?php

namespace App\Http\Livewire\Project;

use Livewire\Component;
use App\Models\Whatdo;
use App\Models\Setting;
use App\Models\Lock;


class MenuComponent extends Component
{ 

    
   

    public function render()
    {
        $whatdo = Whatdo::all();

           $setting = Setting::all();
           $lock = Lock::all();
        return view('livewire.project.menu-component' , [


         'whatdo' => $whatdo , 

         'setting' => $setting, 
         'lock' => $lock

        ]);
    }
}
