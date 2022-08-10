<div class="wrapper_services">
    <div class="content text-right">
        @livewire('open-menu')
    </div>
    <div class="wrapper_text">
        <p class="encabezado_services">
            En un entorno de comunicación.
            la comunicación no puedes ser invasiva
            y apersonal, la comunicación actual más
            allá de crear consumidores, aspira a crear
            "fans" de las marcas, y por ende son mas
            dieles a ellas. Creemos que existe una
            nueva forma de hacer comunicación visual
            y sabemos cómo hacerlo.
        </p>
        <ul class="list_Servicios">
            @foreach ($categories as $category)
                <li class="elemnt_list_servicio" wire:click="goJobs('{{ $category->name }}')">
                    {{ $category->name }}
                </li>
            @endforeach
        </ul>
    </div>
    <div class="wrapper_video">
        <video width="710" height="550" controls="Play" poster="{{ asset("images/portada.png") }}">
            <source src="{{ asset("images/video.mp4") }}" type="video/mp4">
        </video>
    </div>
    <div class="title_cliente">
        <h2>CLIENTES</h2>
    </div>
    <div class="wrapper_logos">
    <div class="contenedor_logos">
        @foreach ($customers as $customer)
            <img src="{{ Storage::url($customer->thumbnail) }}" alt="{{ $customer->name }}">
        @endforeach
        <div class="logo_cliente">
            
        </div>
    </div>
    </div>
</div>