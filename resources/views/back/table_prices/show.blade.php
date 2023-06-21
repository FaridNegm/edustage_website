@extends('back.layouts.app')

@section('title')
    عرض باقات الإشتراكات
    ( {{ $find['class_room_name'] }} )
@endsection
@section('header')
    <style>
        @media (min-width: 768px) { /* Tablet */
            .offcanvas {
                width: 90%;
            }
        }
        @media (min-width: 992px){ /* Large Screen */
            .offcanvas {
                width: 40%;
            }
        }
        .card-title span{
            float: left;
        }
        .small_unit_checkbox{
            margin: 0px 10px;
            position: relative;
            top: 4px;
            width: 15px;
            height: 15px;
        }
    </style>

    {{-- spotlight --}}
    <link href="{{ url('back') }}/assets/css/spotlight.min.css" rel="stylesheet" type="text/css" />

    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.ckeditor').ckeditor();
        });
    </script>

@endsection

@section('footer')
     <!-- spotlight -->
	<script src="{{ url('back') }}/assets/js/spotlight.bundle.js"></script>
	<script src="{{ url('back') }}/assets/js/spotlight.min.js"></script>

    <script src="{{ url('back') }}/assets/libs/dropzone/min/dropzone.min.js"></script>
    <script>
        $(document).ready(function () {
            $("table").attr('class', 'table table-responsive table-bordered table-striped table-dark text-center');
        });
    </script>
    <script>
        $(document).ready(function(){
            $('.select2').select2();
        });
    </script>

    <script>
        $(document).ready(function(){
            $('.select2').select2({
                dropdownParent: $('#offcanvasWithBothOptions'),
            });      
        });
    </script>

    @include('back.table_prices.delete')
@endsection

