<?php

namespace App\Http\Livewire\Admin\Aducation\Social\Category;

use Livewire\Component;
use App\Models\SocialCategory;


class AdminSocialCategoryAddComponent extends Component
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
        return view('livewire.admin.aducation.social.category.admin-social-category-add-component')->layout('layouts.admin');
    }
}
