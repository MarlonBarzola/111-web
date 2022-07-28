<x-admin-layout>

    <x-slot name="title">
        Crear etiqueta
    </x-slot>

    <div class="card">
        <div class="card-body">

            {!! Form::open(['route' => 'admin.tags.store']) !!}

                @include('admin.tags.partials.form')

                {!! Form::submit('Crear etiqueta', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>

    @push('scripts')
        <script src="{{ asset('vendor/jquery-string-to-slug/jquery.stringToSlug.min.js') }}"></script>

        <script>
            $(document).ready( function() {
                $("#name").stringToSlug({
                    setEvents: 'keyup keydown blur',
                    getPut: '#slug',
                    space: '-'
                });
            });
        </script>  
    @endpush
    
</x-admin-layout>