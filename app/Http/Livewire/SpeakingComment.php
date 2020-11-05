<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;
use App\Models\Comment;
use App\Models\Spintax;

class SpeakingComment extends Component
{
    public $noName;
    public $grade1;
    public $speak1;
    public $student;
    public $ctrlAllChbx;
    public $randAllChbx;

    /* Pull from DB */
    public function mount(Student $student){
        $this->speak1 = $student->Speaking;
    }

    /* chisto testing */
    public function noName($noName){
        $this->noName = $noName;
    }


    /* E Ovo vidi to mislim da je ono parent da updateuje child moras nesto duradish vidi caleb videos jos mislim da je to onaj zadnji od free */
    public function updated($grade1){        
        if($this->ctrlAllChbx == true && $this->randAllChbx == false){
            $this->speak1 = $this->grade1;
        }



    }

    public function render()
    {
        return view('livewire.speaking-comment');
    }
}