@section('content')

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18" style="display: inline;">
                                عرض باقات الإشتراكات
                                <span style="color: red;">( {{ $find['class_room_name'] }} )</span>
                            </h4>
                            
                            <div>
                                <a href="{{ url('admin/table_prices/edit/'.$find['id']) }}" type="button" class="btn btn-primary btn-rounded">
                                    <i class="mdi mdi-pencil me-1"></i>
                                    @lang('app.edit')
                                </a>
    
                                <a href="{{ url('admin/table_prices/create') }}" type="button" class="btn btn-success btn-rounded">
                                    <i class="mdi mdi-plus me-1"></i>
                                    @lang('app.add')
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->





                <div class="row" data-select2-id="11">
                    <div class="col-12" data-select2-id="10">
                        {{-- basic_information --}}
                        <div class="card">
                            <div class="card-body">

                                <div class="accordion" id="accordionExample">
                                    {{-- 111111111111 --}}
                                    <div class="accordion-item" style="background: #F5F0BB;">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                باقة الاشتراك في كل المواد
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                                            <div class="accordion-body">
                                                <div class="form-group mb-3">
                                                    <div class="row">                                            
                                                        <div class="col-md-3">
                                                            <label for="class_room_name">الصف الدراسي</label>
                
                                                            <p><strong>{{ $find['class_room_name'] }}</strong></p>
                                                        </div>
                
                                                        <div class="col-md-9">
                                                            <label for="all_mat_heading_desc">وصف قبل صوره باقة كل المواد</label>
                                                            
                                                            <p><strong>{{ $find['all_mat_heading_desc'] }}</strong></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                    
                                                <hr>
                                                <div class="form-group mb-3">
                                                    <div class="">
                                                        <label for="all_mat_body_desc">وصف باقة كل المواد</label>
                                                        <input type="checkbox" class="small_unit_checkbox" name="all_mat_body_desc_status" id="all_mat_body_desc" {{ $find['all_mat_body_desc_status'] == 1 ? "checked" : "" }} value="{{ old('all_mat_body_desc_status') }}">
                
                                                        <p><strong>{!! $find['all_mat_body_desc'] !!}</strong></p>
                                                    </div>
                                                </div>
                                                
                                                <hr>
                                                <div class="form-group mb-3">
                                                    <div class="row">                                            
                                                        <div class="col-md-6">
                                                            <label for="all_mat_img_desc_status">صورة وصف باقة كل المواد</label>
                                                            <input type="checkbox" class="small_unit_checkbox" name="all_mat_img_desc_status" id="all_mat_img_desc_status" {{ $find['all_mat_img_desc_status'] == 1 ? "checked" : "" }} value="{{ old('all_mat_img_desc_status') }}">
                                                            
                                                            @if ($find['all_mat_img_desc'] != null)
                                                                <img class="img-responsive img-thumbnail spotlight" src="{{ url('back/images/table_prices/'.$find['all_mat_img_desc']) }}" width="100%;" style="margin: 0px auto;display: block;height: 300px;">
                                                            @endif
                                                        </div>
                
                                                        <div class="col-md-6">
                                                            <label for="all_mat_video_desc_status">فديو وصف باقة كل المواد</label>
                                                            <input type="checkbox" class="small_unit_checkbox" name="all_mat_video_desc_status" id="all_mat_video_desc_status" {{ $find['all_mat_video_desc_status'] == 1 ? "checked" : "" }} value="{{ old('all_mat_video_desc_status') }}">
                                                            
                                                            @if ($find['all_mat_video_desc'] != null)
                                                                <video width="100%" height="300px" controls > 
                                                                    <source src="{{ url('back/images/table_prices/'.$find['all_mat_video_desc']) }}">
                                                                </video>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                
                                                <hr>
                                                <div class="form-group mb-3">
                                                    <div class="row">                                            
                                                        <div class="col-md-6">
                                                            <label for="all_mat_counter_heading">وصف ما قبل مدة باقة كل المواد</label>

                                                            <p><strong>{{ $find['all_mat_counter_heading'] }}</strong></p>
                                                        </div>
                
                                                        <div class="col-md-3">
                                                            <label for="all_mat_counter_from">مدة الباقة من</label>

                                                            <p><strong>{{ $find['all_mat_counter_from'] }}</strong></p>
                                                        </div>
                
                                                        <div class="col-md-3">
                                                            <label for="all_mat_counter_to">مدة الباقة إلي</label>

                                                            <p><strong>{{ $find['all_mat_counter_to'] }}</strong></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- 222222222222222 --}}
                                    <div class="accordion-item" style="background: #C0DBEA;">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                باقة الاشتراك في مادة واحدة
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample" style="">
                                            <div class="accordion-body">
                                                <div class="form-group mb-3">
                                                    <div class="">
                                                        <label for="one_mat_heading_desc">وصف قبل جدول باقة مادة واحدة</label>
                                                        
                                                        <p><strong>{{ $find['one_mat_heading_desc'] }}</strong></p>                
                                                    </div>
                                                </div>
                                                    
                                                <hr>
                                                <div class="form-group mb-3">
                                                    <div class="">
                                                        <label for="one_mat_body_desc">وصف باقة مادة واحدة</label>
                                                        
                                                        <p><strong>{!! $find['one_mat_body_desc'] !!}</strong></p>                
                                                    </div>
                                                </div>
                                                    
                                                <hr>
                                                <div class="form-group mb-3">
                                                    <div class="">
                                                        <label for="one_mat_table_prices">جدول الاشتراك في مادة واحدة</label>
                                                        
                                                        <p><strong>{!! $find['one_mat_table_prices'] !!}</strong></p>                
                                                    </div>
                                                </div>
                                            
                                                <hr>
                                                <div class="form-group mb-3">
                                                    <div class="row">                                            
                                                        <div class="col-md-6">
                                                            <label for="one_mat_counter_heading	">وصف ما قبل مدة باقة مادة واحدة</label>

                                                            <p><strong>{{ $find['one_mat_counter_heading'] }}</strong></p>                
                                                        </div>
                
                                                        <div class="col-md-3">
                                                            <label for="one_mat_counter_from">مدة الباقة من</label>

                                                            <p><strong>{{ $find['one_mat_counter_from'] }}</strong></p>                
                                                        </div>
                
                                                        <div class="col-md-3">
                                                            <label for="one_mat_counter_to">مدة الباقة إلي</label>

                                                            <p><strong>{{ $find['one_mat_counter_to'] }}</strong></p>                
                                                        </div>
                                                    </div>
                                                </div>                
                                            </div>
                                        </div>
                                    </div>

                                    {{-- 333333333333333 --}}
                                    <div class="accordion-item" style="background: #F1F6F9;">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                جدول العربي واللغات
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample" style="">
                                            <div class="accordion-body">
                                                <div class="form-group mb-3">
                                                    <div class="">
                                                        <label for="arabic_lessons_time">جدول العربي</label>
                
                                                        <p><strong>{!! $find['arabic_lessons_time'] !!}</strong></p>                
                                                    </div>
                                                </div>
                
                                                <hr>
                                                <div class="form-group mb-3">
                                                    <div class="">
                                                        <label for="english_lessons_time">جدول اللغات</label>

                                                        <p><strong>{!! $find['english_lessons_time'] !!}</strong></p>                
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        </div>

        {{-- Include Footer --}}
        @include('back.layouts.footer')
    </div>
@endsection
