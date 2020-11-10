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

    public $intro1;

    public $ctrlAllChbx = false;
    public $randAllChbx = false;
    public $student;

    public $grade1;     

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
        



        /* Ovo mi se cini da ne treba uopste sad kad radim na child ali ajd jos cu vidim */
        if($this->grade1 == 0){

            $this->intro1  = 0;
            $this->beha1 = 0;
            $this->speak1 = 0;            
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
            dobio 3 vara (npr 2,3,4) onda to uporedim sa 4 zato jer je meni 4 fals-e ako je 4 vracam 3 ako nije vracam to 
            sto jeste i onda finale pravim josh jedan uslov rand 0 ili 1-2-3 ako je nula vracam nula ako je 
            1-2-ili-3 vracam to sto jeste (procenat kolko hocesh nulla se sa tim 0,3 menja mozesh npr 0, 5) */
            $ass = $this->grade1;
            
            $this->intro1 = (rand(0, 3) == 0 ? 0 :(($ssa = rand($ass-1, $ass + 1)) < 4 ? $ssa : 3));
            $this->beha1 = (rand(0, 3) == 0 ? 0 :(($ssa = rand($ass-1, $ass + 1)) < 4 ? $ssa : 3));
            $this->speak1 = (rand(0, 3) == 0 ? 0 :(($ssa = rand($ass-1, $ass + 1)) < 4 ? $ssa : 3));
            $this->read1 = (rand(0, 3) == 0 ? 0 :(($ssa = rand($ass-1, $ass + 1)) < 4 ? $ssa : 3));
            $this->writ1 = (rand(0, 3) == 0 ? 0 :(($ssa = rand($ass-1, $ass + 1)) < 4 ? $ssa : 3));
            $this->list1 = (rand(0, 3) == 0 ? 0 :(($ssa = rand($ass-1, $ass + 1)) < 4 ? $ssa : 3));
            $this->compr1 = (rand(0, 3) == 0 ? 0 :(($ssa = rand($ass-1, $ass + 1)) < 4 ? $ssa : 3));
            $this->subj1 = (rand(0, 3) == 0 ? 0 :(($ssa = rand($ass-1, $ass + 1)) < 4 ? $ssa : 3));
            $this->conc1 = (rand(0, 3) == 0 ? 0 :(($ssa = rand($ass-1, $ass + 1)) < 4 ? $ssa : 3));   

        }        

    }

    public $commentINT;        
    
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
        $this_intro = 'Introduction'.$thintro1;                       
        $intro_DB = Comment::inRandomOrder()->select($this_intro)->first();

        $thbeha1 = $this->beha1;
        $this_beha = 'Behavior'.$thbeha1;                                      
        $beha_DB = Comment::inRandomOrder()->select($this_beha)->first();
        
        $thspeak1 = $this->speak1;
        $this_speak = 'Speaking'.$thspeak1;                                      
        $speak_DB = Comment::inRandomOrder()->select($this_speak)->first();
            
        $thread1 = $this->read1;
        $this_read = 'Reading'.$thread1;                                      
        $read_DB = Comment::inRandomOrder()->select($this_read)->first();
        
        $thwrit1 = $this->writ1;
        $this_writ = 'Writing'.$thwrit1;                                      
        $writ_DB = Comment::inRandomOrder()->select($this_writ)->first();
        
        $thlist1 = $this->list1;
        $this_list = 'Listening'.$thlist1;                                      
        $list_DB = Comment::inRandomOrder()->select($this_list)->first();
        
        $thcompr1 = $this->compr1;
        $this_compr = 'Comprehension'.$thcompr1;                                      
        $compr_DB = Comment::inRandomOrder()->select($this_compr)->first();
        
        $thsubj1 = $this->subj1;
        $this_subj = 'Subject'.$thsubj1;                                      
        $subj_DB = Comment::inRandomOrder()->select($this_subj)->first();        

        $thconc1 = $this->conc1;
        $this_conc = 'Conclusion'.$thconc1;                                      
        $conc_DB = Comment::inRandomOrder()->select($this_conc)->first();               
        
        $finals = [($intro_DB->$this_intro).' ', 
                    ($beha_DB->$this_beha).' ', 
                    ($speak_DB->$this_speak).' ',
                    ($read_DB->$this_read).' ',
                    ($writ_DB->$this_writ).' ',
                    ($list_DB->$this_list).' ',
                    ($compr_DB->$this_compr).' ',
                    ($subj_DB->$this_subj).' ',
                    ($conc_DB->$this_conc).' ',               
                
                ];
        /* dd($finals[1]); */
            
        /* Ovo dole je crap trebalo bi complete u svim comments da zamenim 
        ovo a ne samo u intro imaj u VIDU!!!! */

        
        $finals = str_replace('(name)',   $name_first, $finals);   
        $finals = str_replace('(he/she)', $gend_she_he,  $finals);
        $finals = str_replace('HHH',      $gend_her_his, $finals);
        $finals = str_replace('YYY',      $gend_him_her, $finals);
        
        $finale = implode($finals);

        $spintax = new Spintax();

        $spintaxWWW = $spintax->ucsentence($finale);
        $spintax = $spintax->process($spintaxWWW);

        return $this->commentINT = $spintax;      
  
    }


    public function render(){        
        return view('livewire.student-comment');
    }
}
