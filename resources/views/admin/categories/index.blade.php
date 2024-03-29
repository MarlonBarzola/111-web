<x-admin-layout>

    <x-slot name="title">
        Listado de categorías

        <a href="{{ route('admin.categories.create') }}" class="btn btn-secondary float-right">Agregar categoría</a>
        
    </x-slot>

    <div class="card">

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            
                            <td width="10px">
                                
                                <a class="btn btn-primary btn-sm" href="{{ route('admin.categories.edit', $category) }}">Editar</a>

                            </td>
                            <td width="10px">
                               
                                <form id="form-{{ $category->id }}" data-id="{{ $category->id }}" action="{{ route('admin.categories.destroy', $category) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" data-id="{{ $category->id }}" class="btn btn-danger btn-sm btn-del">
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

    <x-alert type="success" title="¡Éxito!"/>

    @push('js')

        <script>
            let btnDel = document.getElementsByClassName("btn-del");

            let myFunction = (e) => {
                e.preventDefault();
                let formId = e.target.getAttribute('data-id');
                console.log(formId)
                Swal.fire({
                    title: '¡Atención!',
                    text: "Esta acción eliminará a todos los trabajos asociados a esta categoría, ¿deseas continuar?",
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