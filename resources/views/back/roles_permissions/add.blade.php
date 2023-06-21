@extends('back.layouts.app')

@section('title')
    {{ trans('app.create_role_permissions') }}
@endsection

@section('header')
    <style>
        input[type="checkbox"]{
            width: 1.20em;
            height: 1.20em;
            margin-top: .165em;
            vertical-align: top;
            background-color: #fff;
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain;
            border: 1px solid #e3d9da;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            -webkit-print-color-adjust: exact;
            color-adjust: exact;
            margin: 0px 8px;
            position: relative;
            top: 3px;
        }

        .dataTables_info, .dataTables_length, .dataTables_paginate{
            display: none;
        }

        /* input[name="settings_add"],
        input[name="settings_delete"],
        input[name="checkout_record_to_patients_add"],
        input[name="checkout_record_to_patients_edit"],
        input[name="medicine_category_edit"],
        input[name="medicine_category_show"],
        input[name="medicine_time_of_use_edit"],
        input[name="medicine_time_of_use_show"],
        input[name="medicine_repation_edit"],
        input[name="medicine_repation_show"]
        {
            display: none;
        } */
    </style>
@endsection

@section('footer')
    <script>
        $(document).ready(function () {
            $('#selectAll').click(function(event) {
                if(this.checked) {
                    $('input[type="checkbox"]').each(function() {
                        this.checked = true;
                    });
                } else {
                    $('input[type="checkbox"]').each(function() {
                        this.checked = false;
                    });
                }
            });



        });

        $('#datatable').DataTable({
                lengthMenu: [
                    [1000, 2500],
                    [1000, 2500],
                ],
            });
    </script>
@endsection

@section('content')

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">@lang('app.roles_permissions')</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item">
                                        <a href="{{ url('admin') }}">@lang('app.home')</a>
                                    </li>
                                    <li class="breadcrumb-item"> -
                                        <a href="{{ url('admin/roles_permissions') }}">@lang('app.roles_permissions')</a>
                                    </li>
                                    <li class="breadcrumb-item active"> - @lang('app.create_role_permissions')</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>

                @php
                    $models = ['patient_appointments', 'permissions', 'branches','departments', 'doctors', 'doctor_appointments','patients', 'patient_documents', 'human_resources','medicine', 'medicine_category', 'medicine_time_of_use', 'medicine_repation', 'prescription', 'notices','new_bed', 'bed_categories', 'reserve_bed','checkout_record_to_patients', 'expenses', 'settings'];

                    $count = 1;
                @endphp

                    {{-- /////////////////////////////////////  Table  ///////////////////////////////////////////////////////////// --}}
                    <div class="card">
                        <div class="card-body">
                            <div class="table table-responsive">
                                <table id="datatable" class="table-flush-spacing table table-hover table-striped table-bordered table-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <td>name</td>
                                            <td>select</td>
                                        </tr>
                                    </thead>
                                  <tbody>
                                    <tr>
                                        <td class="text-nowrap fw-semibold">
                                            <input type="text" class="form-control" placeholder="{{ trans('app.Role') }}" autofocus id="name" name="name" required style="border-radius: 0px;">
                                            @foreach ($errors->all() as $error)
                                                <bold class="text-danger" id="errors-name" style="padding: 10px 0px;font-weight: bold;">{{ $error }}</bold>
                                            @endforeach
                                        </td>
                                        <td>
                                          <div class="form-check" style="position: relative;top: 9px;">
                                            <input class="form-check-input" type="checkbox" id="selectAll">
                                            <label class="form-check-label" for="selectAll">
                                              @lang('app.Select_All')
                                            </label>
                                          </div>
                                        </td>
                                    </tr>
                                    @foreach ($models as $model)
                                    <tr>
                                        {{-- <td class="text-nowrap fw-semibold">{{ $count++ }}</td> --}}
                                        <td class="text-nowrap fw-semibold">@lang('app.'.$model)</td>
                                        <td>
                                            <div class="d-flex">
                                            <div class="form-check me-3 me-lg-5">
                                                <input class="form-check-input" type="checkbox" name="{{ $model }}_add" {{ old(''.$model.'_add') ? 'checked' : '' }} id="{{ $model }}_add"/>
                                                <label class="form-check-label" for="{{ $model }}_add">
                                                @lang('app.Add')
                                                </label>
                                            </div>

                                            <div class="form-check me-3 me-lg-5">
                                                <input class="form-check-input" type="checkbox" name="{{ $model }}_view" {{ old(''.$model.'_view') ? 'checked' : '' }} id="{{ $model }}_view"/>
                                                <label class="form-check-label" for="{{ $model }}_view">
                                                @lang('app.View')
                                                </label>
                                            </div>

                                            <div class="form-check me-3 me-lg-5">
                                                <input class="form-check-input" type="checkbox" name="{{ $model }}_update" {{ old(''.$model.'_update') ? 'checked' : '' }} id="{{ $model }}_update"/>
                                                <label class="form-check-label" for="{{ $model }}_update">
                                                @lang('app.Update')
                                                </label>
                                            </div>

                                            <div class="form-check me-3 me-lg-5">
                                                <input class="form-check-input" type="checkbox" name="{{ $model }}_delete" {{ old(''.$model.'_delete') ? 'checked' : '' }} id="{{ $model }}_delete"/>
                                                <label class="form-check-label" for="{{ $model }}_delete">
                                                @lang('app.Delete')
                                                </label>
                                            </div>

                                            <div class="form-check me-3 me-lg-5">
                                                <input class="form-check-input" type="checkbox" name="{{ $model }}_delete_selected" {{ old(''.$model.'_delete_selected') ? 'checked' : '' }} id="{{ $model }}_delete_selected"/>
                                                <label class="form-check-label" for="{{ $model }}_delete_selected">
                                                @lang('app.Delete_selected')
                                                </label>
                                            </div>

                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                  </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            </div>
        </div>


        {{-- Include Footer --}}
        @include('back.layouts.footer')
    </div>
@endsection
