<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Sidebar extends Component
{
    public $expand;

    public function __construct($expand = false)
    {
        $this->expand = $expand;
    }

    public function render()
    {
        return view('components.sidebar');
    }
}