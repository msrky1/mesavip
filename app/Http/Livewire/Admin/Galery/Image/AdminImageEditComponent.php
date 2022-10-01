<?php

namespace App\Http\Livewire\Admin\Galery\Image;

use Livewire\Component;
use App\Models\GaleryCategory;
use App\Models\Image;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class AdminImageEditComponent extends Component
{
    public $name;
    public $image;
    public $newimage;
    public $slug;
    public $category_id;

    use WithFileUploads;

    public function mount ($category_id) {
           
        $category = Image::where('id' , $category_id)->first();

        $this->name = $category->name;
        $this->image = $category->image;
        $this->slug = $category->slug;
        $this->category_id = $category->id;





    }

    
    public function generateSlug(){


        $this->slug = Str::slug($this->name, '-');
    }
     public function updateCategory() {


            $category = Image::find($this->category_id);
            $category->name = $this->name;
            $category->slug = $this->slug;
            if ($this->newimage){
                $imageName = Carbon::now()->timestamp. '.' . $this->newimage->extension();
                $this->newimage->storeAs('public/galery/kapak', $imageName);
                $category->image = $imageName; 
        
        
            }
            $category->save();
          
            session()->flash('message' , 'Galeri Güncellendi');


     }
    public function render()

    {
        $category = GaleryCategory::all();
        return view('livewire.admin.galery.image.admin-image-edit-component' ,  ['category' => $category])->layout('layouts.admin');
    }
}
