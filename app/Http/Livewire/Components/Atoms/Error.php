<?php

namespace App\Http\Livewire\Components\Atoms;

use Livewire\Component;

class Error extends Component
{
    public $errorName;
    public $message;
    // public function mount($errorName, $message)
    // {
    //     $this->name = $errorName;
    //     $this->message = $message;
    // }


    public function render()
    {
        return view('livewire.components.atoms.error');
    }
}
