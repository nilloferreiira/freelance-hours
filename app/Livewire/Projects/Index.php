<?php

namespace App\Livewire\Projects;

use Livewire\Attributes\Computed;
use Livewire\Component;
use App\Models\Project;

class Index extends Component
{
    public function render()
    {
        return view('livewire.projects.index');
    }


    #[Computed()]

    public function Projects()
    {
        return Project::query()->inRandomOrder()->get();
    }
}
