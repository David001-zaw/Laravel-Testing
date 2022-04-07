<?php

namespace App\View\Components\Ui;

use Illuminate\View\Component;

class Input extends Component
{
    public $type;
    public $label;

    public function __construct($type, $label)
    {
        $this->type = $type;
        $this->label = $label;
    }

    public function render()
    {
        return view('components.ui.input');
    }
}
