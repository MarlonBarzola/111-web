<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Loading extends Component
{

    public $loader = true;

    protected $listeners = ['hideLoader'];

    public function hideLoader() {
        $this->loader = false;
    }

    public function render()
    {
        return view('livewire.loading');
    }
}
