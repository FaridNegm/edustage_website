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
        ajax: "{{ url('admin/about_acadmy/datatable_about_acadmy') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'image', name: 'image'},
            {data: 'user', name: 'user'},
            {data: 'contact', name: 'contact'},
            {data: 'last_login_time', name: 'last_login_time'},
            {data: 'gender', name: 'gender'},
            {data: 'status', name: 'status'},
            {data: 'action', name: 'action'},
        ],
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        "aoColumnDefs": [
            { "bSortable": false, "aTargets": [ 0 ] },
        ],
        order: [[0, "DESC"]]
    });
</script>