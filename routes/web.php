<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


use App\Http\Livewire\Project\HomeComponent;
use App\Http\Livewire\Project\BlogComponent;
use App\Http\Livewire\Project\AboutComponent;
use App\Http\Livewire\Project\GaleryComponent;
use App\Http\Livewire\Project\WhatdoComponent;
use App\Http\Livewire\Project\Whatdo\WhatdoDetailComponent;
use App\Http\Livewire\Project\Blog\BlogDetailComponent;
use App\Http\Livewire\Project\ContactComponent;
use App\Http\Livewire\Project\TeamComponent;
use App\Http\Livewire\Project\QuestionsComponent;
use App\Http\Livewire\Project\Category\CategoryDetailComponent;



use App\Http\Livewire\Admin\AdminHomeComponent;
use App\Http\Livewire\Project\SearchComponent;


use App\Http\Livewire\Admin\AdminAboutComponent;
use App\Http\Livewire\Admin\About\AboutEditComponent;


use App\Http\Livewire\Admin\AdminBlogComponent;
use App\Http\Livewire\Admin\Blog\BlogAddComponent;
use App\Http\Livewire\Admin\Blog\BlogEditComponent;
use App\Http\Livewire\Admin\AdminMenuComponent;
use App\Http\Livewire\Admin\AdminQuesitionsComponent;
use App\Http\Livewire\Admin\AdminSettingComponent;
use App\Http\Livewire\Admin\AdminTeamComponent;
use App\Http\Livewire\Admin\AdminGaleryComponent;
use App\Http\Livewire\Admin\AdminWhatDoingComponent;
use App\Http\Livewire\Admin\AdminNotificationComponent;

use App\Http\Livewire\Admin\Galery\GaleryAddComponent;
use App\Http\Livewire\Admin\Galery\GaleryEditComponent;


use App\Http\Livewire\Admin\Quaestion\QuestionAddComponent;
use App\Http\Livewire\Admin\Quaestion\QuestionEditComponent;

use App\Http\Livewire\Admin\Team\TeamAddComponent;
use App\Http\Livewire\Admin\Team\TeamEditComponent;


use App\Http\Livewire\Admin\Whatdo\WhatDoingAddComponent;
use App\Http\Livewire\Admin\Whatdo\WhatDoingEditComponent;


use App\Http\Livewire\Admin\AdminSliderComponent;
use App\Http\Livewire\Admin\Slider\SliderAddComponent;
use App\Http\Livewire\Admin\Slider\SliderEditComponent;

//

use App\Http\Livewire\Admin\Applications\ApplicationComponent;

use App\Http\Livewire\Admin\Category\CategoryAddComponent;
use App\Http\Livewire\Admin\Category\CategoryEditComponent;


use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\Admin\Accept\AcceptedComponent;
use App\Http\Livewire\Admin\Lock\LockComponent;
use App\Http\Livewire\Project\Thanks\ThankyouComponent;



use App\Http\Livewire\Admin\AdminHelpComponent;
use App\Http\Livewire\Admin\Setting\SettingEditComponent;
use App\Http\Livewire\Admin\Classroom\AdminClassRoomComponent;
use App\Http\Livewire\Admin\Classroom\AdminClassRoomAddComponent;
use App\Http\Livewire\Admin\Classroom\AdminClassRoomEditComponent;

use App\Http\Livewire\Test\TestComponent;
use App\Http\Livewire\Test\TestEditComponent;
use App\Http\Livewire\Project\BusinessPartnerComponent;
use App\Http\Livewire\Project\Class\ClassDetailComponent;


use App\Http\Livewire\Admin\Auth\LoginComponent;

use App\Http\Controllers\BasvuruController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->get('/test', function () {
    return Inertia::render('test');
})->name('test');


   Route::middleware(['auth:sanctum', 'verified'])->get('/register', function () {
        return Inertia::render('register');
    })->name('register');


*/
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::get('/thankyou' , ThankyouComponent::class)->name('thankyou');
Route::get('/basvurular' , SearchComponent::class );
// Route::get('/basvurular/olustur/{name}' , [BasvuruController::class, 'pdfGenerate' ])->name('generate');

Route::middleware(['auth:sanctum', 'verified'])->get('/logout', function () {
    return Inertia::render('/');
})->name('logout');
Route::post('/sinav/basvurusu' , [BasvuruController::class , 'addApp'])->name('add.basvuru');
Route::post('/sinav/basvurusu/olustur/{name}' , [BasvuruController::class , 'pdfGenerate'])->name('generate.pdf');



Route::get('/' , HomeComponent::class);
Route::get('/galeri' , GaleryComponent::class);
Route::get('/hakkimizda' , AboutComponent::class);
Route::get('/sss' , QuestionsComponent::class);
 Route::get('/duyurular' , WhatdoComponent::class);
 Route::get('/ekibimiz' , TeamComponent::class);
 Route::get('/haberler' , BlogComponent::class);
 Route::get('/iletisim' , ContactComponent::class);
 Route::get('/is-ortaklarimiz' , BusinessPartnerComponent::class);
 Route::get('/sinif/detay/{classroom_id}' , ClassDetailComponent::class)->name('class.detail');


  Route::get('/duyuru/{slug}', WhatdoDetailComponent::class)->name('whatdo.detail');
  Route::get('/haber/{slug}', BlogDetailComponent::class)->name('blog.detail');
  Route::get('/kategori/{category_slug}', CategoryDetailComponent::class)->name('blog.category');


  Route::post('/sinav/basvurusu/onayla' , [BasvuruController::class , 'addApprow'])->name('add.basvuru.onay');














