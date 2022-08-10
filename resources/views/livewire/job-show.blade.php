<article class="content show-job">

    <div class="flex justify-between">
        <div class="return" wire:click="showPage('trabajos')">
            <span title="Regresar">
                <x-icon-left />
            </span>
        </div>
        @livewire('open-menu')
    </div>
    
    <div class="banner">
        <div class="header">
            <h2>{{ $job->name }}</h2>
            <h3>{{ $job->category->name }}</h3>
        </div>
        <img src="{{ Storage::url($job->banner) }}" alt="{{ $job->name }}">
    </div>

    <div class="job-content">
        <h1>{{ $job->name }}</h1>
        {!! $job->body !!}
    </div>

    @if ($job->iframe)
        <div class="iframes">
            {!! $job->iframe !!}
        </div>
    @endif

</article>
