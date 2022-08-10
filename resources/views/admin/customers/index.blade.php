<x-admin-layout>

    <x-slot name="title">
        Mostrar listado de clientes
        <a href="{{ route('admin.customers.create') }}" class="btn btn-secondary float-right">Agregar miembro</a>
    </x-slot>

    <div class="card">

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Cargo</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $customer)
                        <tr>
                            <td>{{ $customer->id }}</td>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->position }}</td>

                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{ route('admin.customers.edit', $customer) }}">Editar</a>
                            </td>

                            <td width="10px">
                                <form action="{{ route('admin.customers.destroy', $customer) }}" method="POST" 
                                id="form-{{ $customer->id }}" 
                                data-id="{{ $customer->id }}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm btn-del" data-id="{{ $customer->id }}">
                                        Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <x-alert type="success"/>

    @push('js')

        <script>
            let btnDel = document.getElementsByClassName("btn-del");

            let myFunction = (e) => {
                e.preventDefault();
                let formId = e.target.getAttribute('data-id');
                console.log(formId)
                Swal.fire({
                    title: '¡Atención!',
                    text: "Esta acción eliminará a todos los trabajos asociados a esta etiqueta, ¿deseas continuar?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Eliminar',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        let form = '#form-' + formId;
                        document.querySelector(form).submit();
                    }
                });
            };

            for (let i = 0; i < btnDel.length; i++) {
                btnDel[i].addEventListener('click', myFunction, false);
            }
        </script>

    @endpush

</x-admin-layout>