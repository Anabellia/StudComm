<?php

namespace App\Http\Livewire;

use Livewire\Component;


class StudentComment extends Component
{

    public $student; 


    public function render(){
        return view('livewire.student-comment');
    }
}
