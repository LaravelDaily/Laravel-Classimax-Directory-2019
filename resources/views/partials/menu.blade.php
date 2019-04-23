<aside class="main-sidebar">
    <section class="sidebar" style="height: auto;">
        <ul class="sidebar-menu tree" data-widget="tree">
            <li>
{{--                <a href="{{ route("admin.home") }}">--}}
                    <i class="fas fa-tachometer-alt">

                    </i>
                    {{ trans('global.dashboard') }}
                </a>
            </li>
            @can('user_management_access')
                <li class="treeview">
                    <a>
                        <i class="fas fa-users">

                        </i>
                        <span>{{ trans('global.userManagement.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('permission_access')
                            <li class="{{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.permissions.index") }}">
                                    <i class="fas fa-unlock-alt">

                                    </i>
                                    <span>{{ trans('global.permission.title') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('role_access')
                            <li class="{{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.roles.index") }}">
                                    <i class="fas fa-briefcase">

                                    </i>
                                    <span>{{ trans('global.role.title') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                            <li class="{{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.users.index") }}">
                                    <i class="fas fa-user">

                                    </i>
                                    <span>{{ trans('global.user.title') }}</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('category_access')
                <li class="{{ request()->is('admin/categories') || request()->is('admin/categories/*') ? 'active' : '' }}">
                    <a href="{{ route("admin.categories.index") }}">
                        <i class="fas fa-cogs">

                        </i>
                        <span>{{ trans('global.category.title') }}</span>
                    </a>
                </li>
            @endcan
            @can('city_access')
                <li class="{{ request()->is('admin/cities') || request()->is('admin/cities/*') ? 'active' : '' }}">
                    <a href="{{ route("admin.cities.index") }}">
                        <i class="fas fa-cogs">

                        </i>
                        <span>{{ trans('global.city.title') }}</span>
                    </a>
                </li>
            @endcan
            @can('company_access')
                <li class="{{ request()->is('admin/companies') || request()->is('admin/companies/*') ? 'active' : '' }}">
                    <a href="{{ route("admin.companies.index") }}">
                        <i class="fas fa-cogs">

                        </i>
                        <span>{{ trans('global.company.title') }}</span>
                    </a>
                </li>
            @endcan
            <li>
                <a href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="fas fa-sign-out-alt">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
        </ul>
    </section>
</aside>