<div>
    @foreach($this->projects as $project)
        <li>
            <a href="{{ route('projects.show', 1) }}">
                {{ $project->id }}. {{ $project->title }}

            </a>
        </li>


    @endforeach
</div>
