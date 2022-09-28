<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Galery;
use App\Models\GaleryCategory;
use File;


class AdminGaleryComponent extends Component
{
 

    public function deleteGalery($id)

    {
        $galery = Galery::find($id);
        File::Delete('storage/galery/'.$galery->image);
        $galery->delete();
      //  session()->flash('message' , 'Slider Başarıyla Slindi!');
    
    
        

    }

    
    public function render()
    {
       
        $category = GaleryCategory::all();
        
        $galery = Galery::all();


        return view('livewire.admin.admin-galery-component' , ['galery' => $galery , 'category' => $category])->layout('layouts.admin');
    }
}
