<?php

namespace App\View\Components\Atoms;

use Illuminate\View\Component;


class Button extends Component
{
    public $redirect;
    public $class;
    public $text;

    public function __construct($redirect, $class, $text)
    {
        $this->redirect = $redirect;
        $this->class = $class;
        $this->text = $text;
    }


    public function render()
    {
        return view('components.atoms.button');
    }
}
