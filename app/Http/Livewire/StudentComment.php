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

    public $commentZZ;    
    
    public function newComment($gd){ //gd je u stvari grade
        if ($gd == 0){  return $this->commentZZ = '';     } //return nista ako je gd zero
        $gradeP = 'grade'.$gd;         

        //grab gender
        $gender = $this->student->gender;

        if($gender == 'Male'){
            $gend_him_her = 'him';  //YYY -> him
            $gend_her_he = 'he';    //ZZZ -> he
            $gend_hers_his = 'his'; //HHH -> his 
            //himself -> hmmm ovo nisam koristio ali mozda budem
        }elseif($gender == 'Female'){
            $gend_him_her = 'her';  //YYY -> her
            $gend_her_he = 'she';   //ZZZ -> she
            $gend_hers_his = 'hers'; //HHH -> hers
            //herself -> hmmm ovo nisam koristio ali mozda budem
        }
        //name grab first name
        $name = $this->student->name;
        $wparts = explode(' ', $name);
        $name_first = array_shift($wparts);
        $name_last = array_pop($wparts);
        $name_middle = trim(implode(' ', $wparts));        
      
        //grab comments from that row
        $rukituki = Comment::inRandomOrder()->select($gradeP)->first(); 

        //replacing name XXX->first name
        $ruki1 = str_replace('XXX', $name_first, $rukituki->grade1);
        $ruki2 = str_replace('XXX', $name_first, $rukituki->grade2);
        $ruki3 = str_replace('XXX', $name_first, $rukituki->grade3);
        $ruki4 = str_replace('XXX', $name_first, $rukituki->grade4);
        $ruki5 = str_replace('XXX', $name_first, $rukituki->grade5);

        $ruki1 = str_replace('ZZZ', $gend_her_he, $ruki1);
        $ruki1 = str_replace('HHH', $gend_hers_his, $ruki1);
        $ruki1 = str_replace('YYY', $gend_him_her, $ruki1);

        /* $ruki1 = str_replace('ZZZ', $gend_her_he, $ruki1->grade1);
        $ruki2 = str_replace('ZZZ', $gend_her_he, $ruki2->grade2);
        $ruki3 = str_replace('ZZZ', $gend_her_he, $ruki3->grade3);
        $ruki4 = str_replace('ZZZ', $gend_her_he, $ruki4->grade4);
        $ruki5 = str_replace('ZZZ', $gend_her_he, $ruki5->grade5);

        $ruki1 = str_replace('HHH', $gend_shees_his, $ruki1->grade1);
        $ruki2 = str_replace('HHH', $gend_shees_his, $ruki2->grade2);
        $ruki3 = str_replace('HHH', $gend_shees_his, $ruki3->grade3);
        $ruki4 = str_replace('HHH', $gend_shees_his, $ruki4->grade4);
        $ruki5 = str_replace('HHH', $gend_shees_his, $ruki5->grade5); */


        if ($gd == 1){  return $this->commentZZ = $ruki1;    }
        if ($gd == 2){  return $this->commentZZ = $ruki2;    }
        if ($gd == 3){  return $this->commentZZ = $ruki3;    }
        if ($gd == 4){  return $this->commentZZ = $ruki4;    }
        if ($gd == 5){  return $this->commentZZ = $ruki5;    }
        if ($gd == 0){  return $this->commentZZ = '';   }
            

                //////////////////////////////////////////////////////////////
        
        /* str_replace('XXX', $sss, $rukituki->grade1); */       

        $firstDespin = str_replace ('XXX', $name_first, $spinningSad);      

        return $firstDespin;

        /////////////////////////////////////////////////////////////////// 
        
  
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
