<?php

namespace App\Http\Livewire\Project;

use Livewire\Component;
use App\Models\Blog;
use Carbon\Carbon;


class BlogComponent extends Component
{
    public function render()
    {

        Carbon::setLocale('tr');
        $blog = Blog::orderBy('id' , 'DESC')->paginate('15');
        return view('livewire.project.blog-component' , ['blog' => $blog])->layout('layouts.base');
    } 
}
