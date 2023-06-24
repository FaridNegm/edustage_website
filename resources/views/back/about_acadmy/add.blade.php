@extends('back.layouts.app')

@section('title')
    {{ trans('app.about_acadmy') }}
@endsection

@section('header')
    {{-- file upload --}}
    <link href="{{ url('back') }}/assets/file-upload-with-preview.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('back') }}/assets/libs/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />

    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.ckeditor').ckeditor();
        });
    </script>

@endsection

@section('footer')
    <!-- file-upload -->
    <script src="{{ url('back') }}/assets/file-upload-with-preview.min.js"></script>
    <script src="{{ url('back') }}/assets/libs/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script> $(document).ready(function(){ var firstUpload = new FileUploadWithPreview('file_upload'); }); </script>

    @include('back.about_acadmy.delete')
@endsection

@section('content')

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">{{ trans('app.about_acadmy') }}</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                
                <div class="row" data-select2-id="11">
                    <form action="{{ url('admin/about_acadmy/store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-12" data-select2-id="10">
                            {{-- basic_information --}}
                            <div class="card" style="background: #ECE5C7;">
                                <div class="card-body">
                                    <h4 class="card-title">{{ trans('app.about_acadmy') }}</h4>
                                    <br>
                                    <div class="form-group mb-3">
                                        <div class="row">                                            
                                            <div class="col-md-6">
                                                <label for="title">{{ trans('app.title') }}</label>
                                                <i class="fas fa-star" style="color: red;font-size: 8px;float: left;top: 6px;position: relative;right: 3px;"></i>

                                                <input id="title" name="title" type="text" class="form-control" placeholder="{{ trans('app.title') }}" value="{{ old('title') }}">

                                                @if ($errors->has('title'))
                                                    <span class="text-danger text-bold">{{ $errors->first('title') }}</span>
                                                @endif
                                            </div>

                                            <div class="col-md-6">
                                                <label for="status">{{ trans('app.status') }}</label>
                                                <i class="fas fa-star" style="color: red;font-size: 8px;float: left;top: 6px;position: relative;right: 3px;"></i>

                                                <select name="status"  class="form-control">
                                                    <option value="1">{{ trans('app.active') }}</option>
                                                    <option value="0">{{ trans('app.not_active') }}</option>
                                                </select>

                                                @if ($errors->has('status'))
                                                    <span class="text-danger text-bold">{{ $errors->first('status') }}</span>
                                                @endif
                                            </div>

                                        </div>
                                    </div>
                                        
                                    <br>
                                    <div class="form-group mb-3">
                                        <div class="">
                                            <label for="description">{{ trans('app.description') }}</label>
                                            <textarea class="ckeditor form-control cke_rtl" name="description" >{{ old('description') }}</textarea>
                                        </div>
                                    </div>
                                        
                                    <br>
                                    <div class="form-group mb-3">
                                        {{-- <div class="custom-file-container" data-upload-id="file_upload">
                                            <label style="color: #555;">{{ trans('app.media') }}
                                                <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">
                                                    <i class="fa fa-trash-alt" style="color: rgb(221, 7, 7);font-size: 15px;position: relative;top: 3px;margin: 0px 15px 10px;"></i>
                                                </a>
                                            </label>
                                            <label class="custom-file-container__custom-file" >
                                                <input type="file" class="custom-file-container__custom-file__custom-file-input" name="media[]" multiple>
                                                <input type="hidden" name="media_hidden" />
                                                <span class="custom-file-container__custom-file__custom-file-control text-center"></span>
                                            </label>
                                            <div class="custom-file-container__image-preview"></div>
                                        </div> --}}

                                        <div class="custom-file-container" data-upload-id="file_upload">
                                            <label style="color: #555;">{{ trans('app.image') }}
                                                <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">
                                                    <i class="fa fa-trash-alt" style="color: rgb(221, 7, 7);font-size: 15px;position: relative;top: 3px;margin: 0px 15px 10px;"></i>
                                                </a>
                                            </label>
                                            <label class="custom-file-container__custom-file" >
                                                <input type="file" class="custom-file-container__custom-file__custom-file-input" name="media[]" multiple>
                                                <input type="hidden" name="image_hidden" />
                                                <span class="custom-file-container__custom-file__custom-file-control text-center"></span>
                                            </label>
                                            <div class="custom-file-container__image-preview"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="d-flex flex-wrap gap-2">
                            <button type="submit" class="btn btn-success waves-effect waves-light" id="save">حفظ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        {{-- Include Footer --}}
        @include('back.layouts.footer')
    </div>
@endsection
