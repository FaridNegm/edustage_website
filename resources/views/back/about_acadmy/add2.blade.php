<form class="" id="form" enctype="multipart/form-data">
    @csrf
        <div class="form_bordred_sections">
            <div class="form-group mb-3">
                <div class="">
                    <label for="title">{{ trans('app.title') }}</label>
                    <i class="fas fa-star require_input"></i>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-signature"></i></span>
                        <input type="text" class="form-control" placeholder="{{ trans('app.title') }}" id="title" name="title">
                    </div>
                    <bold class="text-danger" id="errors-title" style="display: none;"></bold>
                </div>
            </div>

            <div class="form-group mb-3">
                <div class="">
                    <label for="description">{{ trans('app.description') }}</label>
                    <i class="fas fa-star require_input"></i>
                    <textarea class="ckeditor form-control cke_rtl" id="description" name="description"></textarea>
                    <bold class="text-danger" id="errors-description" style="display: none;"></bold>
                </div>
            </div>

            <div class="form-group mb-3">
                <div class="">
                    <label>{{ trans('app.status') }}</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa fa-check"></i></span>
                        <select name="status"  class="form-control">
                            <option value="1">{{ trans('app.active') }}</option>
                            <option value="0">{{ trans('app.not_active') }}</option>
                        </select>
                    </div>
                    <bold class="text-danger" id="errors-status" style="display: none;"></bold>
                </div>
            </div>
        </div>

        <div class="form_bordred_sections">
            <div class="custom-file-container" data-upload-id="file_upload">
                <label style="color: #555;">{{ trans('app.media') }}
                    <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">
                        <i class="fa fa-trash-alt" style="color: rgb(221, 7, 7);font-size: 15px;position: relative;top: 3px;margin: 0px 15px 10px;"></i>
                    </a>
                </label>
                <label class="custom-file-container__custom-file" >
                    <input type="file" class="custom-file-container__custom-file__custom-file-input" name="media" multiple>
                    <input type="hidden" name="media_hidden" />
                    <span class="custom-file-container__custom-file__custom-file-control text-center"></span>
                </label>
                <div class="custom-file-container__image-preview"></div>
            </div>
        </div>

        <br />

        <button type="button" id="save" class="btn btn-secondary btn-rounded waves-effect waves-light mb-2 me-2" data-bs-dismiss="offcanvas" aria-label="Close">
            <i class="fas fa-times me-1"></i>
            @lang('app.close')
        </button>

        <button type="button" id="save" class="btn btn-primary btn-rounded waves-effect waves-light mb-2 me-2">
            <i class="fas fa-save me-1"></i>
            @lang('app.save')
        </button>
</form>

<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script>
    $(document).ready(function () {
        var firstUpload = new FileUploadWithPreview('file_upload');
    });
</script>
<script>
    $("#offcanvasWithBothOptions .offcanvas-title").text("@lang('app.add')").css("color", "#FFF");
    $("#offcanvasWithBothOptions .offcanvas-header").css("background", "#727bb7");
    
    $(document).ready(function(){
        $('.ckeditor').ckeditor({
            dropdownParent: $('#offcanvasWithBothOptions')
        });

        $('.select2').select2({
            dropdownParent: $('#offcanvasWithBothOptions')
        });
    });

    $("#offcanvasWithBothOptions #save").click(function(e){
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "{{url('admin/about_acadmy/store')}}",
            type: 'GET',
            processData: false,
            contentType: false,
            data: new FormData($('#offcanvasWithBothOptions #form')[0]),
            success: function(res){
                $("#offcanvasWithBothOptions").offcanvas('hide');
                $('#datatable').DataTable().ajax.reload( null, false );

                alertify.set('notifier','position', 'top-center');
                alertify.set('notifier','delay', 4);
                alertify.success("@lang('app.Completed Added Successfully')");

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
                if(res.responseJSON.errors.user_name){
                    $("form #errors-user_name").css('display' , 'block').text(res.responseJSON.errors.user_name);
                }else{
                    $("form #errors-user_name").text('');
                }
                if(res.responseJSON.errors.phone){
                    $("form #errors-phone").css('display' , 'block').text(res.responseJSON.errors.phone);
                }else{
                    $("form #errors-phone").text('');
                }
                if(res.responseJSON.errors.password){
                    $("form #errors-password").css('display' , 'block').text(res.responseJSON.errors.password);
                }else{
                    $("form #errors-password").text('');
                }
                if(res.responseJSON.errors.confirmed_password){
                    $("form #errors-confirmed_password").css('display' , 'block').text(res.responseJSON.errors.confirmed_password);
                }else{
                    $("form #errors-confirmed_password").text('');
                }
                if(res.responseJSON.errors.nat_id){
                    $("form #errors-nat_id").css('display' , 'block').text(res.responseJSON.errors.nat_id);
                }else{
                    $("form #errors-nat_id").text('');
                }
                if(res.responseJSON.errors.email){
                    $("form #errors-email").css('display' , 'block').text(res.responseJSON.errors.email);
                }else{
                    $("form #errors-email").text('');
                }
            }
        });
    });


    ///////////////////////////////// Add By Button Enter /////////////////////////////////
    $("#form").keydown(function (e) {
        if (e.keyCode == 13) {
            e.preventDefault();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "{{url('admin/about_acadmy/store')}}",
                type: 'POST',
                processData: false,
                contentType: false,
                data: new FormData($('#offcanvasWithBothOptions #form')[0]),
                // data: $("#offcanvasWithBothOptions #form").serialize(),
                success: function(res){
                    $("#offcanvasWithBothOptions").offcanvas('hide');
                    $('#datatable').DataTable().ajax.reload( null, false );

                    alertify.set('notifier','position', 'top-center');
                    alertify.set('notifier','delay', 4);
                    alertify.success("@lang('app.Completed Added Successfully')");

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
                    if(res.responseJSON.errors.user_name){
                        $("form #errors-user_name").css('display' , 'block').text(res.responseJSON.errors.user_name);
                    }else{
                        $("form #errors-user_name").text('');
                    }
                    if(res.responseJSON.errors.phone){
                        $("form #errors-phone").css('display' , 'block').text(res.responseJSON.errors.phone);
                    }else{
                        $("form #errors-phone").text('');
                    }
                    if(res.responseJSON.errors.password){
                        $("form #errors-password").css('display' , 'block').text(res.responseJSON.errors.password);
                    }else{
                        $("form #errors-password").text('');
                    }
                    if(res.responseJSON.errors.confirmed_password){
                        $("form #errors-confirmed_password").css('display' , 'block').text(res.responseJSON.errors.confirmed_password);
                    }else{
                        $("form #errors-confirmed_password").text('');
                    }
                    if(res.responseJSON.errors.nat_id){
                        $("form #errors-nat_id").css('display' , 'block').text(res.responseJSON.errors.nat_id);
                    }else{
                        $("form #errors-nat_id").text('');
                    }
                    if(res.responseJSON.errors.email){
                        $("form #errors-email").css('display' , 'block').text(res.responseJSON.errors.email);
                    }else{
                        $("form #errors-email").text('');
                    }
                }
            });
        }
    });
</script>
