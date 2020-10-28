<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

use Livewire\Component;
use App\Models\Student;
use App\Models\Comment;
use App\Models\Spintax;



class StudentComment extends Component

{  
    //ova mala increment func(method) je iz onog yt tutsa kratkog
    public function increment(){        
        $this->commentGGG=Comment::inRandomOrder()->first();
    }
    public $commentGGG;

    public $ctrlAllChbx = false;
    public $randAllChbx = false;

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
    public function mount(Student $student){
        $this->grade1 = $student->grade;
        $this->intro1 = $student->Introduction;
        $this->beha1 = $student->Behavior;
        $this->speak1 = $student->Speaking;
        $this->read1 = $student->Reading;
        $this->writ1 = $student->Writing;
        $this->list1 = $student->Listening;
        $this->compr1 = $student->Comprehension;
        $this->subj1 = $student->Subject;
        $this->conc1 = $student->Conclusion;
    }

    public function updated($grade1){
        if($this->grade1 == 0){

            $this->intro1  = 0;
            $this->beha1 = 0;
            $this->speak1  = 0;
            $this->read1  = 0;
            $this->writ1  = 0;
            $this->list1  = 0;
            $this->compr1 = 0;
            $this->subj1  = 0;
            $this->conc1  = 0;
        }

        if($this->ctrlAllChbx == true && $this->randAllChbx == false){
            
            $this->intro1 = $this->grade1;
            $this->beha1 = $this->grade1;
            $this->speak1 = $this->grade1;
            $this->read1 = $this->grade1;
            $this->writ1 = $this->grade1;
            $this->list1 = $this->grade1;
            $this->compr1 = $this->grade1;
            $this->subj1 = $this->grade1;
            $this->conc1 = $this->grade1;
            
        }
        

        if($this->randAllChbx == true){

            /* Da objasnim sebi: u ass turim trenutni globalni grade onda tom gradeu dodam 1 i oduzmem jedan da bi 
            dobio 3 vara (npr 3,4,5) onda to uporedim sa 6 zato jer je meni 6 fals-e ako je 6 vracam 5 ako nije vracam to 
            sto jeste i onda finale pravim josh jedan uslov rand 0 ili 1-2-3 ako je nula vracam nula ako je 1-2-ili-3 vracam to sto jeste */
            $ass = $this->grade1;
            
            $this->intro1 = (rand(0, 3) == 0 ? 0 :(($ssa = rand($ass-1, $ass + 1)) < 6 ? $ssa : 5));
            $this->beha1 = (rand(0, 3) == 0 ? 0 :(($ssa = rand($ass-1, $ass + 1)) < 6 ? $ssa : 5));
            $this->speak1 = (rand(0, 3) == 0 ? 0 :(($ssa = rand($ass-1, $ass + 1)) < 6 ? $ssa : 5));
            $this->read1 = (rand(0, 3) == 0 ? 0 :(($ssa = rand($ass-1, $ass + 1)) < 6 ? $ssa : 5));
            $this->writ1 = (rand(0, 3) == 0 ? 0 :(($ssa = rand($ass-1, $ass + 1)) < 6 ? $ssa : 5));
            $this->list1 = (rand(0, 3) == 0 ? 0 :(($ssa = rand($ass-1, $ass + 1)) < 6 ? $ssa : 5));
            $this->compr1 = (rand(0, 3) == 0 ? 0 :(($ssa = rand($ass-1, $ass + 1)) < 6 ? $ssa : 5));
            $this->subj1 = (rand(0, 3) == 0 ? 0 :(($ssa = rand($ass-1, $ass + 1)) < 6 ? $ssa : 5));
            $this->conc1 = (rand(0, 3) == 0 ? 0 :(($ssa = rand($ass-1, $ass + 1)) < 6 ? $ssa : 5));   

        }
        

    }

    public $commentZZ;    
    
    public function newComment($gd){
        if ($gd == 0){  return $this->commentZZ = '';     }
        $gradeP = 'grade'.$gd;
        $rukituki = Comment::inRandomOrder()->select($gradeP)->first();       
 
        if ($gd == 1){  return $this->commentZZ = $rukituki->grade1;    }
        if ($gd == 2){  return $this->commentZZ = $rukituki->grade2;    }
        if ($gd == 3){  return $this->commentZZ = $rukituki->grade3;    }
        if ($gd == 4){  return $this->commentZZ = $rukituki->grade4;    }
        if ($gd == 5){  return $this->commentZZ = $rukituki->grade5;    }
        if ($gd == 0){  return $this->commentZZ = '';   }
            
        
  
    }


    public $student;
    public $comment1;    
    public $comment2;

    public function render(){
        //$this->comment=Comment::all();
        $this->comment1=Comment::inRandomOrder()->first();
        $this->comment2=Comment::inRandomOrder()->first();
       
        //$this->comment=Comment::all()->random(1)->first();
        return view('livewire.student-comment');
    }
}
