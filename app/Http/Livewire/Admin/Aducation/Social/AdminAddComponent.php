<?php

namespace App\Http\Livewire\Admin\Aducation\Social;

use Livewire\Component;
use App\Http\Models\SocialCategory;
class AdminAddComponent extends Component
{

    
    public $name;
       


    public function categoryAdd() {
            
        
        $category = new SocialCategory();
        $category->name = $this->name;
        
        $category->save();

        session()->flash('message' , 'Kategori Eklendi');
               
    }
    public function render()
    {
        return view('livewire.admin.aducation.social.admin-add-component')->layout('layouts.admin');
    }
}
