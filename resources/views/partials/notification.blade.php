
@if (session('success'))
    @include('partials.success')
    <script>
        showNotification();
    </script>
@endif
<script>
    const app = Alpine.data('notification');

    function showNotification() {
        app.notificationVisible = true;
        setTimeout(function() {
            app.notificationVisible = false;
        }, 3000);
    }
</script>

