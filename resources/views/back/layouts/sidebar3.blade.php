<div class="topnav" style="top: 0px;">
    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

            <div class="collapse navbar-collapse active" id="topnav-menu-content">
                <ul class="navbar-nav active">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-uielement" role="button">
                            <i class="fas fa-layer-group me-2"></i>
                            <span key="t-ui-elements">@lang('app.organizational_structure')</span>
                            <div class="arrow-down"></div>
                        </a>

                        <div class="dropdown-menu mega-dropdown-menu px-2 dropdown-mega-menu-xl" aria-labelledby="topnav-uielement">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h5 key="t-ui-components" style="margin-left: 23px;font-weight: bold;text-decoration: underline;margin-top: 6px;font-size: 14px;">@lang('app.basics')
                                    </h5>

                                    <a href="{{ url('admin/regions') }}" class="dropdown-item" >
                                        @lang('app.regions')
                                    </a>

                                    <a href="{{ url('admin/branches') }}" class="dropdown-item" >
                                        @lang('app.branches')
                                    </a>

                                    <a href="{{ url('admin/departments') }}" class="dropdown-item" >
                                        @lang('app.departments')
                                    </a>

                                    <a href="{{ url('admin/jobs') }}" class="dropdown-item" >
                                        @lang('app.jobs')
                                    </a>
                                </div>

                                <div class="col-lg-6">
                                    <h5 key="t-ui-components" style="margin-left: 23px;font-weight: bold;text-decoration: underline;margin-top: 6px;font-size: 14px;">@lang('app.papers')
                                    </h5>

                                    <a href="{{ url('admin/hiring_documents') }}" class="dropdown-item" >
                                        @lang('app.hiring_documents')
                                    </a>

                                    <a href="{{ url('admin/contracts') }}" class="dropdown-item" >
                                        @lang('app.contracts')
                                    </a>
                                </div>

                            </div>

                        </div>
                    </li>

                    {{-- Users --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-layout" role="button">
                            <i class="fa fa-users me-2"></i><span key="t-layouts">@lang('app.users')</span> <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu active" aria-labelledby="topnav-layout">
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-layout-hori" role="button">
                                    <span>@lang('app.employees')</span> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-layout-hori">
                                    <a href="{{ url('admin/employes') }}" class="dropdown-item" key="t-light-sidebar">@lang('app.all_employees')</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-layout-hori" role="button">
                                    <span >@lang('app.admins')</span> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu active" aria-labelledby="topnav-layout-hori">
                                    <a href="{{ url('admin/admins') }}" class="dropdown-item" >@lang('app.all_admins')</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-layout-hori" role="button">
                                    <span >@lang('app.clients')</span> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu active" aria-labelledby="topnav-layout-hori">
                                    <a href="{{ url('admin/clients') }}" class="dropdown-item" >@lang('app.all_clients')</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    {{-- Insurance --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-layout" role="button">
                            <i class="fas fa-hand-holding-heart me-2"></i><span key="t-layouts">@lang('app.insurance')</span> <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu active" aria-labelledby="topnav-layout">
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-layout-hori" role="button">
                                    <span>@lang('app.medical_insurance')</span> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-layout-hori">
                                    <a href="layouts-light-sidebar.html" class="dropdown-item" key="t-light-sidebar">@lang('app.all_medical_insurance')</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-layout-hori" role="button">
                                    <span >@lang('app.social_insurance')</span> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu active" aria-labelledby="topnav-layout-hori">
                                    <a href="layouts-horizontal.html" class="dropdown-item" >@lang('app.all_social_insurance')</a>
                                </div>
                            </div>

                        </div>
                    </li>

                    {{-- Leaves And Attendance --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-layout" role="button">
                            <i class="fas fa-calendar-alt me-2"></i><span key="t-layouts">@lang('app.leaves_attendance')</span> <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu active" aria-labelledby="topnav-layout">
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-layout-hori" role="button">
                                    <span>@lang('app.leaves')</span> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-layout-hori">
                                    <a href="layouts-light-sidebar.html" class="dropdown-item" key="t-light-sidebar">@lang('app.all_leaves')</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-layout-hori" role="button">
                                    <span >@lang('app.attendance')</span> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu active" aria-labelledby="topnav-layout-hori">
                                    <a href="layouts-horizontal.html" class="dropdown-item" >@lang('app.all_attendance')</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    {{-- Legal Management --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-layout" role="button">
                            <i class="fas fa-calendar-alt me-2"></i><span key="t-layouts">@lang('app.legal_management')</span> <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu active" aria-labelledby="topnav-layout">
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-layout-hori" role="button">
                                    <span>@lang('app.legal_management')</span> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-layout-hori">
                                    <a href="layouts-light-sidebar.html" class="dropdown-item" key="t-light-sidebar">@lang('app.all_legal_management')</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-layout-hori" role="button">
                                    <span >@lang('app.attendance')</span> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu active" aria-labelledby="topnav-layout-hori">
                                    <a href="layouts-horizontal.html" class="dropdown-item" >@lang('app.all_attendance')</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    {{-- Settings --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-layout" role="button">
                            <i class="fa fa-cog me-2"></i><span key="t-layouts">@lang('app.settings')</span> <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu active" aria-labelledby="topnav-layout">
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-layout-hori" role="button">
                                    <span>@lang('app.roles_permissions')</span> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-layout-hori">
                                    <a href="{{ url('admin/roles_permissions') }}" class="dropdown-item" key="t-light-sidebar">@lang('app.all_roles_permissions')</a>

                                    <a href="{{ url('admin/roles_permissions/create') }}" class="dropdown-item" key="t-light-sidebar">@lang('app.create_role_permissions')</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-layout-hori" role="button">
                                    <span >@lang('app.asign_role')</span> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu active" aria-labelledby="topnav-layout-hori">
                                    <a href="{{ url('admin/roles_permissions/asign_role') }}" class="dropdown-item" key="t-light-sidebar">@lang('app.asign_role')</a>
                                </div>
                            </div>

                        </div>
                    </li>

                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-dashboard" role="button">
                            <i class="bx bx-home-circle me-2"></i><span key="t-dashboards">{{ trans('app.users') }}</span> <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-dashboard">

                            <a href="index.html" class="dropdown-item" key="t-default">Default</a>
                            <a href="dashboard-saas.html" class="dropdown-item" key="t-saas">Saas</a>
                            <a href="dashboard-crypto.html" class="dropdown-item" key="t-crypto">Crypto</a>
                            <a href="dashboard-blog.html" class="dropdown-item" key="t-blog">Blog</a>
                        </div>
                    </li> --}}

                    {{-- Organizational Structure --}}
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-layout" role="button">
                            <i class="fas fa-layer-group me-2"></i><span key="t-layouts">@lang('app.organizational_structure')</span> <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu active" aria-labelledby="topnav-layout">


                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-layout-hori" role="button">
                                    <span >@lang('app.branches')</span> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu active" aria-labelledby="topnav-layout-hori">
                                    <a href="layouts-horizontal.html" class="dropdown-item" >@lang('app.all_branches')</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-layout-hori" role="button">
                                    <span >@lang('app.departments')</span> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu active" aria-labelledby="topnav-layout-hori">
                                    <a href="layouts-horizontal.html" class="dropdown-item" >@lang('app.all_departments')</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-layout-hori" role="button">
                                    <span >@lang('app.jobs')</span> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu active" aria-labelledby="topnav-layout-hori">
                                    <a href="layouts-horizontal.html" class="dropdown-item" >@lang('app.all_jobs')</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-layout-hori" role="button">
                                    <span >@lang('app.hiring_documents')</span> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu active" aria-labelledby="topnav-layout-hori">
                                    <a href="layouts-horizontal.html" class="dropdown-item" >@lang('app.all_hiring_documents')</a>
                                </div>
                            </div>
                        </div>
                    </li> --}}
                </ul>
            </div>
        </nav>
    </div>
</div>
