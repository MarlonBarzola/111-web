<div id="reseaux_sociaux">
    <div class="accordeon">
        <div class="link w-link">
            <div class="prev column_servicios">
                <div class="title_servicios">
                    <h2>SERVICIOS</h2>
                </div>
                <div class="svg_cerebro">
                    <img src="{{ asset("images/cerebro.svg") }}">
                </div>
                <div class="texture_servicio">
                    <img src="{{ asset("images/textura.svg") }}">
                </div>
            </div>
            <div class="full_content">
                <div class="full">
                    @livewire('services')
                </div>
            </div>
        </div>
        <div class="link w-link">
            <div class="prev column_trabajos">
                <div class="title_trabajos">
                    <h2>TRABAJOS</h2>
                </div>
                <div class="svg_puntos">
                    <img src="{{ asset('images/puntos.svg') }}">
                </div>
                <div class="texture_trabajos">
                    <img src="{{ asset('images/textura.svg') }}">
                </div>
            </div>
            <div class="full_content">
                <div class="full">
                    @livewire('jobs')
                </div>
            </div>
        </div>
        <div class="link w-link last-link">
            <div class="prev column_Equipo">
                <div class="title_equipos">
                    <h2>EQUIPO</h2>
                </div>
                <div class="svg_circulo">
                    <img src="{{ asset('images/circulo.svg') }}">
                </div>
                <div class="texture_equipos">
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $(".accordeon .link").click(function() {
            $(".accordeon .link").removeClass("hovered");
            $(".accordeon .link").removeClass("w-link");
            $(this).addClass("hovered");
        });
    </script>
@endpush
