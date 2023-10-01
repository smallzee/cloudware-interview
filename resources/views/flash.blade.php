@if (session('alert_success'))
    <script>
        $(document).ready(function () {
            iziToast.success({
                title: 'Success',
                message: "{{ session('alert_success') }}",
                position: 'topRight',
            });
        });
    </script>
@endif

@if (session('alert_error'))
    <script>
        $(document).ready(function () {
            iziToast.error({
                title: 'Error',
                message: "{{ session('alert_error') }}",
                position: 'topRight',
            });
        });
    </script>
@endif

@if (session('alert_info'))
    <script>
        $(document).ready(function () {
            iziToast.info({
                title: 'Success',
                message: "{{ session('alert_info') }}",
                position: 'topRight',
            });
        });
    </script>
@endif


@if (session('alert_warning'))
    <script>
        $(document).ready(function () {
            iziToast.warning({
                title: 'Success',
                message: "{{ session('alert_warning') }}",
                position: 'topRight',
            });
        });
    </script>
@endif
