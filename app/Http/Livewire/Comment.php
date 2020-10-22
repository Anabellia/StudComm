<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Comment extends Component
{
    //ova mala increment func(method) je iz onog yt tutsa kratkog
    public function increment(){
        $this->commentG++;
    }
    public $commentG = 0;


    /* ovo je sa livewire sitea */


    public $IntroductionZZ = true;
    public $name ='Jelly22';
    public $loud = false;
    public $greeting = 'H-E-L-L-O';
    public $tipla = ['G-R-A-D-I-N-G'];
    

    //defout sam set chikita u ovaj metod ali kad ga pozovem iz blade i pass mu parametar u Bingo bude kad reset Bingo jel :(
    //sad cu comment ovaj dole method zato jer postoji precica kako da tamo u 
    //blade odmah set $name to Bingo "$set('name, 'Bingo") i ne treba ni method ni picke materine
    /* public function resetName($name = 'Chikita'){

        $this->name= $name;
    } */





    //Malo je guzva gore nastavljam sad ode 4 video nov method/model controller wire jbmliga
    public $prezime = 'Tot';

    public function mount($name){
        $this->name = $name;
    }

    
    








    public function render()
    {
        return view('livewire.comment');
    }
}