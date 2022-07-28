<div class="card">

    <div class="card-header">
        <input wire:model="search" class="form-control" autocomplete="off" placeholder="Ingrese el nombre de un trabajo" >
    </div>

    @if ( $jobs->count() )
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
                    @foreach ($jobs as $job)
                        <tr>
                            <td>{{ $job->id }}</td>
                            <td>{{ $job->name }}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{ route('admin.jobs.edit', $job) }}">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{ route('admin.jobs.destroy', $job) }}" method="POST" 
                                id="form-{{ $job->id }}" 
                                data-id="{{ $job->id }}">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm btn-del" data-id="{{ $job->id }}">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-footer">
            {{ $jobs->links() }}
        </div>
    @else
        <div class="card-body">
            <strong>No hay ningún registro</strong>
        </div>
    @endif
    
</div>
