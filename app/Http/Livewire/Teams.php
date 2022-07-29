<?php

namespace App\Http\Livewire;

use App\Models\Team;
use Livewire\Component;

class Teams extends Component
{
    public function render()
    {

        $teams = Team::orderBy('id', 'desc')->get();

        return view('livewire.teams', compact('teams'));
    }
}
