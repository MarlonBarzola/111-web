<x-admin-layout>

    <x-slot name="title">
        Editar etiqueta
    </x-slot>

    <div class="card">
        <div class="card-body">

            {!! Form::model($tag, ['route' => ['admin.tags.update', $tag], 'method' => 'put']) !!}

                @include('admin.tags.partials.form')

                {!! Form::submit('Actualizar etiqueta', ['class' => 'btn btn-primary']) !!}

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

    <x-alert type="success"/>
    
</x-admin-layout>