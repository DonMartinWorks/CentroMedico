<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

{{-- Alerts --}}
@if (session('swal'))
    <script>
        Swal.fire(@json(session('swal')))
    </script>
@endif
