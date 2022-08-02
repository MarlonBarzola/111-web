<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Menu extends Component
{

    public $open_menu = '';
    public $currentLink;

    protected $listeners = ['openMenu', 'closeMenu', 'activateLinks'];

    public function openMenu() {
        $this->open_menu = 'open_menu';
    }

    public function closeMenu() {
        $this->open_menu = '';
    }

    public function menuFunction($value) {
        $this->emit('listenPage', $value);
        $this->emit('resetJob');
        $this->closeMenu();
        $this->currentLink = $value;
    }

    public function resetPage() {
        $this->closeMenu();
        $this->emit('goHome');
    }

    public function activateLinks($value) {
        $this->currentLink = $value;
    }

    public function render()
    {
        return view('livewire.menu');
    }
}
