<x-admin-layout>

    <x-slot name="title">
        Editar usuario
    </x-slot>

    <div class="card">
        <div class="card-body">

            {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put']) !!}

                @include('admin.users.partials.form')

                {!! Form::submit('Actualizar usuario', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}

        </div>
    </div>

    <x-alert type="success"/>
    
</x-admin-layout>