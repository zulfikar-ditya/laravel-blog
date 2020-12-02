<aside class="main-sidebar {{ config('adminlte.classes_sidebar', 'sidebar-dark-primary elevation-4') }} bg-navy" style="position: fixed;">

    {{-- Sidebar brand logo --}}
    @if (Auth::user()->hasRole('superuser|staff'))
    <a href="{{route ('adminIndex')}}" class="brand-link ml-2">
    @else
    <a href="{{route ('ReporterIndex')}}" class="brand-link ml-2">
    @endif
        <i class="fab fa-laravel text-danger"></i>
        <span class="brand-text font-weight-light h3">Laravel Blog</span>
    </a>

    {{-- Sidebar menu --}}
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column {{ config('adminlte.classes_sidebar_nav', '') }}"
                data-widget="treeview" role="menu" @if(config('adminlte.sidebar_nav_animation_speed') !=300)
                data-animation-speed="{{ config('adminlte.sidebar_nav_animation_speed') }}" @endif
                @if(!config('adminlte.sidebar_nav_accordion')) data-accordion="false" @endif>
                {{-- Configured sidebar links --}}
                {{-- @each('adminlte::partials.sidebar.menu-item', $adminlte->menu('sidebar'), 'item') --}}
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                    @if (Auth::user()->hasRole('superuser|staff'))                        
                    {{-- user --}}
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link bg-maroon">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                User
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item bg-primary">
                                <a href="{{ route('admin-user-add') }}" class="nav-link ml-3">
                                    <i class="fas fa-user-plus nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                            <li class="nav-item bg-purple">
                                <a href="{{ route('admin-user-list') }}" class="nav-link ml-3">
                                    <i class="fas fa-list nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{-- user --}}

                    {{-- category --}}
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link bg-olive">
                            <i class="nav-icon far fa-list-alt"></i>
                            <p>
                                Categories
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item bg-purple">
                                <a href="{{ route('admin-category-add') }}" class="nav-link ml-3">
                                    <i class="fas fa-plus-square nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                            <li class="nav-item bg-info">
                                <a href="{{ route('admin-category-list') }}" class="nav-link ml-3">
                                    <i class="fas fa-list nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{-- category --}}

                    {{-- blog --}}
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link bg-indigo">
                            <i class="nav-icon far fa-newspaper"></i>
                            <p>
                                Articles
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item bg-pink">
                                <a href="#" class="nav-link ml-3">
                                    <i class="fas fa-plus-square nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                            <li class="nav-item bg-lime">
                                <a href="#" class="nav-link ml-3">
                                    <i class="fas fa-list nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{-- blog --}}
                    @else
                    <li class="nav-item has-treeview menu-open">

                        <a href="#" class="nav-link bg-indigo">
                            <i class="nav-icon far fa-newspaper"></i>
                            <p>
                                Articles
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>

                        <ul class="nav nav-treeview">
                            <li class="nav-item bg-pink">
                                <a href="{{ route('reporter-add-post') }}" class="nav-link ml-3">
                                    <i class="fas fa-plus-square nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                            <li class="nav-item bg-lime">
                                <a href="#" class="nav-link ml-3">
                                    <i class="fas fa-list nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                        </ul>

                    </li>
                    @endif
                </ul>
            </ul>
        </nav>
    </div>

</aside>