Route::middleware(['auth:sanctum' , 'verified'])->group(function() {



 
Route::get('/admin/home' , AdminHomeComponent::class)->name('admin.home');



// Slider Yönetimi 

Route::get('/admin/slider' , AdminSliderComponent::class)->name('admin.slider');
Route::get('/admin/slider/add' , SliderAddComponent::class)->name('admin.slider.add');
Route::get('/admin/slider/edit/{slider_id}' , SliderEditComponent::class)->name('admin.slider.edit');


Route::get('/admin/settings' , AdminSettingComponent::class)->name('admin.setting');
Route::get('/admin/settings/edit/{setting_id}' , SettingEditComponent::class)->name('admin.setting.edit');


Route::get('/admin/about' , AdminAboutComponent::class)->name('admin.about');
Route::get('/admin/about/edit/{about_id}' , AboutEditComponent::class)->name('admin.about.edit');


// Admin Blog 

Route::get('/admin/blog' , AdminBlogComponent::class)->name('admin.blog');

// Bildirimler
Route::get('/admin/notification' , AdminNotificationComponent::class)->name('admin.notification');

Route::get('/admin/blog/add' , BlogAddComponent::class)->name('admin.blog.add');
Route::get('/admin/blog/edit/{blog_id}' , BlogEditComponent::class)->name('admin.blog.edit');

// Admin Blog Category

Route::get('/admin/category' , AdminCategoryComponent::class)->name('admin.category');
Route::get('/admin/category/add' , CategoryAddComponent::class)->name('admin.category.add');
Route::get('/admin/category/edit/{category_id}' , CategoryEditComponent::class)->name('admin.category.edit');



// Admin Galery

Route::get('/admin/galery' , AdminGaleryComponent::class)->name('admin.galery');
Route::get('/admin/galery/add' , GaleryAddComponent::class)->name('admin.galery.add');


// Admin Quastions

// Route::get('/admin/quastion' , AdminQuastionsComponent::class)->name('admin.quastion');
// Route::get('/admin/quastion/add' , QuastionAddComponent::class)->name('admin.quastion.add');
// Route::get('/admin/quastion/edit/{quastion_id}' , QuastionEditComponent::class)->name('admin.quastion.edit');

// Admin Team

Route::get('/admin/team' , AdminTeamComponent::class)->name('admin.team');
 Route::get('/admin/team/add' , TeamAddComponent::class)->name('admin.team.add');
 Route::get('/admin/team/edit/{lawyer_id}' , TeamEditComponent::class)->name('admin.team.edit');


// Admin Neler Yapıyoruz

Route::get('/admin/what-do' , AdminWhatDoingComponent::class)->name('admin.whatdo');
 Route::get('/admin/what-do/add' , WhatDoingAddComponent::class)->name('admin.whatdo.add');
Route::get('/admin/what-do/edit/{whatdo_id}' , WhatDoingEditComponent::class)->name('admin.whatdo.edit');



// Admin Blog Category

// Route::get('/admin/quastion' , AdminCategoryComponent::class)->name('admin.quastion');
// Route::get('/admin/quastion/add' , CategoryAddComponent::class)->name('admin.quastion.add');

// Route::get('/admin/account' , AdminAccountComponent::class)->name('admin.account');

// Route::get('/admin/users' , AdminUsersComponent::class)->name('admin.users');


// Route::get('/admin/graphich' , AdminGraphicComponent::class)->name('admin.graphic');
 Route::get('/admin/help' , AdminHelpComponent::class)->name('admin.help');

Route::get('/admin/team' , AdminTeamComponent::class)->name('admin.team');


Route::get('/admin/questions' , AdminQuesitionsComponent::class)->name('admin.question');
Route::get('/admin/questions/add' , QuestionAddComponent::class)->name('admin.question.add');
Route::get('/admin/questions/edit/{question_id}' , QuestionEditComponent::class)->name('admin.question.edit');

Route::get('/admin/menu' , AdminMenuComponent::class)->name('admin.menu');


// Başvuru Listeleme
Route::get('/admin/applications' , ApplicationComponent::class)->name('admin.app');
Route::get('/admin/onaylanan/basvurular' , AcceptedComponent::class)->name('admin.app.bas');
Route::get('/admin/kilit/{lock_id}' , LockComponent::class)->name('admin.lock.edit');


//Room Add Component

Route::get('/admin/class' , AdminClassRoomComponent::class)->name('admin.class');
Route::get('/admin/class/add' , AdminClassRoomAddComponent::class)->name('admin.class.add');
Route::get('/admin/class/edit/{class_id}' , AdminClassRoomEditComponent::class)->name('admin.class.edit');


Route::get('/test/test' , TestComponent::class)->name('test');
Route::get('/test/test/{setting_id}' , TestEditComponent::class)->name('test.edit');



});