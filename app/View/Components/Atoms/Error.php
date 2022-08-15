<?php

namespace App\View\Components\Atoms;

use Illuminate\View\Component;


class Error extends Component
{
    public $errorName;
    public $message;
    public function __construct($errorName, $message)
    {
        $this->name = $errorName;
        $this->message = $message;
    }


    public function render()
    {
        return view('components.atoms.error');
    }
}
