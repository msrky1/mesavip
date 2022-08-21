<?php

namespace App\Http\Livewire\Admin\Team;

use Livewire\Component;
use Livewire\WithFileUploads;
use Carbon\Carbon;
use App\Models\Lawyer;
use App\Models\Notification;
use File;
class TeamEditComponent extends Component
{ 
    
    use WithFileUploads;
    public $name;
    public $date_birth;
    public $newimage;
    public $lawyer_id; 
    public $about;
    public $pozition;


    public function mount($lawyer_id) {

        $lawyer = Lawyer::where('id', $lawyer_id)->first();
        
        $this->name = $lawyer->name;
        $this->about = $lawyer->about;
        $this->pozition = $lawyer->pozition;
        $this->date_birth = $lawyer->date_birth;
        $this->image = $lawyer->image;
        $this->lawyer_id = $lawyer->id;
        

        }

        public function updateTeam() {

            $lawyer = Lawyer::find($this->lawyer_id);

            $lawyer->name = $this->name;
            $lawyer->about = $this->about;
            $lawyer->pozition = $this->pozition;
            $lawyer->date_birth = $this->date_birth;
      
            
       if ($this->newimage){
        $imageName = Carbon::now()->timestamp. '.' . $this->newimage->extension();
        $this->newimage->storeAs('public/team', $imageName);
        $lawyer->image = $imageName; 


    }
       $lawyer->save();

       session()->flash('message' ,'Başarıyla Güncellendi ');

        }

    public function render()
    {

      
        return view('livewire.admin.team.team-edit-component')->layout('layouts.admin');
    }
}
