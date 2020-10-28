<?php

namespace App\Http\Livewire;

use Livewire\Component;

class StudentCreateWire extends Component
{
    public $grade1 = 4; 
    public $intro1;  
    public $beha1;    
    public $speak1;
    public $read1;
    public $writ1;
    public $list1;    
    public $compr1;    
    public $subj1;    
    public $conc1;    
/*     public function mount(){
        $this->grade1 = $grade1;
        $this->intro1 = $intro1;
        $this->beha1 =  $beha1;
        $this->speak1 = $speak1;
        $this->read1 =  $read1;
        $this->writ1 =  $writ1;
        $this->list1 =  $list1;
        $this->compr1 = $compr1;
        $this->subj1 =  $subj1;
        $this->conc1 =  $conc1;
    } */

    public function render()
    {
        return view('livewire.student-create-wire');
    }
}
