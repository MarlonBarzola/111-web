@component('mail::message')
# Datos de contacto

<p>
    Corre electrónico: <br />
    {{ $message->email }}
</p>

<p>
    Nombre: <br />
    {{ $message->name }}
</p>

<p>
    Teléfono: <br />
    {{ $message->phone }}
</p>

<p>
    Mensaje: <br />
    {{ $message->body }}
</p>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
