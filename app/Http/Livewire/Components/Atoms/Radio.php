<?php

namespace App\Http\Livewire\Components\Atoms;

use Livewire\Component;

class Radio extends Component
{
    public $radioName;

    // public function mount($radioName)
    // {
    //     $this->radioName = $radioName;
    // }


    public function render()
    {
        return view('livewire.components.atoms.radio');
    }
}
