<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    @foreach($this->projects as $project)
        <li>
            <a href="{{ route('projects.show', $project) }}">{{ $project->id }}. {{ $project->title }} </a>
        </li>
    @endforeach
        
</div>
