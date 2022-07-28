@extends('adminlte::page')

@section('title', '111 Dashboard')

@section('content_header')
    <h1>{{ $title }}</h1>
@stop

@section('content')
    {{ $slot }}
@stop

@section('css')
    @stack('css')
@stop

@section('js')
    <script src="{{ asset('vendor/sweetalert/sweetalert.all.js')  }}"></script>
    @stack('scripts')
@stop