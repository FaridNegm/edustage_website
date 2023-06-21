<form class="" id="form" enctype="multipart/form-data">
    @csrf
        <div class="form_bordred_sections">
            <div class="form-group mb-3">
                <div class="row">
                    <div class="col-md-6">
                        <label for="name_ar">{{ trans('app.name_ar') }}</label>
                        <i class="fas fa-star require_input"></i>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-pen"></i></span>
                            <input type="text" class="form-control" placeholder="{{ trans('app.name_ar') }}" id="name_ar" name="name_ar">
                        </div>
                        <bold class="text-danger" id="errors-name_ar" style="display: none;"></bold>
                    </div>

                    <div class="col-md-6">
                        <label for="name_en">{{ trans('app.name_en') }}</label>
                        <i class="fas fa-star require_input"></i>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-pen"></i></span>
                            <input type="text" class="form-control" placeholder="{{ trans('app.name_en') }}" id="name_en" name="name_en">
                        </div>
                        <bold class="text-danger" id="errors-name_en" style="display: none;"></bold>
                    </div>
                </div>
            </div>

            <div class="form-group mb-3">
                <div class="row">
                    <div class="col-md-6">
                        <label for="mobile">{{ trans('app.mobile') }}</label>
                        <i class="fas fa-star require_input"></i>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            <input type="email" class="form-control" placeholder="{{ trans('app.mobile') }}" id="mobile" name="mobile">
                        </div>
                        <bold class="text-danger" id="errors-mobile" style="display: none;"></bold>
                    </div>

                    <div class="col-md-6">
                        <label for="address">{{ trans('app.address') }}</label>
                        <i class="fas fa-star require_input"></i>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                            <input type="text" class="form-control" placeholder="{{ trans('app.address') }}" id="address" name="address">
                        </div>
                        <bold class="text-danger" id="errors-address" style="display: none;"></bold>
                    </div>
                </div>
            </div>

            <div class="form-group mb-3">
                <div class="row">
                    <div class="col-md-6">
                        <label for="branche">{{ trans('app.branche') }}</label>
                        <i class="fas fa-star require_input"></i>
                        <div class="input-group">
                            <select class="form-control select2" id="branche" name="branche">
                                <option value="">---</option>
                                
                            </select>
                        </div>
                        <bold class="text-danger" id="errors-branche" style="display: none;"></bold>
                    </div>

                    <div class="col-md-6">
                        <label for="birth_date">{{ trans('app.birth_date') }}</label>
                        <i class="fas fa-star require_input"></i>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                            <input type="date" class="form-control" id="birth_date" name="birth_date">
                        </div>
                        <bold class="text-danger" id="errors-birth_date" style="display: none;"></bold>
                    </div>
                </div>
            </div>

            <div class="form-group mb-3">
                <div class="row">
                    <div class="col-md-6">
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

                    <div class="col-md-6">
                        <label>{{ trans('app.gender') }}</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa fa-check"></i></span>
                            <select name="gender"  class="form-control">
                                <option value="1">{{ trans('app.male') }}</option>
                                <option value="0">{{ trans('app.female') }}</option>
                            </select>
                        </div>
                        <bold class="text-danger" id="errors-gender" style="display: none;"></bold>
                    </div>
                </div>
            </div>
        </div>

        <div class="form_bordred_sections">
            <div class="form-group mb-3">
                <div class="row">
                    <div class="col-md-4">
                        <label for="email">{{ trans('app.email') }}</label>
                        <i class="fas fa-star require_input"></i>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            <input type="email" class="form-control" placeholder="{{ trans('app.email') }}" id="email" name="email">
                        </div>
                        <bold class="text-danger" id="errors-email" style="display: none;"></bold>
                    </div>

                    <div class="col-md-4">
                        <label for="password">{{ trans('app.password') }}</label>
                        <i class="fas fa-star require_input"></i>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                            <input type="password" class="form-control" placeholder="{{ trans('app.password') }}" id="password" name="password">
                        </div>
                        <bold class="text-danger" id="errors-password" style="display: none;"></bold>
                    </div>

                    <div class="col-md-4">
                        <label for="confirmed_password">{{ trans('app.confirmed_password') }}</label>
                        <i class="fas fa-star require_input"></i>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                            <input type="password" class="form-control" placeholder="{{ trans('app.confirmed_password') }}" id="confirmed_password" name="confirmed_password">
                        </div>
                        <bold class="text-danger" id="errors-confirmed_password" style="display: none;"></bold>
                    </div>

                </div>
            </div>
        </div>

        <div class="form_bordred_sections">
            <div class="custom-file-container" data-upload-id="file_upload">
                <label style="color: #555;">{{ trans('app.image') }}
                    <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">
                        <i class="fa fa-trash-alt" style="color: rgb(221, 7, 7);font-size: 22px;font-weight: bold;position: relative;top: 3px;margin: 0px 15px;"></i>
                    </a>
                </label>
                <label class="custom-file-container__custom-file" >
                    <input type="file" class="custom-file-container__custom-file__custom-file-input" name="image">
                    <input type="hidden" name="image_hidden" />
                    <span class="custom-file-container__custom-file__custom-file-control"></span>
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

