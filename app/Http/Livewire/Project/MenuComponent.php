<?php

namespace App\Http\Livewire\Project;

use Livewire\Component;
use App\Models\Whatdo;
use App\Models\Setting;
use App\Models\Lock;
use App\Models\SocialCategory;
use App\Models\Social;
use App\Models\Unit;
use App\Models\System;


class MenuComponent extends Component
{ 

    
   

    public function render()
    {
        $whatdo = Whatdo::all();

           $setting = Setting::all();
           $lock = Lock::all();
           $system = System::all();
           $social = Social::all();
           $unit = Unit::all();
           $category = SocialCategory::all();
           
        return view('livewire.project.menu-component' , [


         'whatdo' => $whatdo , 

         'setting' => $setting, 
         'lock' => $lock,
         'whatdo' => $whatdo , 

         'setting' => $setting, 
         'lock' => $lock,
         'system' => $system,
         'unit' => $unit,
         'social' => $social,
         'category' => $category

        ]);
    }
}
