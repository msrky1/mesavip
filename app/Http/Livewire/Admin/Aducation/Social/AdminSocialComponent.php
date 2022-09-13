<?php

namespace App\Http\Livewire\Admin\Aducation\Social;

use Livewire\Component;
use App\Http\Models\SocialCategory;
class AdminSocialComponent extends Component
{
    public function render()
    {
        $category = SocialCategory::paginate(10);
        return view('livewire.admin.aducation.social.admin-social-component', ['category' => $category])->layout('layouts.admin');
    }
}


