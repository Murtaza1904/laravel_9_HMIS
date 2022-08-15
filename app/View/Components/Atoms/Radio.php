<?php

namespace App\View\Components\Atoms;

use Illuminate\View\Component;


class Radio extends Component
{
    public $radioName;

    public function __construct($radioName)
    {
        $this->radioName = $radioName;
    }


    public function render()
    {
        return view('components.atoms.radio');
    }
}
