<script>
    $(document).on("click" , "table .delete" ,function(e){
        e.preventDefault();
        var loop_id = $(this).attr("loop_id");


      alertify.confirm('{{ trans('app.Warning') }}', '{{ trans('app.Are You Sure Of Delete') }}',
        function(){
            $.ajax({
                 url: "{{ url('admin/jobs/destroy') }}"+'/'+loop_id,
                 type: "get",
                 success: function(){
                    $('#datatable').DataTable().ajax.reload( null, false );

                    $(".all_jobs").load(" .all_jobs");
                    $(".active_jobs").load(" .active_jobs");
                    $(".not_active_jobs").load(" .not_active_jobs");

                    alertify.set('notifier','position', 'top-center');
                    alertify.set('notifier','delay', 4);
                    alertify.error("@lang('app.Completed Delete Successfully')");
                 },
                 error: function(){

                 }
            }); // end ajax

        }, // function success
        function(){
            alertify.set('notifier','position', 'bottom-right');
            alertify.set('notifier','delay', 4);
            alertify.error("@lang('app.canceled')");
        }); // function error
    });



    ///////////////////////////////// Delete Selected /////////////////////////////////
    $(document).on("click" , "#delete_selected a" ,function(e){
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        alertify.confirm('<span class="delete_selected_item_style_title_head">{{ trans('app.Warning') }}</span>', '<span class="delete_selected_item_style">{{ trans('app.Are You Sure Of Delete This Elements') }}</span>',
            function(){
                $.ajax({
                    url: "{{ url('admin/jobs/destroy_selected') }}",
                    type: "post",
                    data: $('table form').serialize(),
                    success: function(){
                        $('#datatable').DataTable().ajax.reload( null, false );

                        $(".all_jobs").load(" .all_jobs");
                        $(".active_jobs").load(" .active_jobs");
                        $(".not_active_jobs").load(" .not_active_jobs");
                        $("table #checkAll").prop("checked", false);

                        alertify.set('notifier','position', 'top-center');
                        alertify.set('notifier','delay', 4);
                        alertify.error("@lang('app.Completed Delete Successfully')");

                    },
                    error: function(){

                    }
                }); // end ajax

            }, // function success
            function(){
                alertify.set('notifier','position', 'bottom-right');
                alertify.set('notifier','delay', 4);
                alertify.error("@lang('app.canceled')");
        }); // function error
    });

    ///////////////////////////////// Delete Selected By Button Delete /////////////////////////////////
    $("#datatable").keydown(function (e) {
        if (e.keyCode == 46) {
            e.preventDefault();

            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

            alertify.confirm('<span class="delete_selected_item_style_title_head">{{ trans('app.Warning') }}</span>', '<span class="delete_selected_item_style">{{ trans('app.Are You Sure Of Delete This Elements') }}</span>',
                function(){
                    $.ajax({
                        url: "{{ url('admin/jobs/destroy_selected') }}",
                        type: "post",
                        data: $('table form').serialize(),
                        success: function(){
                            $('#datatable').DataTable().ajax.reload( null, false );

                            $(".all_jobs").load(" .all_jobs");
                            $(".active_jobs").load(" .active_jobs");
                            $(".not_active_jobs").load(" .not_active_jobs");
                            $("table #checkAll").prop("checked", false);

                            alertify.set('notifier','position', 'top-center');
                            alertify.set('notifier','delay', 4);
                            alertify.error("@lang('app.Completed Delete Successfully')");

                        },
                        error: function(){

                        }
                    }); // end ajax

                }, // function success
                function(){
                    alertify.set('notifier','position', 'bottom-right');
                    alertify.set('notifier','delay', 4);
                    alertify.error("@lang('app.canceled')");
            }); // function error
        }
    });
</script>
