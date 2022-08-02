<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Job;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class Jobs extends Component
{

    public $search = '';
    public $jobs;

    protected $listeners = ['searchJob'];

    public function emitJob($job_id) {
        $this->emit('showJob', $job_id);
    }

    public function category($slug) {
        $this->search = $slug;
    }

    public function searchJob($value) {
        $this->search = $value;
    }

    public function render()
    {
        $this->jobs = Job::where([
                        ['name', 'LIKE', '%' . $this->search . '%'],
                        ['status', Job::PUBLISH]
                    ])
                    ->orWhereHas('category', function(Builder $query) {
                        $query->where([
                            ['name', 'LIKE', '%' . $this->search . '%'],
                            ['status', Job::PUBLISH]
                        ]);
                    })
                    ->orderBy('id', 'desc')->get();
        return view('livewire.jobs');
    }
}