<script>
    $("#offcanvasWithBothOptions .offcanvas-title").text("@lang('app.add')").css("color", "#FFF");
    $("#offcanvasWithBothOptions .offcanvas-header").css("background", "#727bb7");


    $(document).ready(function(){
        $('.select2').select2({
            dropdownParent: $('#offcanvasWithBothOptions'),
        });

        var firstUpload = new FileUploadWithPreview('file_upload');
    });

    $("#offcanvasWithBothOptions #save").click(function(e){
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "{{url('admin/admins/store')}}",
            type: 'POST',
            processData: false,
            contentType: false,
            data: new FormData($('#offcanvasWithBothOptions #form')[0]),
            // data: $("#offcanvasWithBothOptions #form").serialize(),
            success: function(res){
                $("#offcanvasWithBothOptions").offcanvas('hide');
                $('#datatable').DataTable().ajax.reload( null, false );

                $(".all_admins").load(" .all_admins");
                $(".active_admins").load(" .active_admins");
                $(".not_active_admins").load(" .not_active_admins");

                alertify.set('notifier','position', 'top-center');
                alertify.set('notifier','delay', 4);
                alertify.success("@lang('app.Completed Added Successfully')");

            },
            error: function(res){
                alertify.set('notifier','position', 'top-center');
                alertify.set('notifier','delay', 4);
                alertify.error("@lang('app.there is something wrong')");

                if(res.responseJSON.errors.name_en){
                    $("form #errors-name_en").css('display' , 'block').text(res.responseJSON.errors.name_en);
                }else{
                    $("form #errors-name_en").text('');
                }
                if(res.responseJSON.errors.name_ar){
                    $("form #errors-name_ar").css('display' , 'block').text(res.responseJSON.errors.name_ar);
                }else{
                    $("form #errors-name_ar").text('');
                }
                if(res.responseJSON.errors.email){
                    $("form #errors-email").css('display' , 'block').text(res.responseJSON.errors.email);
                }else{
                    $("form #errors-email").text('');
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
                if(res.responseJSON.errors.address){
                    $("form #errors-address").css('display' , 'block').text(res.responseJSON.errors.address);
                }else{
                    $("form #errors-address").text('');
                }
                if(res.responseJSON.errors.mobile){
                    $("form #errors-mobile").css('display' , 'block').text(res.responseJSON.errors.mobile);
                }else{
                    $("form #errors-mobile").text('');
                }
                if(res.responseJSON.errors.branche){
                    $("form #errors-branche").css('display' , 'block').text(res.responseJSON.errors.branche);
                }else{
                    $("form #errors-branche").text('');
                }
                if(res.responseJSON.errors.birth_date){
                    $("form #errors-birth_date").css('display' , 'block').text(res.responseJSON.errors.birth_date);
                }else{
                    $("form #errors-birth_date").text('');
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
                url: "{{url('admin/admins/store')}}",
                type: 'POST',
                processData: false,
                contentType: false,
                data: new FormData($('#offcanvasWithBothOptions #form')[0]),
                // data: $("#offcanvasWithBothOptions #form").serialize(),
                success: function(res){
                    $("#offcanvasWithBothOptions").offcanvas('hide');
                    $('#datatable').DataTable().ajax.reload( null, false );

                    $(".all_admins").load(" .all_admins");
                    $(".active_admins").load(" .active_admins");
                    $(".not_active_admins").load(" .not_active_admins");

                    alertify.set('notifier','position', 'top-center');
                    alertify.set('notifier','delay', 4);
                    alertify.success("@lang('app.Completed Added Successfully')");

                },
                error: function(res){
                    alertify.set('notifier','position', 'top-center');
                    alertify.set('notifier','delay', 4);
                    alertify.error("@lang('app.there is something wrong')");

                    if(res.responseJSON.errors.name_en){
                        $("form #errors-name_en").css('display' , 'block').text(res.responseJSON.errors.name_en);
                    }else{
                        $("form #errors-name_en").text('');
                    }
                    if(res.responseJSON.errors.name_ar){
                        $("form #errors-name_ar").css('display' , 'block').text(res.responseJSON.errors.name_ar);
                    }else{
                        $("form #errors-name_ar").text('');
                    }
                    if(res.responseJSON.errors.email){
                        $("form #errors-email").css('display' , 'block').text(res.responseJSON.errors.email);
                    }else{
                        $("form #errors-email").text('');
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
                    if(res.responseJSON.errors.address){
                        $("form #errors-address").css('display' , 'block').text(res.responseJSON.errors.address);
                    }else{
                        $("form #errors-address").text('');
                    }
                    if(res.responseJSON.errors.mobile){
                        $("form #errors-mobile").css('display' , 'block').text(res.responseJSON.errors.mobile);
                    }else{
                        $("form #errors-mobile").text('');
                    }
                    if(res.responseJSON.errors.branche){
                        $("form #errors-branche").css('display' , 'block').text(res.responseJSON.errors.branche);
                    }else{
                        $("form #errors-branche").text('');
                    }
                    if(res.responseJSON.errors.birth_date){
                        $("form #errors-birth_date").css('display' , 'block').text(res.responseJSON.errors.birth_date);
                    }else{
                        $("form #errors-birth_date").text('');
                    }
                }
            });
        }
    });
</script>
