<div class="content jobs">

    <div class="search">
        <label>
            <input type="search" wire:model="search">
            <x-icon-search />
        </label>
    </div>

    <div class="reel">
        <img src="{{ asset('images/trabajos/reel-trabajos.jpg') }}" alt="Tranajos 111">
    </div>

    @if ($jobs->count())
        <ul class="jobs-list">
                @foreach ($jobs as $job)
                    <li>
                        {{-- <a href="{{ route('jobs.show', $job) }}"> --}}
                        <a href="{{ URL::to('/'); }}/?search={{ $job->slug }}" wire:click.prevent="emitJob({{$job->id}})">
                            <div class="triangle">
                                <x-triangulo />
                                <h2 class="tag">{{ $job->category->name }}<span></span></h2>
                            </div>
                            <img src="{{ Storage::url($job->thumbnail) }}" alt="{{ $job->name }}">
                        </a>
                    </li>
                @endforeach
        </ul>
    @else
        <p>No se encontraron resultados</p>
    @endif
</div>
