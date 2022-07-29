<div class="content">
    <div class="reel">
        <img src="{{ asset('images/trabajos/reel-trabajos.jpg') }}" alt="Tranajos 111">
    </div>

    <ul class="team">
        @foreach ($teams as $team)
            <li>
                <figure>
                    <img src="{{ Storage::url($team->thumbnail) }}" alt="{{ $team->name }}">
                </figure>
                <div class="data">
                    <h2>{{ $team->name }}</h2>
                    <span>{{ $team->position }}</span>
                </div>
            </li>
        @endforeach
    </ul>

</div>
