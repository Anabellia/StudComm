<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Student;
use App\Models\Comment;

class Spintax extends Model

{
       
    use HasFactory;
    
    
    public function setSeed($seed)
    {
        srand($seed);
    }
        
    public function process($text)
    {     
        return preg_replace_callback(
            '/\{(((?>[^\{\}]+)|(?R))*?)\}/x',
            array($this, 'replace'),
            $text            
        );

    }    
        public function replace($text)
        {
            $text = $this->process($text[1]);
            $parts = explode('|', $text);            
            return $parts[array_rand($parts)];            
        }

        public function gender_spinn($spintax)
        {
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

            $spintax = str_replace('(he/she)', $gend_she_he,  $spintax);
            $spintax = str_replace('HHH',      $gend_her_his, $spintax);
            $spintax = str_replace('YYY',      $gend_him_her, $spintax);
            return $spintax;
        
        }

        public function name_spinn($name, $spintax)
        {
            //name grab first name ; last name ; middle name       
            $wparts = explode(' ', $name);
            $name_first = array_shift($wparts);
            $name_last = array_pop($wparts);
            $name_middle = trim(implode(' ', $wparts)); 

            $spintax = str_replace('(name)',   $name_first, $spintax);
            return $spintax;

        }
    
    
}
        
        

