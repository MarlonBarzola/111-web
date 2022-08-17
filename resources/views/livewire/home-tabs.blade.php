<div id="reseaux_sociaux" wire:init="init" style="opacity: @if ($loadData) 1 @else 0 @endif">

        <div class="accordeon">
            {{-- {{$search}} --}}
            <div class="link {{$service_active}}">
                <div class="prev column_servicios" wire:click="searchPage('servicios')">
                    <div class="title title_servicios">
                        <h2>SERVICIOS</h2>
                        @if ($pagina && $service_active != 'w-link')
                            <div class="icon">
                                @if ($pagina == 'servicios')
                                    <x-icon-minus />
                                @else
                                    <x-icon-plus />
                                @endif 
                            </div>
                        @endif
                    </div>
                    <div class="svg_cerebro">
                        <img src="{{ asset("images/cerebro.svg") }}">
                    </div>
                    <div class="texture texture_servicio">
                        <img src="{{ asset("images/textura.png") }}">
                    </div>
                </div>
                <div class="full_content">
                    <div class="full">
                        @livewire('services')
                    </div>
                </div>
            </div>

            <div class="link {{ $jobs_active }}">
                <div class="prev column_trabajos" wire:click="searchPage('trabajos')">
                    <div class="title title_trabajos">
                        <h2>TRABAJOS</h2>
                        @if ($pagina && $jobs_active != 'w-link')
                            <div class="icon">
                                @if ($pagina == 'trabajos')
                                    <x-icon-minus />
                                @else
                                    <x-icon-plus />
                                @endif 
                            </div>
                        @endif
                    </div>
                    <div class="svg_puntos">
                        <img src="{{ asset('images/puntos.svg') }}">
                    </div>
                    <div class="texture texture_trabajos">
                        <img src="{{ asset('images/textura.png') }}">
                    </div>
                </div>
                <div class="full_content">
                    <div class="full">
                        @if($job)
                            @livewire('job-show', ['job' => $job])
                        @else
                            @livewire('jobs')
                        @endif
                        
                    </div>
                </div>
            </div>

            <div class="link {{ $team_active }}">
                <div class="prev column_Equipo" wire:click="searchPage('equipo')">
                    <div class="title title_equipos">
                        <h2>EQUIPO</h2>
                        @if ($pagina && $team_active != 'w-link')
                            <div class="icon">
                                @if ($pagina == 'equipo')
                                    <x-icon-minus />
                                @else
                                    <x-icon-plus />
                                @endif 
                            </div>
                        @endif
                    </div>
                    <div class="svg_circulo">
                        <img src="{{ asset('images/circulo.svg') }}">
                    </div>
                    <div class="texture texture_equipos">
                        <img src="{{ asset('images/textura.png') }}">
                    </div>
                </div>
                <div class="full_content">
                    <div class="full">
                        @livewire('teams')
                    </div>
                </div>
            </div>
        </div>

    @livewire('hey-button')

</div>

