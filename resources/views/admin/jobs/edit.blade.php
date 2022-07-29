<x-admin-layout>

    @push('css')
        <style>
            .ck-content {
                height: 400px;
            }
        </style>
    @endpush
    
    <x-slot name="title">
        Editar post
    </x-slot>

    <div class="card">
        <div class="card-body">
            {!! Form::model($job, ['route' => ['admin.jobs.update', $job], 'autocomplete' => 'off', 'files' => true, 'method' => 'put']) !!}

                @include('admin.jobs.partials.form')

                {!! Form::submit('Actualizar post', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>

    @push('css')
        <style>
            .image-wrapper {
                position: relative;
                padding-bottom: 56.25%
            }
            .image-wrapper img {
                position: absolute;
                object-fit: cover;
                width: 100%;
                height: 100%;
            }
        </style>
    @endpush

    @push('scripts')
        <script src="{{ asset('vendor/jquery-string-to-slug/jquery.stringToSlug.min.js') }}"></script>
        <script src="{{ asset('vendor/ckeditor5-build-classic/build/ckeditor.js') }}"></script>

        <script>
            $(document).ready( function() {
                $("#name").stringToSlug({
                    setEvents: 'keyup keydown blur',
                    getPut: '#slug',
                    space: '-'
                });
            });
            ClassicEditor
                .create(document.querySelector('#body'), {
                    simpleUpload: {
                        // The URL that the images are uploaded to.
                        uploadUrl: "{{route('admin.image.upload')}}",
                    }
                })
                .catch(error => {
                    console.error(error);
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
                    img.src= event.target.result;
                }
                reader.readAsDataURL(file);
            }

            window.addEventListener('load', init, false);

        </script>  
    @endpush

    <x-alert />
    
</x-admin-layout>