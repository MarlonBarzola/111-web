<?php

namespace App\Http\Livewire;

use App\Models\Job;
use Livewire\Component;

class HomeTabs extends Component
{

    public $job;

    public function render()
    {
        return view('livewire.home-tabs');
    }
}
