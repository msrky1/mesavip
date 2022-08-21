<?php

namespace App\Http\Livewire\Admin\Category;

use Livewire\Component;
use App\Models\Category;
use App\Models\Notification;
class CategoryAddComponent extends Component
{

       public $name;
       


       public function categoryAdd() {
               
           
           $category = new Category();
           $category->name = $this->name;
           
           $category->save();
           $notification = new Notification();

           $notification->name = $this->name;
           $notification->notification = 'Yeni bir Kategori Eklendi!';
           $notification->color = 'info';
           $notification->save();

           session()->flash('message' , 'Kategori Eklendi');
                  
       }

     
    public function render()
    {




        return view('livewire.admin.category.category-add-component')->layout('layouts.admin');
    }
}
