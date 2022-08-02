<?php

namespace App\Http\Livewire;

use App\Models\Job;
use Livewire\Component;

class HomeTabs extends Component
{

    public $job;

    public $pagina;
    public $trabajo;
    protected $queryString = [
        'pagina', 
        'trabajo' => ['except' => '']
    ];

    public $service_active = 'w-link';
    public $jobs_active = 'w-link';
    public $team_active = 'w-link';

    protected $listeners = ['showJob', 'listenPage', 'goHome', 'resetJob'];

    public bool $loadData = false;

    public function init()
    {
        $this->loadData = true;
    }

    public function mount() {
        $this->activateLinks($this->pagina);
        if($this->trabajo != '') {
            $this->job = Job::where('slug', $this->trabajo)->first();
        }
        
    }

    public function searchPage($value) {
        $this->activateLinks($value);
        $this->pagina = $value;
        if($this->pagina != 'trabajos') {
            $this->trabajo = '';
        }
        $this->emit('activateLinks', $value);
    }

    public function activateLinks($query) {
        if($query == 'servicios') {
            $this->service_active = 'rotation hovered';
            $this->jobs_active = 'rotation ';
            $this->team_active = 'rotation ';
        }
        if($query == 'trabajos') {
            $this->service_active = 'rotation ';
            $this->jobs_active = 'rotation hovered';
            $this->team_active = 'rotation ';
            $this->reset('job');
        }
        if($query == 'equipo') {
            $this->service_active = 'rotation ';
            $this->jobs_active = 'rotation ';
            $this->team_active = 'rotation hovered';
        }
    }

    public function showJob($job_id) {
        $this->job = Job::find($job_id);
        $this->trabajo = $this->job->slug;
    }

    public function listenPage($page, $search = '') {
        $this->searchPage($page);
        if($search != '') {
            $this->emit('searchJob', $search);
        }
    }

    public function resetHome() {
        $this->reset('service_active', 'jobs_active', 'team_active', 'pagina', 'trabajo');
        $this->emit('activateLinks', 'home');
    }

    public function resetJob() {
        $this->reset('trabajo');
    }

    public function goHome() {
        $this->resetHome();
    }

    public function render()
    {
        return view('livewire.home-tabs');
    }
}
