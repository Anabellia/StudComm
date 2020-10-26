<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;
use App\Models\Comment;



class StudentComment extends Component

{
    /* public function process($text)
    {
        return preg_replace_callback(
            '/\{(((?>[^\{\}]+)|(?R))*?)\}/x',
            array($this, 'replace'),
            $text
        );
    } */

    //$spintax = new Spintax();
    /* public $string = '{Hello|Howdy|Hola} to you, {Mr.|Mrs.|Ms.} {Smith|Williams|Davis}!'; */
    

    
    /* public $probam1 = process($string); */


    //ova mala increment func(method) je iz onog yt tutsa kratkog
    public function increment(){
        
        $this->commentGGG=Comment::inRandomOrder()->first();
    }
    public $commentGGG;


    public $Intro1;
    
    public function mount(Student $student){

        $this->Intro1 = $student->Introduction;
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
