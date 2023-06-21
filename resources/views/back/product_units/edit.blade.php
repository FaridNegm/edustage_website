<form class="" id="form" enctype="multipart/form-data">
    @csrf
    <div class="form_bordred_sections">
        <div class="form-group mb-3">
            <div class="row">
                <div class="col-sm-12">
                    <label for="name">{{ trans('app.name') }}</label>
                    <i class="fas fa-star require_input"></i>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-barcode"></i></span>
                        <input type="text" class="form-control" placeholder="{{ trans('app.name') }}" id="name" name="name" value="{{ $find['name'] }}">
                    </div>
                    <bold class="text-danger" id="errors-name" style="display: none;"></bold>
                </div>

                <div class="col-sm-12">
                    <label>{{ trans('app.status') }}</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa fa-check"></i></span>
                        <select name="status"  class="form-control">
                            <option value="1" {{ $find['status'] === 1 ? 'selected' : null }}>{{ trans('app.active') }}</option>
                            <option value="0" {{ $find['status'] === 0 ? 'selected' : null }}>{{ trans('app.not_active') }}</option>
                        </select>
                    </div>
                    <bold class="text-danger" id="errors-status" style="display: none;"></bold>
                </div>

            </div>
        </div>
    </div>

    <br />

    <button type="button" id="save" class="btn btn-secondary btn-rounded waves-effect waves-light mb-2 me-2" data-bs-dismiss="offcanvas" aria-label="Close">
        <i class="fas fa-times me-1"></i>
        @lang('app.close')
    </button>

    <button type="button" id="update" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2">
        <i class="fas fa-save me-1"></i>
        @lang('app.update')
    </button>

</form>

<script>
    $("#offcanvasWithBothOptions .offcanvas-title").text("@lang('app.edit')").css("color", "#FFF");
    $("#offcanvasWithBothOptions .offcanvas-header").css("background", "#4ec798");

    $(document).ready(function(){
        $('.select2').select2({
            dropdownParent: $('#offcanvasWithBothOptions'),
        });
    });

    $("#offcanvasWithBothOptions #update").click(function(e){
        e.preventDefault();
        var id = {{ $find['id'] }};

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "{{ url('admin/product-units/update') }}"+'/'+id,
            type: 'POST',
            processData: false,
            contentType: false,
            data: new FormData($('#offcanvasWithBothOptions #form')[0]),
            success: function(res){

                $("#offcanvasWithBothOptions").offcanvas('hide');
                $('#datatable').DataTable().ajax.reload( null, false );

                alertify.set('notifier','position', 'top-center');
                alertify.set('notifier','delay', 4);
                alertify.success("@lang('app.Completed Update Successfully')");

            },
            error: function(res){
                alertify.set('notifier','position', 'top-center');
                alertify.set('notifier','delay', 4);
                alertify.error("@lang('app.there is something wrong')");

                if(res.responseJSON.errors.name){
                    $("form #errors-name").css('display' , 'block').text(res.responseJSON.errors.name);
                }else{
                    $("form #errors-name").text('');
                }
                if(res.responseJSON.errors.description){
                    $("form #errors-description").css('display' , 'block').text(res.responseJSON.errors.description);
                }else{
                    $("form #errors-description").text('');
                }
                if(res.responseJSON.errors.status){
                    $("form #errors-status").css('display' , 'block').text(res.responseJSON.errors.status);
                }else{
                    $("form #errors-status").text('');
                }
            }
        });
    });


    ///////////////////////////////// Edit By Button Enter /////////////////////////////////
    $("#form").keydown(function (e) {
        if (e.keyCode == 13) {
            e.preventDefault();
            var id = {{ $find['id'] }};

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "{{ url('admin/product-units/update') }}"+'/'+id,
                type: 'POST',
                processData: false,
                contentType: false,
                data: new FormData($('#offcanvasWithBothOptions #form')[0]),
                success: function(res){

                    $("#offcanvasWithBothOptions").offcanvas('hide');
                    $('#datatable').DataTable().ajax.reload( null, false );

                    alertify.set('notifier','position', 'top-center');
                    alertify.set('notifier','delay', 4);
                    alertify.success("@lang('app.Completed Update Successfully')");

                },
                error: function(res){
                    alertify.set('notifier','position', 'top-center');
                    alertify.set('notifier','delay', 4);
                    alertify.error("@lang('app.there is something wrong')");

                    if(res.responseJSON.errors.name){
                        $("form #errors-name").css('display' , 'block').text(res.responseJSON.errors.name);
                    }else{
                        $("form #errors-name").text('');
                    }
                    if(res.responseJSON.errors.description){
                        $("form #errors-description").css('display' , 'block').text(res.responseJSON.errors.description);
                    }else{
                        $("form #errors-description").text('');
                    }
                    if(res.responseJSON.errors.status){
                        $("form #errors-status").css('display' , 'block').text(res.responseJSON.errors.status);
                    }else{
                        $("form #errors-status").text('');
                    }
                }
            });
        }
    });
</script>
