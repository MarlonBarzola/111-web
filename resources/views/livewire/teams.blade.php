<div class="content">
    <div class="text-right">
        @livewire('open-menu')
    </div>
    <div class="reel">
        <img src="{{ asset('images/banner-equipo.png') }}" alt="Tranajos 111">
    </div>

    <p style="text-align: center">
        Somos un equipo sólido de trabajo conformado por 18 talentos quienes pertenecen a las diferentes áreas de especialización: Comunicación, Producción, Diseño Gráfico, Gestión de Proyectos, Ilustración digital, Publicidad y Marketing, Motion Graphics, Desarrollo Web, Soporte técnico, Cobranzas, Mensajería y Despacho.
    </p>

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
