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
                            <input type="text" class="form-control" placeholder="{{ trans('app.name_ar') }}" id="name_ar" name="name_ar" value="{{ $data->admin_name['name_ar'] }}">
                        </div>
                        <bold class="text-danger" id="errors-name_ar" style="display: none;"></bold>
                    </div>

                    <div class="col-md-6">
                        <label for="name_en">{{ trans('app.name_en') }}</label>
                        <i class="fas fa-star require_input"></i>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-pen"></i></span>
                            <input type="text" class="form-control" placeholder="{{ trans('app.name_en') }}" id="name_en" name="name_en" value="{{ $data->admin_name['name_en'] }}">
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
                            <input type="email" class="form-control" placeholder="{{ trans('app.mobile') }}" id="mobile" name="mobile" value="{{ $data['mobile'] }}">
                        </div>
                        <bold class="text-danger" id="errors-mobile" style="display: none;"></bold>
                    </div>

                    <div class="col-md-6">
                        <label for="address">{{ trans('app.address') }}</label>
                        <i class="fas fa-star require_input"></i>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                            <input type="text" class="form-control" placeholder="{{ trans('app.address') }}" id="address" name="address" value="{{ $data['address'] }}">
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
                                @foreach ($branches as $item)
                                    <option value="{{ $item->id }}"  {{ $data['branche'] == $item->id ? 'selected' : null }}>{{ app()->getLocale() == 'en' ? $item->name_en : $item->name_ar }}</option>
                                @endforeach
                            </select>
                        </div>
                        <bold class="text-danger" id="errors-branche" style="display: none;"></bold>
                    </div>

                    <div class="col-md-6">
                        <label for="birth_date">{{ trans('app.birth_date') }}</label>
                        <i class="fas fa-star require_input"></i>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                            <input type="date" class="form-control" id="birth_date" name="birth_date" value="{{ $data['birth_date'] }}">
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
                                <option value="1" {{ $data['status'] === 1 ? 'selected' : null }}>{{ trans('app.active') }}</option>
                                <option value="0" {{ $data['status'] === 0 ? 'selected' : null }}>{{ trans('app.not_active') }}</option>
                            </select>
                        </div>
                        <bold class="text-danger" id="errors-status" style="display: none;"></bold>
                    </div>

                    <div class="col-md-6">
                        <label>{{ trans('app.gender') }}</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa fa-check"></i></span>
                            <select name="gender"  class="form-control">
                                <option value="1" {{ $data['gender'] === 1 ? 'selected' : null }}>{{ trans('app.male') }}</option>
                                <option value="0" {{ $data['gender'] === 0 ? 'selected' : null }}>{{ trans('app.female') }}</option>
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
                            <input type="email" class="form-control" placeholder="{{ trans('app.email') }}" id="email" name="email" value="{{ $data['email'] }}">
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

        <button type="button" id="update" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2">
            <i class="fas fa-save me-1"></i>
            @lang('app.save')
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
        var id = {{ $data['id'] }};

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "{{ url('admin/jobs/update') }}"+'/'+id,
            type: 'POST',
            processData: false,
            contentType: false,
            data: new FormData($('#offcanvasWithBothOptions #form')[0]),
            success: function(res){

                $("#offcanvasWithBothOptions").offcanvas('hide');
                $('#datatable').DataTable().ajax.reload( null, false );

                $(".all_jobs").load(" .all_jobs");
                $(".active_jobs").load(" .active_jobs");
                $(".not_active_jobs").load(" .not_active_jobs");

                alertify.set('notifier','position', 'top-center');
                alertify.set('notifier','delay', 4);
                alertify.success("@lang('app.Completed Update Successfully')");

            },
            error: function(res){
                alertify.set('notifier','position', 'top-center');
                alertify.set('notifier','delay', 4);
                alertify.error("@lang('app.there is something wrong')");

                if(res.responseJSON.errors.code){
                    $("form #errors-code").css('display' , 'block').text(res.responseJSON.errors.code);
                }else{
                    $("form #errors-code").text('');
                }
                if(res.responseJSON.errors.name_ar){
                    $("form #errors-name_ar").css('display' , 'block').text(res.responseJSON.errors.name_ar);
                }else{
                    $("form #errors-name_ar").text('');
                }
                if(res.responseJSON.errors.name_en){
                    $("form #errors-name_en").css('display' , 'block').text(res.responseJSON.errors.name_en);
                }else{
                    $("form #errors-name_en").text('');
                }
            }
        });
    });


    ///////////////////////////////// Edit By Button Enter /////////////////////////////////
    $("#form").keydown(function (e) {
        if (e.keyCode == 13) {
            e.preventDefault();
            var id = {{ $data['id'] }};

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "{{ url('admin/jobs/update') }}"+'/'+id,
                type: 'POST',
                processData: false,
                contentType: false,
                data: new FormData($('#offcanvasWithBothOptions #form')[0]),
                success: function(res){

                    $("#offcanvasWithBothOptions").offcanvas('hide');
                    $('#datatable').DataTable().ajax.reload( null, false );

                    $(".all_jobs").load(" .all_jobs");
                    $(".active_jobs").load(" .active_jobs");
                    $(".not_active_jobs").load(" .not_active_jobs");

                    alertify.set('notifier','position', 'top-center');
                    alertify.set('notifier','delay', 4);
                    alertify.success("@lang('app.Completed Update Successfully')");

                },
                error: function(res){
                    alertify.set('notifier','position', 'top-center');
                    alertify.set('notifier','delay', 4);
                    alertify.error("@lang('app.there is something wrong')");

                    if(res.responseJSON.errors.code){
                        $("form #errors-code").css('display' , 'block').text(res.responseJSON.errors.code);
                    }else{
                        $("form #errors-code").text('');
                    }
                    if(res.responseJSON.errors.name_ar){
                        $("form #errors-name_ar").css('display' , 'block').text(res.responseJSON.errors.name_ar);
                    }else{
                        $("form #errors-name_ar").text('');
                    }
                    if(res.responseJSON.errors.name_en){
                        $("form #errors-name_en").css('display' , 'block').text(res.responseJSON.errors.name_en);
                    }else{
                        $("form #errors-name_en").text('');
                    }
                }
            });
        }
    });
</script>
