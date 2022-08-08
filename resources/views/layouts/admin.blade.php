@extends('adminlte::page')

@section('title', '111 Dashboard')

@section('content_header')
    <h1>{{ $title }}</h1>
@stop

@section('content')
    {{ $slot }}
@stop

@section('css')
    <link rel="shortcut icon" href="{{ asset('images/111-icon.jpg') }}" type="image/x-icon">
    @livewireStyles
    @stack('css')
@stop

@section('js')
    @livewireScripts
    <script src="{{ asset('vendor/sweetalert/sweetalert.all.js')  }}"></script>
    @stack('scripts')
@stop