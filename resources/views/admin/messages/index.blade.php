<x-admin-layout>

    <x-slot name="title">
        Mostrar listado de mensajes
    </x-slot>

    <div class="card">

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>From</th>
                        <th>Date</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($messages as $message)
                        <tr>
                            <td>{{ $message->id }}</td>
                            <td>{{ $message->name }}</td>
                            <td>{{ $message->email }}</td>
                            <td>{{ $message->created_at }}</td>

                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{ route('admin.messages.show', $message) }}">Ver</a>
                            </td>

                            <td width="10px">
                                <form action="{{ route('admin.messages.destroy', $message) }}" method="POST" 
                                id="form-{{ $message->id }}" 
                                data-id="{{ $message->id }}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm btn-del" data-id="{{ $message->id }}">
                                        Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            
        </div>
        <div class="card-footer">
            {{ $messages->links('pagination::bootstrap-4') }}
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
                    text: "Esta acción eliminará permanentemente este mensaje, ¿deseas continuar?",
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