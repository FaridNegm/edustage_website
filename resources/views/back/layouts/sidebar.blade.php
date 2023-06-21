<div class="vertical-menu">

    <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu" class="mm-active">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled mm-show" id="side-menu">
                {{-- <li class="menu-title" key="t-menu">@lang('app.organizational_structure')</li> --}}

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-boxes"></i>
                        <span key="t-multi-level">@lang('app.catalog')</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="true">
                        <li><a href="{{ url('admin/product-units') }}" key="t-level-1-1">@lang('app.product_units')</a></li>
                        <li><a href="{{ url('admin/product-variation') }}" key="t-level-1-1">@lang('app.product_variation')</a></li>
                        <li><a href="{{ url('admin/product-brands') }}" key="t-level-1-1">@lang('app.product_brands')</a></li>
                        <li><a href="{{ url('admin/product-categories') }}" key="t-level-1-1">@lang('app.product_category')</a></li>
                        <li><a href="{{ url('admin/product-review') }}" key="t-level-1-1">@lang('app.product_review')</a></li>
                        <li><a href="{{ url('admin/product-barcode') }}" key="t-level-1-1">@lang('app.product_barcode')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fab fa-product-hunt"></i>
                        <span key="t-multi-level">@lang('app.products')</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="true">
                        <li><a href="{{ url('admin/products') }}" key="t-level-1-1">@lang('app.products_list')</a></li>
                        <li><a href="{{ url('admin/add-product') }}" key="t-level-1-1">@lang('app.add_product')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-check-circle"></i>
                        <span key="t-multi-level">@lang('app.sell/order')</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="true">
                        <li><a href="{{ url('admin/order-list') }}" key="t-level-1-1">@lang('app.order_list')</a></li>
                        <li><a href="{{ url('admin/order-detail') }}" key="t-level-1-1">@lang('app.order_detail')</a></li>
                        <li><a href="{{ url('admin/pos') }}" key="t-level-1-1">@lang('app.pos')</a></li>
                    </ul>
                </li>
                
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-undo-alt "></i>
                        <span key="t-multi-level">@lang('app.returns')</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="true">
                        <li><a href="{{ url('admin/sale-return') }}" key="t-level-1-1">@lang('app.sale_return_list')</a></li>
                        <li><a href="{{ url('admin/add-sale-return') }}" key="t-level-1-1">@lang('app.add_sale_return')</a></li>
                        <li><a href="{{ url('admin/purchase-return') }}" key="t-level-1-1">@lang('app.purchase_return_list')</a></li>
                        <li><a href="{{ url('admin/add-purchase-return') }}" key="t-level-1-1">@lang('app.add_purchase_return')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-money-bill-wave"></i>
                        <span key="t-multi-level">@lang('app.purchase')</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="true">
                        <li><a href="{{ url('admin/purchase') }}" key="t-level-1-1">@lang('app.purchase_list')</a></li>
                        <li><a href="{{ url('admin/add-purchase') }}" key="t-level-1-1">@lang('app.add_purchase')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa fa-users"></i>
                        <span key="t-multi-level">@lang('app.peoples')</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="true">
                        <li><a href="{{ url('admin/admins') }}" key="t-level-1-1">@lang('app.admins')</a></li>
                        <li><a href="{{ url('admin/employes') }}" key="t-level-1-1">@lang('app.employees')</a></li>
                        <li><a href="{{ url('admin/clients') }}" key="t-level-1-1">@lang('app.clients')</a></li>
                        <li><a href="{{ url('admin/customer') }}" key="t-level-1-1">@lang('app.customer')</a></li>
                        <li><a href="{{ url('admin/supplier') }}" key="t-level-1-1">@lang('app.supplier')</a></li>
                        <li><a href="{{ url('admin/billers') }}" key="t-level-1-1">@lang('app.billers')</a></li>
                    </ul>
                </li>
               
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-chart-line"></i>
                        <span key="t-multi-level">@lang('app.reports')</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="true">
                        <li><a href="{{ url('admin/profit-loss-report') }}" key="t-level-1-1">@lang('app.profit_loss_report')</a></li>
                        <li><a href="{{ url('admin/purchase-report') }}" key="t-level-1-1">@lang('app.purchase_report')</a></li>
                        <li><a href="{{ url('admin/sale-report') }}" key="t-level-1-1">@lang('app.sale_report')</a></li>
                        <li><a href="{{ url('admin/supplier-report') }}" key="t-level-1-1">@lang('app.supplier_report')</a></li>
                        <li><a href="{{ url('admin//customer-report') }}" key="t-level-1-1">@lang('app.customer_report')</a></li>
                        <li><a href="{{ url('admin/stock-report') }}" key="t-level-1-1">@lang('app.stock_report')</a></li>
                        <li><a href="{{ url('admin/stock-adjustment-report') }}" key="t-level-1-1">@lang('app.stock_adjustment_report')</a></li>
                        <li><a href="{{ url('admin/outofstock-report') }}" key="t-level-1-1">@lang('app.outofstock_report')</a></li>
                        <li><a href="{{ url('admin/stock-alert-report') }}" key="t-level-1-1">@lang('app.stock_alert_report')</a></li>
                        <li><a href="{{ url('admin/expense-report') }}" key="t-level-1-1">@lang('app.expense_report')</a></li>
                    </ul>
                </li>
               
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-money-check-alt"></i>
                        <span key="t-multi-level">@lang('app.expenses')</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="true">
                        <li><a href="{{ url('admin/expenses-list') }}" key="t-level-1-1">@lang('app.expenses_list')</a></li>
                        <li><a href="{{ url('admin/expenses-type') }}" key="t-level-1-1">@lang('app.expenses_type')</a></li>
                    </ul>
                </li>
               
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-file-invoice-dollar"></i>
                        <span key="t-multi-level">@lang('app.accounts')</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="true">
                        <li><a href="{{ url('admin/accounts-list') }}" key="t-level-1-1">@lang('app.accounts_list')</a></li>
                        <li><a href="{{ url('admin/accounts-balance-sheet') }}" key="t-level-1-1">@lang('app.accounts_balance_sheet')</a></li>
                        <li><a href="{{ url('admin/accounts-trial-balance') }}" key="t-level-1-1">@lang('app.accounts_trial_balance')</a></li>
                        <li><a href="{{ url('admin/accounts-cashFlow') }}" key="t-level-1-1">@lang('app.accounts_cashflow')</a></li>
                        <li><a href="{{ url('admin/accounts-payment-report') }}" key="t-level-1-1">@lang('app.accounts_payment_report')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa fa-cog"></i>
                        <span key="t-multi-level">@lang('app.settings')</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="true">
                        <li><a href="{{ url('admin/roles_permissions') }}" key="t-level-1-1">@lang('app.roles_permissions')</a></li>
                        <li><a href="{{ url('admin/roles_permissions/create') }}" key="t-level-1-1">@lang('app.create_role_permissions')</a></li>
                        <li><a href="{{ url('admin/roles_permissions/asign_role') }}" key="t-level-1-1">@lang('app.asign_role')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span key="t-multi-level">Multi Level</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="true">
                        <li><a href="{{ url('admin/regions') }}" key="t-level-1-1">@lang('app.regions')</a></li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow" key="t-level-1-2">Level 1.2</a>
                            <ul class="sub-menu mm-collapse" aria-expanded="true">
                                <li><a href="javascript: void(0);" key="t-level-2-1">Level 2.1</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>