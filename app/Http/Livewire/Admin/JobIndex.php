<?php

namespace App\Http\Livewire\Admin;

use App\Models\Job;
use Livewire\Component;
use Livewire\WithPagination;

class JobIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    //restablecer paginas al buscar
    public function updatingSearch() {
        $this->resetPage();
    }

    public function render()
    {
        $jobs = Job::where('name', 'LIKE', '%' . $this->search . '%')
                    ->latest()
                    ->paginate(10);
        return view('livewire.admin.job-index', compact('jobs'));
    }

}
