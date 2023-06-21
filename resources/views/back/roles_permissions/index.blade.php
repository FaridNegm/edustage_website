@extends('back.layouts.app')

@section('title')
    {{ trans('app.roles_permissions') }}
@endsection

@section('header')
    @if (app()->getLocale() == 'en')
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
                float: right;
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
                ajax: "{{ url('admin/roles_permissions/datatable_roles_permissions') }}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'code', name: 'code'},
                    {data: 'name_en', name: 'name_en'},
                    {data: 'mobile', name: 'mobile'},
                    {data: 'region', name: 'region'},
                    {data: 'manager', name: 'manager'},
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
                ajax: "{{ url('admin/roles_permissions/datatable_roles_permissions') }}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'code', name: 'code'},
                    {data: 'name_ar', name: 'name_ar'},
                    {data: 'mobile', name: 'mobile'},
                    {data: 'region', name: 'region'},
                    {data: 'manager', name: 'manager'},
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
    @endif

    @include('back.roles_permissions.delete')

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
                            <h4 class="mb-sm-0 font-size-18">@lang('app.roles_permissions')</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item">
                                        <a href="{{ url('admin') }}">@lang('app.home')</a>
                                    </li>
                                    <li class="breadcrumb-item active"> - @lang('app.roles_permissions')</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-3">

                        <div class="col-xs-12">
                            <div class="card mini-stats-wid">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p class="text-muted fw-medium">@lang('app.all_roles_permissions')</p>
                                            {{-- <h4 class="mb-0 all_roles_permissions">{{ $all_roles_permissions->count() }}</h4> --}}
                                        </div>

                                        <div class="flex-shrink-0 align-self-center">
                                            <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                                <span class="avatar-title">
                                                    <i class="fas fa-code-branch font-size-24"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="card mini-stats-wid">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p class="text-muted fw-medium">@lang('app.active_roles_permissions')</p>
                                            {{-- <h4 class="mb-0 active_roles_permissions">{{ $active_roles_permissions->count() }}</h4> --}}
                                        </div>

                                        <div class="flex-shrink-0 align-self-center">
                                            <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                                <span class="avatar-title">
                                                    <i class="fas fa-toggle-on font-size-24"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="card mini-stats-wid">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p class="text-muted fw-medium">@lang('app.not_active_roles_permissions')</p>
                                            {{-- <h4 class="mb-0 not_active_roles_permissions">{{ $not_active_roles_permissions->count() }}</h4> --}}
                                        </div>

                                        <div class="flex-shrink-0 align-self-center">
                                            <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                                <span class="avatar-title">
                                                    <i class="fas fa-toggle-off font-size-24"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>







                    {{-- /////////////////////////////////////  Table  ///////////////////////////////////////////////////////////// --}}
                    <div class="col-xl-9">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title" style="margin-bottom: 30px;">
                                    @lang('app.all_roles_permissions')

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

                                        <a type="button" class="btn btn-primary btn-rounded waves-effect waves-light mb-2 me-2" href="{{ url('admin/roles_permissions/create') }}">
                                            <i class="mdi mdi-plus me-1"></i>
                                            @lang('app.add')
                                        </a>
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
                                                <th>@lang('code')</th>
                                                <th>@lang('name_en')</th>
                                                <th>@lang('mobile')</th>
                                                <th>@lang('region')</th>
                                                <th>@lang('manager')</th>
                                                <th>@lang('status')</th>
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
                                                <th>@lang('name_ar')</th>
                                                <th>@lang('mobile')</th>
                                                <th>@lang('region')</th>
                                                <th>@lang('manager')</th>
                                                <th>@lang('status')</th>
                                                <th>@lang('action')</th>
                                            </tr>
                                        @endif
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>
            </div>
        </div>


        {{-- Include Footer --}}
        @include('back.layouts.footer')
    </div>
@endsection
