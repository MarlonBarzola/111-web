<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Jenssegers\Agent\Agent;

class CientoOnceLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        $agent = new Agent();
        return view('layouts.ciento-once', compact('agent'));
    }
}
