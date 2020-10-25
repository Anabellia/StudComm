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
        //$this->comment=Comment::all();
        $this->comment=Comment::inRandomOrder()->first();
        //$this->comment=Comment::all()->random(1)->first();
        return view('livewire.student-comment');
    }
}
