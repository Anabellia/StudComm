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
    /* public function increment(){        
        $this->commentGGG=Comment::inRandomOrder()->first();
    }
    public $commentGGG; */

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
            sto jeste i onda finale pravim josh jedan uslov rand 0 ili 1-2-3 ako je nula vracam nula ako je 
            1-2-ili-3 vracam to sto jeste (procenat kolko hocesh nulla se sa tim 0,3 menja mozesh npr 0, 5) */
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

    public $commentINT;    
    public $commentBEH;
    
    public function newComment(){ 
        
        //grab gender
        $gender = $this->student->gender;

            if($gender == 'Male'){
                $gend_him_her = 'him';  //YYY -> him
                $gend_she_he = 'he';    //(he/she) -> he
                $gend_her_his = 'his'; //HHH -> his 

            }elseif($gender == 'Female'){
                $gend_him_her = 'her';  //YYY -> her
                $gend_she_he = 'she';   //(he/she) -> she
                $gend_her_his = 'hers'; //HHH -> her
                //herself/himself -> hmmm ovo nisam koristio ali mozda budem
            }

        //name grab first name
        $name = $this->student->name;
            $wparts = explode(' ', $name);
            $name_first = array_shift($wparts);
            $name_last = array_pop($wparts);
            $name_middle = trim(implode(' ', $wparts));  

        //////////////////////////////////////////////////////////////
            //vrednost intro1 turim u thintro (this intro1)
        $thintro1 = $this->intro1;
        if ($thintro1 == 0){  return $this->commentINT = '';     }        
        
        $intro_DB = Comment::inRandomOrder()->select('Introduction'.$thintro1)->first();
            
            /* dd($intro_DB[$thintro1-1]); */
            $Intro_ctrl = str_replace('(name)',   $name_first, $intro_DB[$thintro1-1]);
            dd($Intro_ctrl-);
        
        $Intro_ctrl = str_replace('(name)',   $name_first, $Intro_ctrl);

        $Intro_ctrl = str_replace('(he/she)', $gend_she_he,  $Intro_ctrl);
        $Intro_ctrl = str_replace('HHH',      $gend_her_his, $Intro_ctrl);
        $Intro_ctrl = str_replace('YYY',      $gend_him_her, $Intro_ctrl);



        return $this->commentINT = $Intro_ctrl;




        if ($thintro1 == 1){
            //grab comments from that row
            $intro_DB = Comment::inRandomOrder()->select('Introduction'.$this->intro1)->first();            
        }
        if ($this->intro1 == 2){
            //grab comments from that row
            $intro_DB2 = Comment::inRandomOrder()->select('Introduction'.$this->intro1)->first();            
        }
        if ($this->intro1 == 3){
            //grab comments from that row
            $intro_DB3 = Comment::inRandomOrder()->select('Introduction'.$this->intro1)->first();            
        }

        //grab comments from that row
        $introDB = Comment::inRandomOrder()->select($IntroductionGrade)->first(); 

        //replacing name (name)->first name
        $Intro1 = str_replace('(name)',   $name_first, $introDB->Introduction1);
        $Intro2 = str_replace('(name)',   $name_first, $introDB->Introduction2);
        $Intro3 = str_replace('(name)',   $name_first, $introDB->Introduction3);        

        $Intro1 = str_replace('(he/she)', $gend_she_he,  $Intro1);
        $Intro1 = str_replace('HHH',      $gend_her_his, $Intro1);
        $Intro1 = str_replace('YYY',      $gend_him_her, $Intro1);

        $Intro2 = str_replace('(he/she)', $gend_she_he,  $Intro2);
        $Intro2 = str_replace('HHH',      $gend_her_his, $Intro2);
        $Intro2 = str_replace('YYY',      $gend_him_her, $Intro2);

        $Intro3 = str_replace('(he/she)', $gend_she_he,  $Intro3);
        $Intro3 = str_replace('HHH',      $gend_her_his, $Intro3);
        $Intro3 = str_replace('YYY',      $gend_him_her, $Intro3);

        
        
        if ($this->intro1 == 2){  return $this->commentINT = $Intro2;    }
        if ($this->intro1 == 3){  return $this->commentINT = $Intro3;    }
        
            

        //////////////////////////////////////////////////////////////
      
  
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
