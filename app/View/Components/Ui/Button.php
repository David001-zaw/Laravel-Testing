<?php

namespace App\View\Components\Ui;

use Illuminate\View\Component;

class Button extends Component
{
    public $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function render()
    {
        return view('components.ui.button');
    }
}
