<?php

namespace App\Http\Livewire;

use Livewire\Component;

class StudentCreateWire extends Component
{
    public $grade1; 
    public $intro1;  
    public $beha1;    
    public $speak1;
    public $read1;
    public $writ1;
    public $list1;    
    public $compr1;    
    public $subj1;    
    public $conc1;    


    public function render()
    {
        return view('livewire.student-create-wire');
    }
}
