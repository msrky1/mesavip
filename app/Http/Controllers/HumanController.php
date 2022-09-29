<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Human;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use File;


class HumanController extends Controller
{
    
    use WithFileUploads;



    public function addCv(Request $request) {
 
         
        $human = new Human();

        $human->name = $request->name;
        $human->email = $request->email;
        $human->number = $request->number;
        $human->area = $request->area;
        $human->branch = $request->branch;
        
       

           
        $request->file('cv')->store('public/cv');
        $filename =    $request->cv->hashName();
        $human->cv = $filename;
        $human->save();

        return  redirect()->back()->with('success' , 'Başvuru İşleminiz Başarıyla Gerçekleşmiştir!');




    }
}
