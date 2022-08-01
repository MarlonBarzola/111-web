<?php

namespace App\Http\Livewire;

use Livewire\Component;

class JobShow extends Component
{

    public $job;

    public function showPage($page) {
        $this->emit('listenPage', $page);
        $this->emit('resetJob');
    }

    public function render()
    {
        return view('livewire.job-show');
    }
}
