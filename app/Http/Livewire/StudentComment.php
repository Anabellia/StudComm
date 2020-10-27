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


    public $Intro1;    
    public function mount(Student $student){
        $this->Intro1 = $student->Introduction;
    }


    protected $testText;

    public function spinning(){

        $swssw = '{Hello|Howdy|Hola} to you, {Mr.|Mrs.|Ms.} {Smith|Williams|Davis}!';
        $this->testText = new Spintax();
        
        $this->testText->process($swssw);
        dd($this->testText);
    }


    public $commentZZ;    
    
    public function newComment($gd){
        if ($gd == 0){  return $this->commentZZ = '';     }
        $gradeP = 'grade'.$gd;
        $rukituki = Comment::inRandomOrder()->select($gradeP)->first();
        
       

        /* json_decode($rukituki); */
        /* dd($rukituki); */
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
