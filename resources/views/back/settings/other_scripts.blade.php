<script>
    $(document).on('click', '.bt_modal', function (e) {
        e.preventDefault();
        let act = $(this).attr('act');
        $('.offcanvas-body').load(act);
    });
</script>

<script>
    $('#datatable').DataTable({
        processing: true,
        serverSide: true,
        url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/German.json",
        ajax: "{{ url('admin/settings/datatable_settings') }}",
        columns: [
            {data: 'app_name', name: 'app_name'},
            {data: 'phone', name: 'phone'},
            {data: 'description', name: 'description'},
            {data: 'action', name: 'action'},
        ]
    });
</script>