<form class="" id="form" enctype="multipart/form-data">
    @csrf
        <div class="form_bordred_sections">
            <div class="form-group mb-3">
                <div class="row">
                    <div class="col-md-6">
                        <label for="latest_code">{{ trans('app.latest_code') }}</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-barcode"></i></span>
                            <input type="text" readonly class="form-control" placeholder="{{ trans('app.latest_code') }}" value="{{ $find === null ? null : $find['code'] }}">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="code">{{ trans('app.code') }}</label>
                        <i class="fas fa-star require_input"></i>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-barcode"></i></span>
                            <input type="text" class="form-control" placeholder="{{ trans('app.code') }}" id="code" name="code" value="{{ $data['code'] }}">
                        </div>
                        <bold class="text-danger" id="errors-code" style="display: none;"></bold>
                    </div>
                </div>
            </div>
        </div>

        <div class="form_bordred_sections">
            <div class="form-group mb-3">
                <div class="row">
                    <div class="col-md-6">
                        <label for="name_ar">{{ trans('app.name_ar') }}</label>
                        <i class="fas fa-star require_input"></i>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-pen"></i></span>
                            <input type="text" class="form-control" placeholder="{{ trans('app.name_ar') }}" id="name_ar" name="name_ar" value="{{ $data['name_ar'] }}">
                        </div>
                        <bold class="text-danger" id="errors-name_ar" style="display: none;"></bold>
                    </div>

                    <div class="col-md-6">
                        <label for="name_en">{{ trans('app.name_en') }}</label>
                        <i class="fas fa-star require_input"></i>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-pen"></i></span>
                            <input type="text" class="form-control" placeholder="{{ trans('app.name_en') }}" id="name_en" name="name_en" value="{{ $data['name_en'] }}">
                        </div>
                        <bold class="text-danger" id="errors-name_en" style="display: none;"></bold>
                    </div>
                </div>
            </div>

            <div class="form-group mb-3">
                <div class="row">
                    <div class="col-md-6">
                        <label for="region">{{ trans('app.region') }}</label>
                        <i class="fas fa-star require_input"></i>
                        <div class="input-group">
                            <select class="form-control select2" id="region" name="region">
                                <option value="">---</option>
                                @foreach ($regions as $item)
                                    <option value="{{ $item->id }}" {{ $item->id == $data['region'] ? 'selected' : null }} >{{ app()->getLocale() == 'en' ? $item->name_en : $item->name_ar }}</option>
                                @endforeach
                            </select>
                        </div>
                        <bold class="text-danger" id="errors-region" style="display: none;"></bold>
                    </div>

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
                </div>
            </div>
        </div>

        <div class="form_bordred_sections">
            <div class="form-group mb-3">
                <div class="row">
                    <div class="col-md-6">
                        <label for="mobile">{{ trans('app.mobile') }}</label>
                        <i class="fas fa-star require_input"></i>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-mobile"></i></span>
                            <input type="text" class="form-control" placeholder="{{ trans('app.mobile') }}" id="mobile" name="mobile" value="{{ $data['mobile'] }}">
                        </div>
                        <bold class="text-danger" id="errors-mobile" style="display: none;"></bold>
                    </div>

                    <div class="col-md-6">
                        <label for="phone">{{ trans('app.phone') }}</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            <input type="text" class="form-control" placeholder="{{ trans('app.phone') }}" id="phone" name="phone" value="{{ $data['phone'] }}">
                        </div>
                        <bold class="text-danger" id="errors-phone" style="display: none;"></bold>
                    </div>
                </div>
            </div>

            <div class="form-group mb-3">
                <div class="row">
                    <div class="col-md-6">
                        <label for="fax">{{ trans('app.fax') }}</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-fax"></i></span>
                            <input type="text" class="form-control" placeholder="{{ trans('app.fax') }}" id="fax" name="fax" value="{{ $data['fax'] }}">
                        </div>
                        <bold class="text-danger" id="errors-fax" style="display: none;"></bold>
                    </div>

                    <div class="col-md-6">
                        <label for="email">{{ trans('app.email') }}</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="far fa-envelope"></i></span>
                            <input type="text" class="form-control" placeholder="{{ trans('app.email') }}" id="email" name="email" value="{{ $data['email'] }}">
                        </div>
                        <bold class="text-danger" id="errors-email" style="display: none;"></bold>
                    </div>
                </div>
            </div>

            <div class="form-group mb-3">
                <div class="row">
                    <div class="col-md-6">
                        <label for="address">{{ trans('app.address') }}</label>
                        <i class="fas fa-star require_input"></i>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-map-marker"></i></span>
                            <input type="text" class="form-control" placeholder="{{ trans('app.address') }}" id="address" name="address" value="{{ $data['address'] }}">
                        </div>
                        <bold class="text-danger" id="errors-address" style="display: none;"></bold>
                    </div>

                    <div class="col-md-6">
                        <label for="manager">@lang('app.manager')</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" placeholder="@lang('app.manager')" id="manager" name="manager" value="{{ $data['manager'] }}">
                        </div>
                        <bold class="text-danger" id="errors-manager" style="display: none;"></bold>
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


    ///////////////////////////////////////// Save When KeyDown Enter Button /////////////////////////////////////////
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
                url: "{{ url('admin/branches/update') }}"+'/'+id,
                type: 'POST',
                data: $('#offcanvasWithBothOptions form').serialize(),
                success: function(res){

                    $("#offcanvasWithBothOptions").offcanvas('hide');
                    $('#datatable').DataTable().ajax.reload( null, false );

                    $(".all_branches").load(" .all_branches");
                    $(".active_branches").load(" .active_branches");
                    $(".not_active_branches").load(" .not_active_branches");

                    alertify.set('notifier','position', 'top-center');
                    alertify.set('notifier','delay', 4);
                    alertify.success("@lang('app.Completed Update Successfully')");

                },
                error: function(res){
                    console.log(res);
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
                    if(res.responseJSON.errors.region){
                        $("form #errors-region").css('display' , 'block').text(res.responseJSON.errors.region);
                    }else{
                        $("form #errors-region").text('');
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
                }
            });
        }
    });


    ///////////////////////////////////////// Save When Click Save Button By Mouse /////////////////////////////////////////
    $("#offcanvasWithBothOptions #update").click(function(e){
        e.preventDefault();
        var id = {{ $data['id'] }};

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "{{ url('admin/branches/update') }}"+'/'+id,
            type: 'POST',
            data: $('#offcanvasWithBothOptions form').serialize(),
            success: function(res){

                $("#offcanvasWithBothOptions").offcanvas('hide');
                $('#datatable').DataTable().ajax.reload( null, false );

                $(".all_branches").load(" .all_branches");
                $(".active_branches").load(" .active_branches");
                $(".not_active_branches").load(" .not_active_branches");

                alertify.set('notifier','position', 'top-center');
                alertify.set('notifier','delay', 4);
                alertify.success("@lang('app.Completed Update Successfully')");

            },
            error: function(res){
                console.log(res);
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
                if(res.responseJSON.errors.region){
                    $("form #errors-region").css('display' , 'block').text(res.responseJSON.errors.region);
                }else{
                    $("form #errors-region").text('');
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
            }
        });
    });
</script>
