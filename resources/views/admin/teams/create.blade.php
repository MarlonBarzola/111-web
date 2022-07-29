<x-admin-layout>

    <x-slot name="title">
        Crear miembro
    </x-slot>

    <div class="card">
        <div class="card-body">

            {!! Form::open(['route' => 'admin.teams.store', 'files' => true]) !!}

                @include('admin.teams.partials.form')

                {!! Form::submit('Crear miembro', ['class' => 'btn btn-primary']) !!}

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

            function init() {
                var inputFile = document.getElementById('picture');
                if(inputFile) inputFile.addEventListener('change', mostrarImagen, false);
            }

            function mostrarImagen(event) {
                var file = event.target.files[0];
                var reader = new FileReader();
                reader.onload = function(event) {
                    var img = document.getElementById('picture');
                    img.src = event.target.result;
                }
                reader.readAsDataURL(file);
            }

            window.addEventListener('load', init, false);

        </script>  
    @endpush
    
</x-admin-layout>