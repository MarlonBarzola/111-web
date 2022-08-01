<div id="reseaux_sociaux" wire:init="init">
    @if ($loadData)
        <div class="accordeon">
            {{-- {{$search}} --}}
            <div class="link {{$service_active}}">
                <div class="prev column_servicios" wire:click="searchPage('servicios')">
                    <div class="title title_servicios">
                        <h2>SERVICIOS</h2>
                        @if ($pagina)
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
                        <img src="{{ asset("images/textura.svg") }}">
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
                        @if ($pagina)
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
                        <img src="{{ asset('images/textura.svg') }}">
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
                        @if ($pagina)
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
                        <img src="{{ asset('images/textura.svg') }}">
                    </div>
                </div>
                <div class="full_content">
                    <div class="full">
                        @livewire('teams')
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>

{{-- @push('js')
    <script>
        let links = document.querySelectorAll('.link');
        links.forEach(link => {
            link.addEventListener('click', () => {
                let all_links = document.querySelectorAll('.link');
                all_links.forEach(element => {
                    element.classList.remove('hovered');
                    element.classList.remove('w-link');
                });
                link.classList.add('hovered');
            });
        });
    </script>
@endpush --}}
