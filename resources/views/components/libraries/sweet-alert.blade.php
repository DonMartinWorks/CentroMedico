<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

{{-- Alerts --}}
@if (session('swal'))
    <script>
        Swal.fire(@json(session('swal')))
    </script>
@endif

{{-- Confirm Alert --}}
<script>
    forms = document.querySelectorAll('.delete-form');

    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            Swal.fire({
                title: "{{ __('Are you sure?') }}", // Localized text for the title
                text: "{{ __('You will not be able to revert this!') }}", // Localized text for the message
                icon: "warning", // Display a warning icon
                showCancelButton: true, // Show a cancel button
                confirmButtonColor: "#c80000", // Set the background color for the confirm button
                cancelButtonColor: "#cacaca", // Set the background color for the cancel button
                confirmButtonText: "{{ __('Yes, delete it!') }}", // Localized text for the confirm button
                cancelButtonText: "{{ __('Cancel') }}" // Localized text for the cancel button
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
</script>
