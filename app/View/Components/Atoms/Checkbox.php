<?php

namespace App\View\Components\Atoms;

use Illuminate\View\Component;


class Checkbox extends Component
{
    public $checkbox_name;

    public function __construct($checkbox_name)
    {
        $this->checkbox_name = $checkbox_name;
    }


    public function render()
    {
        return view('components.atoms.checkbox');
    }
}
