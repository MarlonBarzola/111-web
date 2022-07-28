@props(['type' => 'success', 'title' => '¡Éxito!'])

@push('scripts')
    @if (session('info'))
        <script>
            Swal.fire({
                title: "{{ $title }}",
                text: "{{ session('info') }}",
                icon: '{{ $type }}',
                confirmButtonText: 'Ok'
            });
        </script>
    @endif
@endpush