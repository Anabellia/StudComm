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

        

        

        // return string with first letters of sentences capitalized
        function ucsentence($str) {
            if ($str) { // input
              $str = preg_replace('/'.chr(32).chr(32).'+/', chr(32), $str); // recursively replaces all double spaces with a space
              if (($x = substr($str, 0, 10)) && ($x == strtoupper($x))) $str = strtolower($str); // sample of first 10 chars is ALLCAPS so convert $str to lowercase; if always done then any proper capitals would be lost
              $na = array('. ', '! ', '? '); // punctuation needles
              foreach ($na as $n) { // each punctuation needle
                if (strpos($str, $n) !== false) { // punctuation needle found
                  $sa = explode($n, $str); // split
                  foreach ($sa as $s) $ca[] = ucfirst($s); // capitalize
                  $str = implode($n, $ca); // replace $str with rebuilt version
                  unset($ca); //  clear for next loop
                }
              }
              return ucfirst(trim($str)); // capitalize first letter in case no punctuation needles found
            }
          }
    
    
}
        
        

