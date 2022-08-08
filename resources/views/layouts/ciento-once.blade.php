<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="shortcut icon" href="{{ asset('images/111-icon.jpg') }}" type="image/x-icon">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/styles.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

        @livewireStyles

        <meta property="og:title" content="111 Studio"/>
        <meta id="urlWeb" property="og:url" content="{{ Request::url() }}"/>
        {{-- <meta property="og:image" content="{{ asset('images/mensajes-preview.jpg') }}"/>
        <meta property="og:image:secure_url" content="{{ asset('images/mensajes-preview.jpg') }}" />  --}}
        <meta property="og:image:type" content="image/jpg" /> 
        <meta property="og:image:width" content="400" /> 
        <meta property="og:image:height" content="400" />
        <meta property="og:description" content="Creamos experiencias visuales, combinando el diseño, la ilustración, la publicidad, la creatividad y el mundo online, con nuestra pasión por el desarrollo y la comunicación de marcas. Nuestra forma de trabajo siempre está en búsqueda de nuevas formas narrativas y la experimentación con nuevos medios; eso nos permite crear soluciones frescas, inspiradoras y diferentes a los estándares utilizados por la gran mayoría de marcas."/>
    </head>
    <body>
        <div>
            @livewire('loading')
            @livewire('menu')
            @livewire('meta-og-property')
            {{ $slot }}
        </div>

        @livewireScripts

        @stack('js')

    </body>
</html>
