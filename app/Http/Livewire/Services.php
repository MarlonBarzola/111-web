<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class Services extends Component
{

    public $categories;

    public function goJobs($value) {
        $this->emit('listenPage', 'trabajos', $value);
    }

    public function render()
    {

        $this->categories = Category::all();

        return view('livewire.services');
    }
}
