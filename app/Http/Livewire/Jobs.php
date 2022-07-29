<?php

namespace App\Http\Livewire;

use App\Models\Job;
use Livewire\Component;

class Jobs extends Component
{
    public function render()
    {
        $jobs = Job::orderBy('id', 'desc')->get();
        return view('livewire.jobs', compact('jobs'));
    }
}
