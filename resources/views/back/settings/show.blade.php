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
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="app_name" class="form-label">@lang('app.app_name')</label>
                            <p style="font-weight: bold;">{{ $find['app_name'] }}</p>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="mb-3">
                            <label for="description" class="form-label">@lang('app.description')</label>
                            <p style="font-weight: bold;">{{ $find['description'] }}</p>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="lang" class="form-label">@lang('app.lang')</label>
                            <p style="font-weight: bold;">{{ $find['lang'] }}</p>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="mb-3">
                            <label for="footer_text" class="form-label">@lang('app.footer_text')</label>
                            <p style="font-weight: bold;">{{ $find['footer_text'] }}</p>
                        </div>
                    </div>
                </div>

                <hr />
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="address" class="form-label">@lang('app.address')</label>
                            <p style="font-weight: bold;">{{ $find['address'] }}</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="mb-3">
                            <label for="city" class="form-label">@lang('app.city')</label>
                            <p style="font-weight: bold;">{{ $find['city'] }}</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="mb-3">
                            <label for="zip_code" class="form-label">@lang('app.zip_code')</label>
                            <p style="font-weight: bold;">{{ $find['zip_code'] }}</p>
                        </div>
                    </div>
                </div>

                <hr />
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="email" class="form-label">@lang('app.email')</label>
                            <p style="font-weight: bold;">{{ $find['email'] }}</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="phone1" class="form-label">@lang('app.phone1')</label>
                            <p style="font-weight: bold;">{{ $find['phone1'] }}</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="phone2" class="form-label">@lang('app.phone2')</label>
                            <p style="font-weight: bold;">{{ $find['phone2'] }}</p>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="accept_cookies" name="accept_cookies"  {{ $find['accept_cookies'] === 1 ? 'checked' : null }} style="width: 20px;height: 20px;position: relative;top: 0px;">
                        <label class="form-check-label" for="accept_cookies" style="margin: 3px 5px;">
                            @lang('app.accept_cookies')
                        </label>
                    </div>
                </div>
            </div>

            {{--------------------- tab 2 images ---------------------}}
            <div class="tab-pane" id="images" role="tabpanel">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3 text-center">
                            <p>@lang('app.logo_website')</p>
                            <a class="spotlight" href="{{ url('back/images/settings/'.$find['logo_website']) }}">
                                <img src="{{ url('back/images/settings/'.$find['logo_website']) }}" style="width:200px;height: 200px;margin:20px auto;border-radius: 50%;">
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-3 text-center">
                            <p>@lang('app.logo_dashboard')</p>
                            <a class="spotlight" href="{{ url('back/images/settings/'.$find['logo_dashboard']) }}">
                                <img src="{{ url('back/images/settings/'.$find['logo_dashboard']) }}" style="width:200px;height: 200px;margin:20px auto;border-radius: 50%;">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3 text-center">
                            <p>@lang('app.fav_icon')</p>
                            <a class="spotlight" href="{{ url('back/images/settings/'.$find['fav_icon']) }}">
                                <img src="{{ url('back/images/settings/'.$find['fav_icon']) }}" style="width:200px;height: 200px;margin:20px auto;border-radius: 50%;">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{--------------------- tab 3 mail ---------------------}}
            <div class="tab-pane" id="mail" role="tabpanel">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="mail_driver" class="form-label">@lang('app.mail_driver')</label>
                            <p style="font-weight: bold;">{{ $find['mail_driver'] }}</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="from" class="form-label">@lang('app.from')</label>
                            <p style="font-weight: bold;">{{ $find['from'] }}</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="to" class="form-label">@lang('app.to')</label>
                            <p style="font-weight: bold;">{{ $find['to'] }}</p>
                        </div>
                    </div>
                </div>

                <hr />
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="host" class="form-label">@lang('app.host')</label>
                            <p style="font-weight: bold;">{{ $find['host'] }}</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="port" class="form-label">@lang('app.port')</label>
                            <p style="font-weight: bold;">{{ $find['port'] }}</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="encryption" class="form-label">@lang('app.encryption')</label>
                            <p style="font-weight: bold;">{{ $find['encryption'] }}</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="username" class="form-label">@lang('app.username')</label>
                            <p style="font-weight: bold;">{{ $find['username'] }}</p>
                        </div>
                    </div>
                </div>
            </div>

            {{--------------------- tab 3 social ---------------------}}
            <div class="tab-pane" id="social" role="tabpanel">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="facebook" class="form-label">@lang('app.facebook')</label>
                            <p style="font-weight: bold;">{{ $find['facebook'] }}</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="twitter" class="form-label">@lang('app.twitter')</label>
                            <p style="font-weight: bold;">{{ $find['twitter'] }}</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="linked_in" class="form-label">@lang('app.linked_in')</label>
                            <p style="font-weight: bold;">{{ $find['linked_in'] }}</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="google" class="form-label">@lang('app.google')</label>
                            <p style="font-weight: bold;">{{ $find['google'] }}</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="tiktok" class="form-label">@lang('app.tiktok')</label>
=                            <p style="font-weight: bold;">{{ $find['tiktok'] }}</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="youtube" class="form-label">@lang('app.youtube')</label>
                            <p style="font-weight: bold;">{{ $find['youtube'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>


<script>
    $("#offcanvasWithBothOptions .offcanvas-title").text("@lang('app.show')").css("color", "#FFF");
    $("#offcanvasWithBothOptions .offcanvas-header").css("background", "rgb(119 210 215)");
</script>
