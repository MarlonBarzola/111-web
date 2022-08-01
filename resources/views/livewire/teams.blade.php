<div class="content">
    <div class="text-right">
        @livewire('open-menu')
    </div>
    <div class="reel">
        <img src="{{ asset('images/trabajos/reel-trabajos.jpg') }}" alt="Tranajos 111">
    </div>

    @if ($teams->count())
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
    @else
        <p>No se encontraron resultados</p>
    @endif

</div>
