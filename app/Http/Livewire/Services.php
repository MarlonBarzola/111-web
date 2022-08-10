<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Customer;
use Livewire\Component;

class Services extends Component
{

    public $categories;
    public $customers;

    public function mount() {
        $this->categories = Category::all();
        $this->customers = Customer::all();
    }

    public function goJobs($value) {
        $this->emit('listenPage', 'trabajos', $value);
    }

    public function render()
    {
        return view('livewire.services');
    }
}
