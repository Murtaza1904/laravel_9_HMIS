<?php

namespace App\Http\Livewire\Components\Atoms;

use Livewire\Component;


class Button extends Component
{
    public $redirect;
    public $class;
    public $text;

    public function mount($redirect, $class, $text)
    {
        $this->redirect = $redirect;
        $this->class = $class;
        $this->text = $text;
    }


    public function render()
    {
        return view('livewire.components.atoms.button');
    }
}
