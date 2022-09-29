<?php

namespace App\Http\Livewire\Admin\Galery;

use Livewire\Component;
use File;
use Livewire\WithFileUploads; 
use Carbon\Carbon;
use App\Models\Galery;
use App\Models\GaleryCategory;
class GaleryAddComponent extends Component
{ 

 
    use WithFileUploads;

    public $images = [];
   


     public function save() {


        

         
        $this->validate([
            'images.*' => 'image|max:1024', // 1MB Max
        ]);
 
          
        foreach ($this->images as $key => $image) {

            $this->images[$key] = $image->store('galery','public');
         

            
            

            Galery::create(['image' => $image->hashName() ]);
         
       
       
        }

    
        
        
    


        session()->flash('message' , 'Resimleriniz Galeriye Eklendi!');
        
     }
              
    public function render()
    {

        $category = GaleryCategory::all();

        return view('livewire.admin.galery.galery-add-component' , ['category' => $category])->layout('layouts.admin');
    }
}
