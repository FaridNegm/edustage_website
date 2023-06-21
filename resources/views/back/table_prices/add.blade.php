@extends('back.layouts.app')

@section('title')
    {{ trans('app.table_prices') }}
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

    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.ckeditor').ckeditor();
        });
    </script>

@endsection

@section('footer')
    <script src="{{ url('back') }}/assets/libs/dropzone/min/dropzone.min.js"></script>
    <script>
        $(document).ready(function () {
            $("table").attr('class', 'table table-responsive table-bordered table-striped table-primary text-center');
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
                            <h4 class="mb-sm-0 font-size-18">باقات الإشتراكات</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                
                <div class="row" data-select2-id="11">
                    <form action="{{ url('admin/table_prices/store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-12" data-select2-id="10">
                            {{-- basic_information --}}
                            <div class="card" style="background: #ECE5C7;">
                                <div class="card-body">
                                    <h4 class="card-title">باقة الاشتراك في كل المواد</h4>
                                    <br>
                                    <div class="form-group mb-3">
                                        <div class="row">                                            
                                            <div class="col-md-2">
                                                <label for="class_room_name">الصف الدراسي</label>
                                                <i class="fas fa-star" style="color: red;font-size: 8px;float: left;top: 6px;position: relative;right: 3px;"></i>

                                                <input id="class_room_name" name="class_room_name" type="text" class="form-control" placeholder="الصف الدراسي" value="{{ old('class_room_name') }}">

                                                @if ($errors->has('class_room_name'))
                                                    <span class="text-danger text-bold">{{ $errors->first('class_room_name') }}</span>
                                                @endif
                                            </div>

                                            <div class="col-md-10">
                                                <label for="all_mat_heading_desc">وصف قبل صوره باقة كل المواد</label>
                                                
                                                <input id="all_mat_heading_desc" name="all_mat_heading_desc" type="text" class="form-control" placeholder="وصف قبل صوره باقة كل المواد" value="{{ old('all_mat_heading_desc') }}">
                                            </div>
                                        </div>
                                    </div>
                                        
                                    <br>
                                    <div class="form-group mb-3">
                                        <div class="">
                                            <label for="all_mat_body_desc_status">وصف باقة كل المواد</label>
                                            <input type="checkbox" class="small_unit_checkbox" name="all_mat_body_desc_status" id="all_mat_body_desc_status">

                                            <textarea class="ckeditor form-control cke_rtl" name="all_mat_body_desc" >{{ old('all_mat_body_desc') }}</textarea>
                                        </div>
                                    </div>
                                    
                                    <br>
                                    <div class="form-group mb-3">
                                        <div class="row">                                            
                                            <div class="col-md-6">
                                                <label for="all_mat_img_desc_status">صورة وصف باقة كل المواد</label>
                                                <input type="checkbox" class="small_unit_checkbox" name="all_mat_img_desc_status" id="all_mat_img_desc_status" >
                                                
                                                <input id="all_mat_img_desc" name="all_mat_img_desc" type="file" class="form-control" value="{{ old('all_mat_img_desc') }}">

                                                @if ($errors->has('all_mat_img_desc'))
                                                    <span class="text-danger text-bold">{{ $errors->first('all_mat_img_desc') }}</span>
                                                @endif
                                            </div>

                                            <div class="col-md-6">
                                                <label for="all_mat_video_desc_status">فديو وصف باقة كل المواد</label>
                                                <input type="checkbox" class="small_unit_checkbox" name="all_mat_video_desc_status" id="all_mat_video_desc_status" >
                                                
                                                <input id="all_mat_video_desc" name="all_mat_video_desc" type="file" class="form-control" value="{{ old('all_mat_video_desc') }}">

                                                @if ($errors->has('all_mat_video_desc'))
                                                    <span class="text-danger text-bold">{{ $errors->first('all_mat_video_desc') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <br>
                                    <div class="form-group mb-3">
                                        <div class="row">                                            
                                            <div class="col-md-6">
                                                <label for="all_mat_counter_heading">وصف ما قبل مدة باقة كل المواد</label>
                                                <input id="all_mat_counter_heading" name="all_mat_counter_heading" type="text" class="form-control" placeholder="وصف ما قبل مدة الباقة" value="{{ old('all_mat_counter_heading') }}">
                                            </div>

                                            <div class="col-md-3">
                                                <label for="all_mat_counter_from">مدة الباقة من</label>
                                                <input id="all_mat_counter_from" name="all_mat_counter_from" type="datetime-local" class="form-control" value="{{ old('all_mat_counter_from') }}">
                                            </div>

                                            <div class="col-md-3">
                                                <label for="all_mat_counter_to">مدة الباقة إلي</label>
                                                <input id="all_mat_counter_to" name="all_mat_counter_to" type="datetime-local" class="form-control" value="{{ old('all_mat_counter_to') }}">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <br>
                            <hr>
                            <br>
                            
                            <div class="card" style="background: #b6cfe1;">
                                <div class="card-body">
                                    <h4 class="card-title">باقة الاشتراك في مادة واحدة</h4>
                                    <br>
                                    <div class="form-group mb-3">
                                        <div class="">
                                            <label for="one_mat_heading_desc">وصف قبل جدول باقة مادة واحدة</label>
                                            <i class="fas fa-star" style="color: red;font-size: 8px;float: left;top: 6px;position: relative;right: 3px;"></i>
                                            
                                            <input id="one_mat_heading_desc" name="one_mat_heading_desc" type="text" class="form-control" placeholder="وصف قبل صوره باقة كل المواد" value="{{ old('one_mat_heading_desc') }}">

                                            @if ($errors->has('one_mat_heading_desc'))
                                                <span class="text-danger text-bold">{{ $errors->first('one_mat_heading_desc') }}</span>
                                            @endif

                                        </div>
                                    </div>
                                        
                                    <br>
                                    <div class="form-group mb-3">
                                        <div class="">
                                            <label for="one_mat_body_desc">وصف باقة مادة واحدة</label>
                                            <i class="fas fa-star" style="color: red;font-size: 8px;float: left;top: 6px;position: relative;right: 3px;"></i>

                                            <textarea class="ckeditor form-control" name="one_mat_body_desc" >{{ old('one_mat_body_desc') }}</textarea>

                                            @if ($errors->has('one_mat_body_desc'))
                                                <span class="text-danger text-bold">{{ $errors->first('one_mat_body_desc') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                        
                                    <br>
                                    <div class="form-group mb-3">
                                        <div class="">
                                            <label for="one_mat_table_prices">جدول الاشتراك في مادة واحدة</label>
                                            <i class="fas fa-star" style="color: red;font-size: 8px;float: left;top: 6px;position: relative;right: 3px;"></i>

                                            <textarea class="ckeditor form-control" name="one_mat_table_prices" id="one_mat_table_prices">{{ old('one_mat_table_prices') }}</textarea>

                                            @if ($errors->has('one_mat_table_prices'))
                                                <span class="text-danger text-bold">{{ $errors->first('one_mat_table_prices') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                
                                    <br>
                                    <div class="form-group mb-3">
                                        <div class="row">                                            
                                            <div class="col-md-6">
                                                <label for="one_mat_counter_heading	">وصف ما قبل مدة باقة مادة واحدة</label>
                                                <input id="one_mat_counter_heading" name="one_mat_counter_heading	" type="text" class="form-control" placeholder="وصف ما قبل مدة الباقة" value="{{ old('one_mat_counter_heading') }}">
                                            </div>

                                            <div class="col-md-3">
                                                <label for="one_mat_counter_from">مدة الباقة من</label>
                                                <input id="one_mat_counter_from" name="one_mat_counter_from" type="datetime-local" class="form-control" value="{{ old('one_mat_counter_from') }}">
                                            </div>

                                            <div class="col-md-3">
                                                <label for="one_mat_counter_to">مدة الباقة إلي</label>
                                                <input id="one_mat_counter_to" name="one_mat_counter_to" type="datetime-local" class="form-control" value="{{ old('one_mat_counter_to') }}">
                                            </div>
                                        </div>
                                    </div>

                                    <br>
                                    <div class="form-group mb-3">
                                        <div class="">
                                            <label for="arabic_lessons_time">جدول العربي</label>
                                            <i class="fas fa-star" style="color: red;font-size: 8px;float: left;top: 6px;position: relative;right: 3px;"></i>

                                            <textarea class="ckeditor form-control" name="arabic_lessons_time" id="arabic_lessons_time">{{ old('arabic_lessons_time') }}</textarea>

                                            @if ($errors->has('arabic_lessons_time'))
                                                <span class="text-danger text-bold">{{ $errors->first('arabic_lessons_time') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                        
                                    <br>
                                    <div class="form-group mb-3">
                                        <div class="">
                                            <label for="english_lessons_time">جدول اللغات</label>
                                            <i class="fas fa-star" style="color: red;font-size: 8px;float: left;top: 6px;position: relative;right: 3px;"></i>

                                            <textarea class="ckeditor form-control" name="english_lessons_time" id="english_lessons_time">{{ old('english_lessons_time') }}</textarea>

                                            @if ($errors->has('english_lessons_time'))
                                                <span class="text-danger text-bold">{{ $errors->first('english_lessons_time') }}</span>
                                            @endif
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
