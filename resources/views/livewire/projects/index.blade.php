<div class="grid grid-cols-2 gap-4">
    @foreach($this->projects as $project)
    <a href="{{ route('projects.show', 1) }}">
        <x-projects.simple-card :$project />

    </a>

    @endforeach
</div>
