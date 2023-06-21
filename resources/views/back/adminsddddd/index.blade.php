@extends('back.layouts.app')

@section('title')
    {{ trans('app.admins') }}
@endsection

@section('header')
    @if (app()->getLocale() == 'en')
        <style>
            @media (min-width: 768px) { /* Tablet */
                .offcanvas {
                    width: 90%;
                }
            }
            @media (min-width: 992px){ /* Large Screen */
                .offcanvas {
                    width: 70%;
                }
            }
            .card-title span{
                float: right;
            }

            tbody:nth-child(even) tr:nth-child(even) {
			    background-color: #eff2f7;
		    }
        </style>
    @elseif (app()->getLocale() == 'ar')
    <style>
        @media (min-width: 768px) {
            .offcanvas {
                width: 90%;
            }
        }
        @media (min-width: 992px){
            .offcanvas {
                width: 70%;
            }
        }
        .card-title span{
            float: left;
        }

        tbody:nth-child(even) tr:nth-child(even) {
			background-color: #eff2f7;
		}
    </style>
    @endif

@endsection

@section('footer')

    <script>
        $(document).on('click', '.bt_modal', function (e) {
            e.preventDefault();
            let act = $(this).attr('act');

            $('.offcanvas-body').load(act);
        });
    </script>

    @if (app()->getLocale() == 'en')
        <script>
            $('#datatable').DataTable({
                processing: true,
                serverSide: true,
                url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/German.json",
                ajax: "{{ url('admin/admins/datatable_admins') }}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'image', name: 'image'},
                    {data: 'user', name: 'user'},
                    {data: 'contact', name: 'contact'},
                    {data: 'branche', name: 'branche'},
                    {data: 'gender', name: 'gender'},
                    {data: 'status', name: 'status'},
                    {data: 'action', name: 'action'},
                ],
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ],
                "aoColumnDefs": [
                    { "bSortable": false, "aTargets": [ 0 ] },
                ],
                order: [[0, "DESC"]]
            });
        </script>
    @elseif (app()->getLocale() == 'ar')
        <script>
            $('#datatable').DataTable({
                processing: true,
                serverSide: true,
                language: {
                    sUrl : "{{ url('back/assets/js/ar.json') }}"
                },
                url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/German.json",
                ajax: "{{ url('admin/admins/datatable_admins') }}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'code', name: 'code'},
                    {data: 'title_ar', name: 'title_ar'},
                    {data: 'contract_title_ar', name: 'contract_title_ar'},
                    {data: 'description', name: 'description'},
                    {data: 'job_salary_scale', name: 'job_salary_scale'},
                    {data: 'department', name: 'department'},
                    {data: 'action', name: 'action'},
                ],
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ],
                "aoColumnDefs": [
                    { "bSortable": false, "aTargets": [ 0 ] },
                ],
                order: [[0, "DESC"]]
            });
        </script>
    @endif

    @include('back.admins.delete')

@endsection

@section('content')

    <div class="main-content">

        <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel"></h5>
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <h4 class="text-center" style="margin: 100px auto;">@lang('app.loading') ...</h4>
            </div>
        </div>


        <div class="page-content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">@lang('app.admins')</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item">
                                        <a href="{{ url('admin') }}">@lang('app.home')</a>
                                    </li>
                                    <li class="breadcrumb-item active"> - @lang('app.admins')</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title" style="margin-bottom: 30px;">
                            @lang('app.all_admins')

                            <span style="position: relative;top: -7px;">

                                <div class="btn-group" style="top: -1px;">
                                    <button type="button" class="btn btn-sm btn-secondary btn-rounded waves-effect waves-light mb-2 me-2 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical font-size-18"></i>
                                    </button>
                                    <div class="dropdown-menu" id="delete_selected" style="">
                                        <li>
                                            <a href="#" class="dropdown-item">
                                                <i class="mdi mdi-trash-can font-size-16 text-danger me-1"></i>
                                                @lang('app.delete_selected')
                                            </a>
                                        </li>
                                    </div>
                                </div>

                                <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light mb-2 me-2 bt_modal" act="{{ url('admin/admins/create') }}" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                                    <i class="mdi mdi-plus me-1"></i>
                                    @lang('app.add')
                                </button>

                                {{-- <button class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2 bt_modal" act="{{ url('admin/admins/create') }}" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                                    <i class="fas fa-plus" data-toggle="tooltip" data-placement="top" title="" data-original-title="app.add"></i>
                                </button> --}}
                            </span>
                        </h4>

                        <table id="datatable" class="table table-hover dt-responsive nowrap w-100 table-striped table-bordered">
                            <thead class="table-light">
                                @if (app()->getLocale() == 'en')
                                    <tr>
                                        <th style="width: 20px;" class="align-middle">
                                            <div class="form-check font-size-16">
                                                <input class="form-check-input" type="checkbox" id="checkAll">
                                                <label class="form-check-label" for="checkAll"></label>
                                            </div>
                                        </th>
                                        <th>@lang('image')</th>
                                        <th>@lang('user')</th>
                                        <th>@lang('contact')</th>
                                        <th>@lang('branche')</th>
                                        <th>@lang('gender')</th>
                                        <th>@lang('status')</th>
                                        {{-- <th>@lang('login_info')</th> --}}
                                        <th>@lang('action')</th>
                                    </tr>
                                @elseif (app()->getLocale() == 'ar')
                                    <tr>
                                        <th style="width: 20px;" class="align-middle">
                                            <div class="form-check font-size-16">
                                                <input class="form-check-input" type="checkbox" id="checkAll">
                                                <label class="form-check-label" for="checkAll"></label>
                                            </div>
                                        </th>
                                        <th>@lang('code')</th>
                                        <th>@lang('title_ar')</th>
                                        <th>@lang('contract_title_ar')</th>
                                        <th style="width: 15%;">@lang('description')</th>
                                        <th>@lang('job_salary_scale')</th>
                                        <th>@lang('department')</th>
                                        <th>@lang('action')</th>
                                    </tr>
                                @endif
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        {{-- Include Footer --}}
        @include('back.layouts.footer')
    </div>
@endsection
