@props(['job'])

<article class="content show-job">

    <div class="return">
        <x-icon-left wire:click="$emit('jobPage')" />
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

</article>