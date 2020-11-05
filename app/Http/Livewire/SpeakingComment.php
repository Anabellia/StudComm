<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SpeakingComment extends Component
{
    public $noName;
    public function mount($noName){
        $this->noName = $noName;
    }
    public function render()
    {
        return view('livewire.speaking-comment');
    }
}
