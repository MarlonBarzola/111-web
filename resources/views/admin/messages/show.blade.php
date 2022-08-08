<x-admin-layout>

    <x-slot name="title">
    Mensaje
    </x-slot>

    <div class="card">
        <div class="card-body card-text">

            <p><strong>De:</strong></p>
            <p>{{ $message->name }}</p>

            <p><strong>Correo electrónico:</strong></p>
            <p>{{ $message->email }}</p>

            <p><strong>Teléfono:</strong></p>
            <p>{{ $message->phone }}</p>

            <p><strong>Mensaje:</strong></p>
            <p>{{ $message->body }}</p>

            <p><strong>Fecha:</strong></p>
            <p>{{ $message->created_at }}</p>

        </div>
    </div>

</x-admin-layout>