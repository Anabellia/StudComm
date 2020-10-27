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
    

    //$spintax = new Spintax();
    /* public $string = '{Hello|Howdy|Hola} to you, {Mr.|Mrs.|Ms.} {Smith|Williams|Davis}!'; */


    //ova mala increment func(method) je iz onog yt tutsa kratkog
    public function increment(){        
        $this->commentGGG=Comment::inRandomOrder()->first();
    }
    public $commentGGG;


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

/*     public $newQty;

    public function updateqty($id)
    {
        $partqty = Mypart::findOrFail($id);
        $partqty->qty = $this->newQty;
        $partqty->save();
    } */

    
    
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
