<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;
use App\Models\Comment;


class StudentComment extends Component
{

    public $student;
    public $comment; 


    public function render(){
        $this->comment=Comment::all();
        return view('livewire.student-comment');
    }
}
