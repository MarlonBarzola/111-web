<div class="content jobs">

    <div class="reel">
        <img src="{{ asset('images/trabajos/reel-trabajos.jpg') }}" alt="Tranajos 111">
    </div>

    <ul class="jobs-list">
        @foreach ($jobs as $job)
            <li>
                <a href="{{ route('jobs.show', $job) }}">
                    <div class="triangle">
                        <x-triangulo />
                        <h2 class="tag">{{ $job->category->name }}<span></span></h2>
                    </div>
                    <img src="{{ Storage::url($job->thumbnail) }}" alt="{{ $job->name }}">
                </a>
            </li>
        @endforeach
    </ul>
</div>
