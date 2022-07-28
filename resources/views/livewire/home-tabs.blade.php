<div id="reseaux_sociaux">
    <div class="accordeon">
        
        <div class="link
        @if (request()->routeIs('/'))
        w-link
        @endif
        ">
            <div class="prev column_servicios">
                <div class="title title_servicios">
                    <h2>SERVICIOS</h2>
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

        <div class="link
        @if (request()->routeIs('/'))
        w-link
        @endif
        @if (request()->routeIs('jobs.show'))
        hovered
        @endif
        ">
            <div class="prev column_trabajos">
                <div class="title title_trabajos">
                    <h2>TRABAJOS</h2>
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
                        <x-show-job :job="$job" />
                    @else
                        @livewire('jobs')
                    @endif
                    
                </div>
            </div>
        </div>

        <div class="link
        @if (request()->routeIs('/'))
        w-link
        @endif
        ">
            <div class="prev column_Equipo">
                <div class="title title_equipos">
                    <h2>EQUIPO</h2>
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
</div>

@push('js')
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
@endpush
