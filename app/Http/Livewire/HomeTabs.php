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

    protected $listeners = ['showJob', 'listenPage'];

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
    }

    public function activateLinks($query) {
        if($query == 'servicios') {
            $this->service_active = 'hovered';
            $this->jobs_active = '';
            $this->team_active = '';
        }
        if($query == 'trabajos') {
            $this->service_active = '';
            $this->jobs_active = 'hovered';
            $this->team_active = '';
            $this->reset('job');;
        }
        if($query == 'equipo') {
            $this->service_active = '';
            $this->jobs_active = '';
            $this->team_active = 'hovered';
        }
    }

    public function showJob($job_id) {
        $this->job = Job::find($job_id);
        $this->trabajo = $this->job->slug;
    }

    public function listenPage($page) {
        $this->activateLinks($page);
    }

    public function render()
    {
        return view('livewire.home-tabs');
    }
}
