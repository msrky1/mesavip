<?php

namespace App\Http\Livewire\Project\Aducation\Social;

use Livewire\Component;
use App\Models\SocialCategory;
use App\Models\Social;
use Livewire\WithPagination;
use Carbon\Carbon;

class SocialDetailComponent extends Component
{

    public $category_slug;
     
    use WithPagination;


    public function mount($category_slug) {

     $this->category_slug = $category_slug;
        
    }

    


    public function render()
    {

        Carbon::setLocale('tr');
        $category = SocialCategory::where('slug' , $this->category_slug)->first();
        $category_id = $category->id;
        $category_name = $category->name;


        $categories = SocialCategory::All();
    
        $blogs = Social::where('category_id' , $category->id)->orderBy('category_id',  'DESC')->paginate(10);
        return view('livewire.project.aducation.social.social-detail-component', ['blogs' => $blogs , 'categories' => $categories, 'category_name' => $category_name])->layout('layouts.base');
    }
}
