<?php

namespace App\Http\Livewire\Admin\Galery\Image;

use Livewire\Component;
use App\Models\Image;
use App\Models\GaleryCategory;
use Illuminate\Support\Str;

class AdminImageAddComponent extends Component
{
    public $name;
    public $slug;
    public $category_id;

    
 public function generateSlug(){

     $this->slug  = Str::slug($this->name ,'-');

}


    public function categoryAdd() {
            
        
        $category = new Image();
        $category->name = $this->name;
        $category->slug = $this->slug;
        $category->category_id = $this->category_id;
        
        $category->save();
   

        session()->flash('message' , 'Galeri Oluşturuldu');
               
    }
    public function render()
    {

        $category = GaleryCategory::all();
        return view('livewire.admin.galery.image.admin-image-add-component' , ['category' => $category])->layout('layouts.admin');
    }
}
