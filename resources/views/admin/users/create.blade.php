<x-admin-layout>

    <x-slot name="title">
        Crear usuario
    </x-slot>

    <div class="card">
        <div class="card-body">

            {!! Form::open(['route' => 'admin.users.store']) !!}

                @include('admin.users.partials.form')

                {!! Form::submit('Crear usuario', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
    
</x-admin-layout>