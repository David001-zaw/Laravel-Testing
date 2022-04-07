<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public $type;
    // public $message;

    public function __construct($type="success")
    {
        $this->type = $type;
        // $this->message = $message;
    }

    public function typeClass()
    {
        if($this->type == "error"){
            return "alert-danger";
        }else{
            return "alert-success";
        }
    }


    public function render()
    {
        return view('components.alert');
    }
}
