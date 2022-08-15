<?php

namespace App\View\Components\Atoms;

use Illuminate\View\Component;


class Label extends Component
{
    public $label;

    public function __construct($label)
    {
        $this->label = $label;
    }


    public function render()
    {
        return view('components.atoms.label');
    }
}
