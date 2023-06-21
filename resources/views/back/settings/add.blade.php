<form class="" id="form" enctype="multipart/form-data">
    @csrf
    <div class="card-body form_bordred_sections">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#general" role="tab" aria-selected="true" style="font-weight: bold;color:blue;">
                    <span class="d-block d-sm-none"><i class="fas fa-info-circle"></i></span>
                    <span class="d-none d-sm-block">@lang('app.General')</span>    
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#images" role="tab" aria-selected="false" style="font-weight: bold;color:blue;">
                    <span class="d-block d-sm-none"><i class="fas fa-images"></i></span>
                    <span class="d-none d-sm-block">@lang('app.Images')</span>    
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#mail" role="tab" aria-selected="false" style="font-weight: bold;color:blue;">
                    <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                    <span class="d-none d-sm-block">@lang('app.Mail')</span>    
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#social" role="tab" aria-selected="false" style="font-weight: bold;color:blue;">
                    <span class="d-block d-sm-none"><i class="fab fa-adversal"></i></span>
                    <span class="d-none d-sm-block">@lang('app.Social')</span>    
                </a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content p-3 text-muted">
            {{--------------------- tab 1 general ---------------------}}
            <div class="tab-pane active" id="general" role="tabpanel">
                <h5 style="text-decoration: underline;font-weight: bold;">@lang('app.basic_info')</h5>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="app_name" class="form-label">@lang('app.app_name')</label>
                            <input type="text" class="form-control" id="app_name" name="app_name" value="{{ $find['app_name'] }}" placeholder="@lang('app.app_name')">
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="mb-3">
                            <label for="description" class="form-label">@lang('app.description')</label>
                            <input type="text" class="form-control" id="description" name="description" value="{{ $find['description'] }}" placeholder="@lang('app.description')">
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="lang" class="form-label">@lang('app.lang')</label>
                            <select class="form-control" id="lang" name="lang" value="{{ $find['lang'] }}">
                                <option value="ar">ar</option>
                                <option value="en">en</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="mb-3">
                            <label for="footer_text" class="form-label">@lang('app.footer_text')</label>
                            <input type="text" class="form-control" id="footer_text" name="footer_text" value="{{ $find['footer_text'] }}" placeholder="@lang('app.footer_text')">
                        </div>
                    </div>
                </div>

                <hr />
                <div class="row">
                    <h5 style="text-decoration: underline;font-weight: bold;">@lang('app.address')</h5>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="address" class="form-label">@lang('app.address')</label>
                            <input type="text" class="form-control" id="address" name="address" value="{{ $find['address'] }}" placeholder="@lang('app.address')">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="mb-3">
                            <label for="city" class="form-label">@lang('app.city')</label>
                            <input type="text" class="form-control" id="city" name="city" value="{{ $find['city'] }}" placeholder="@lang('app.city')">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="mb-3">
                            <label for="zip_code" class="form-label">@lang('app.zip_code')</label>
                            <input type="text" class="form-control" id="zip_code" name="zip_code" value="{{ $find['zip_code'] }}" placeholder="@lang('app.zip_code')">
                        </div>
                    </div>
                </div>

                <hr />
                <div class="row">
                    <h5 style="text-decoration: underline;font-weight: bold;">@lang('app.contact_details')</h5>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="email" class="form-label">@lang('app.email')</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $find['email'] }}" placeholder="@lang('app.email')">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="phone1" class="form-label">@lang('app.phone1')</label>
                            <input type="number" class="form-control" id="phone1" name="phone1" value="{{ $find['phone1'] }}" placeholder="@lang('app.phone1')">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="phone2" class="form-label">@lang('app.phone2')</label>
                            <input type="number" class="form-control" id="phone2" name="phone2" value="{{ $find['phone2'] }}" placeholder="@lang('app.phone2')">
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="accept_cookies" name="accept_cookies" value="{{ $find['accept_cookies'] }}">
                        <label class="form-check-label" for="accept_cookies">
                            @lang('app.accept_cookies')
                        </label>
                    </div>
                </div>
            </div>

            {{--------------------- tab 2 images ---------------------}}
            <div class="tab-pane" id="images" role="tabpanel">
                <div class="row">
                    <h5 style="text-decoration: underline;font-weight: bold;">@lang('app.images')</h5>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="logo_website" class="form-label">@lang('app.logo_website')</label>
                            <input type="file" class="form-control" id="logo_website" name="logo_website" value="{{ $find['logo_website'] }}" placeholder="@lang('app.logo_website')">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="logo_dashboard" class="form-label">@lang('app.logo_dashboard')</label>
                            <input type="file" class="form-control" id="logo_dashboard" name="logo_dashboard" value="{{ $find['logo_dashboard'] }}" placeholder="@lang('app.logo_dashboard')">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="fav_icon" class="form-label">@lang('app.fav_icon')</label>
                            <input type="file" class="form-control" id="fav_icon" name="fav_icon" value="{{ $find['fav_icon'] }}" placeholder="@lang('app.fav_icon')">
                        </div>
                    </div>
                </div>
            </div>

            {{--------------------- tab 3 mail ---------------------}}
            <div class="tab-pane" id="mail" role="tabpanel">
                <div class="row">
                    <h5 style="text-decoration: underline;font-weight: bold;">@lang('app.mail_conifg')</h5>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="mail_driver" class="form-label">@lang('app.mail_driver')</label>
                            <select class="form-control" id="mail_driver" name="mail_driver" value="{{ $find['mail_driver'] }}">
                                <option value="log">log</option>
                                <option value="mailgun">mailgun</option>
                                <option value="sendmail">sendmail</option>
                                <option value="smtp">smtp</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="from" class="form-label">@lang('app.from')</label>
                            <input type="text" class="form-control" id="from" name="from" value="{{ $find['from'] }}" placeholder="@lang('app.from')">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="to" class="form-label">@lang('app.to')</label>
                            <input type="text" class="form-control" id="to" name="to" value="{{ $find['to'] }}" placeholder="@lang('app.to')">
                        </div>
                    </div>
                </div>

                <hr />
                <div class="row">
                    <h5 style="text-decoration: underline;font-weight: bold;">smtp config</h5>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="host" class="form-label">@lang('app.host')</label>
                            <input type="text" class="form-control" id="host" name="host" value="{{ $find['host'] }}" placeholder="@lang('app.host')">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="port" class="form-label">@lang('app.port')</label>
                            <input type="text" class="form-control" id="port" name="port" value="{{ $find['port'] }}" placeholder="@lang('app.port')">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="encryption" class="form-label">@lang('app.encryption')</label>
                            <input type="text" class="form-control" id="encryption" name="encryption" value="{{ $find['encryption'] }}" placeholder="@lang('app.encryption')">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="username" class="form-label">@lang('app.username')</label>
                            <input type="text" class="form-control" id="username" name="username" value="{{ $find['username'] }}" placeholder="@lang('app.username')">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="password" class="form-label">@lang('app.password')</label>
                            <input type="password" class="form-control" id="password" name="password" value="{{ $find['password'] }}" placeholder="@lang('app.password')">
                        </div>
                    </div>
                </div>
            </div>

            {{--------------------- tab 3 social ---------------------}}
            <div class="tab-pane" id="social" role="tabpanel">
                <div class="row">
                    <h5 style="text-decoration: underline;font-weight: bold;">@lang('app.social_network')</h5>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="facebook" class="form-label">@lang('app.facebook')</label>
                            <input type="text" class="form-control" id="facebook" name="facebook" value="{{ $find['facebook'] }}" placeholder="@lang('app.facebook')">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="twitter" class="form-label">@lang('app.twitter')</label>
                            <input type="text" class="form-control" id="twitter" name="twitter" value="{{ $find['twitter'] }}" placeholder="@lang('app.twitter')">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="linked_in" class="form-label">@lang('app.linked_in')</label>
                            <input type="text" class="form-control" id="linked_in" name="linked_in" value="{{ $find['linked_in'] }}" placeholder="@lang('app.linked_in')">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="google" class="form-label">@lang('app.google')</label>
                            <input type="text" class="form-control" id="google" name="google" value="{{ $find['google'] }}" placeholder="@lang('app.google')">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="tiktok" class="form-label">@lang('app.tiktok')</label>
                            <input type="text" class="form-control" id="tiktok" name="tiktok" value="{{ $find['tiktok'] }}" placeholder="@lang('app.tiktok')">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="youtube" class="form-label">@lang('app.youtube')</label>
                            <input type="text" class="form-control" id="youtube" name="youtube" value="{{ $find['youtube'] }}" placeholder="@lang('app.youtube')">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
            url: "{{url('admin/settings/store')}}",
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
                url: "{{url('admin/settings/store')}}",
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
