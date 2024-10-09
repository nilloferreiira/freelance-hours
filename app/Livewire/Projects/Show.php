<?php

namespace App\Livewire\Projects;

use Livewire\Component;
use App\Models\Project;

class Show extends Component
{

    public Project $project;

    public function mount($p)
    {
        $this->project = Project::find($p);
    }

    public function render()
    {
        return view('livewire.projects.show');
    }
}
