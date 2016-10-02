<!-- Scripts -->
<script>
    window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
    ]); ?>
</script>
<!-- Scripts -->
<script src="{{ asset('js/backend.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#categories').DataTable({
            "order": [[0, "desc"]]
        });
        $('#users').DataTable({
            "order": [[0, "desc"]]
        });
        $('#pages').DataTable({
            "order": [[0, "desc"]]
        });
        $('#posts').DataTable({
            "order": [[0, "desc"]]
        });
        $('#sliders').DataTable({
            "order": [[0, "desc"]]
        });
        $('#sectioins').DataTable({
            "order": [[0, "desc"]]
        });
        $('#contactus').DataTable({
            "order": [[0, "desc"]]
        });
        $('#albums').DataTable({
            "order": [[0, "desc"]]
        });
        $('#galleries').DataTable({
            "order": [[0, "desc"]]
        });
        tinymce.init({selector: 'textarea'});
    });
</script>