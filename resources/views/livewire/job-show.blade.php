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
            <h2>{{ $job->extract }}</h2>
            <h3>{{ $job->category->name }}</h3>
        </div>
        <img src="{{ Storage::url($job->banner) }}" alt="{{ $job->name }}">
    </div>

    <figure class="thumbnail">
        <img src="{{ Storage::url($job->thumbnail) }}" alt="{{ $job->name }}">
    </figure>

    <div class="job-content">
        <h1>{{ $job->name }}</h1>
        {!! $job->body !!}
    </div>

    @if ($job->iframe)
        <iframe class="instagram-media instagram-media-rendered" id="instagram-embed-0" src="https://www.instagram.com/p/{{ $job->iframe }}/embed/captioned/" allowtransparency="true" allowfullscreen="true" data-instgrm-payload-id="instagram-media-payload-0" scrolling="no" style="background: white none repeat scroll 0% 0%; max-width: 540px; width: calc(100% - 2px); border-radius: 3px; border: 1px solid rgb(219, 219, 219); box-shadow: none; display: block; margin: auto; min-width: 326px; padding: 0px;" height="1057" frameborder="0"></iframe>
    @endif

</article>
