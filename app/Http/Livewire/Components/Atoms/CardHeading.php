<?php

namespace App\Http\Livewire\Components\Atoms;

use Livewire\Component;

class CardHeading extends Component
{
    public $heading;

    // public function mount($heading)
    // {
    //     $this->heading = $heading;
    // }


    public function render()
    {
        return view('livewire.components.atoms.card-heading');
    }
}
