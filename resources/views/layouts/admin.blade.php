<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="{{ asset('assets/admin/css/styles.css') }}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        @stack('styles')
    </head>
    <body style="font-family: cursive">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="/">{{ __('frontend.title')}}</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="{{ __('admin.search_placeholder') }}" aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-language"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ url('lang/ur') }}">Urdu</a></li>
                        <li><a class="dropdown-item" href="{{ url('lang/en') }}">English</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">{{ __('admin.settings') }}</a></li>
                        <li><a class="dropdown-item" href="#">{{ __('admin.activity_log') }}</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('admin.logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">{{ __('admin.core') }}</div>
                            <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                {{ __('admin.dashboard') }}
                            </a>
                            <a class="nav-link {{ request()->routeIs('admin.general-settings-app.index') || request()->routeIs('admin.general-settings-app.edit') ? 'active' : '' }}" href="{{ route('admin.general-settings-app.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                {{ __('admin.general_settings') }}
                            </a>

                            <a class="nav-link {{ request()->routeIs('admin.sub_campuses.index') || request()->routeIs('admin.sub_campuses.edit') ? 'active' : '' }}" href="{{ route('admin.sub_campuses.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                {{ __('campus.list') }}
                            </a>

                            <a class="nav-link {{ request()->routeIs('admin.books.index') || request()->routeIs('admin.books.edit') ? 'active' : '' }}" href="{{ route('admin.books.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                {{ __('books.books') }}
                            </a>

                            
                            <!-- Departments Section -->
                            <div class="sb-sidenav-menu-heading">{{ __('admin.departments_section') }}</div>
                            <a class="nav-link {{ request()->routeIs('admin.departments.index') ? 'active' : '' }}" href="{{ route('admin.departments.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-building"></i></div>
                                {{ __('admin.departments') }}
                            </a>
                            {{-- Founders Section --}}
                            <div class="sb-sidenav-menu-heading">{{ __('admin.founders_section') }}</div>
                            <a class="nav-link {{ request()->routeIs('admin.founders.index') ? 'active' : '' }}" href="{{ route('admin.founders.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-building"></i></div>
                                {{ __('admin.founders') }}
                            </a>

                             <!-- Services Section -->
                             <div class="sb-sidenav-menu-heading">{{ __('admin.services_section') }}</div>
                             <a class="nav-link {{ request()->routeIs('admin.services.index') ? 'active' : '' }}" href="{{ route('admin.services.index') }}">
                                 <div class="sb-nav-link-icon"><i class="fas fa-building"></i></div>
                                 {{ __('admin.services') }}
                             </a>
                            
                            <!-- Ayat of the Day Section -->
                            <div class="sb-sidenav-menu-heading">{{ __('admin.ayat_of_the_day_section') }}</div>
                            <a class="nav-link {{ request()->routeIs('admin.ayat.index') || request()->routeIs('admin.ayat.create') || request()->routeIs('admin.ayat.edit')? 'active' : '' }}" href="{{ route('admin.ayat.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-quran"></i></div>
                                {{ __('admin.ayat_of_the_day') }}
                            </a>
                            <a class="nav-link {{ request()->routeIs('admin.hadith.index') || request()->routeIs('admin.hadith.create') || request()->routeIs('admin.hadith.edit')? 'active' : '' }}" href="{{ route('admin.hadith.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-quran"></i></div>
                                {{ __('admin.hadith_of_the_day') }}
                            </a>
                            <a class="nav-link {{ request()->routeIs('admin.saying.index') || request()->routeIs('admin.saying.create') || request()->routeIs('admin.saying.edit')? 'active' : '' }}" href="{{ route('admin.saying.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-quran"></i></div>
                                {{ __('admin.saying_of_the_day') }}
                            </a>
        
                            <div class="sb-sidenav-menu-heading mb-2">{{ __('admin.interface') }}</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                {{ __('admin.news_posts') }}
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ route('admin.news.index') }}">{{ __('admin.all_posts') }}</a>
                                    <a class="nav-link" href="#">{{ __('admin.pending_posts') }}</a>
                                </nav>
                            </div>
                            
                            @php
                                $userRoutes = [
                                    'admin.students.index',
                                    'admin.teachers.index',
                                ];
                            @endphp
                            <a class="nav-link {{ in_array(Route::currentRouteName(), $userRoutes) ? 'active' : '' }}" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="{{ in_array(Route::currentRouteName(), $userRoutes) ? 'true' : 'false' }}" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                {{ __('admin.users') }}
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse {{ in_array(Route::currentRouteName(), $userRoutes) ? 'show' : '' }}" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="#">{{ __('admin.all_users') }}</a>
                                    <a class="nav-link" href="#">{{ __('admin.moderators') }}</a>
                                    <a class="nav-link {{ request()->routeIs('admin.teachers.index') ? 'active' : '' }}" href="{{ route('admin.teachers.index') }}">
                                        {{ __('admin.teachers') }}
                                    </a>
                                    <a class="nav-link {{ request()->routeIs('admin.students.index') ? 'active' : '' }}" href="{{ route('admin.students.index') }}">
                                        {{ __('admin.students') }}
                                    </a>                                                                       
                                    <a class="nav-link" href="#">{{ __('admin.normal_users') }}</a>
                                </nav>
                            </div>
                            <a class="nav-link {{ request()->routeIs('admin.picture_gallery.index') || request()->routeIs('admin.picture_gallery.create') || request()->routeIs('admin.picture_gallery.edit')? 'active' : '' }}" href="{{ route("admin.picture_gallery.index") }}" >
                                {{ __('admin.picture_gallery') }}
                            </a>
                            <a class="nav-link {{ request()->routeIs('admin.events.index') || request()->routeIs('admin.events.create') || request()->routeIs('admin.events.edit')? 'active' : '' }}" href="{{ route("admin.events.index") }}" >
                                {{ __('admin.events') }}
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer mt-4">
                        <div class="small">{{ __('admin.logged_in_as') }}</div>
                        {{ Auth::user()->name }}
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                @yield('content')
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">{{ __('admin.copyright') }} &copy; 2023</div>
                            <div>
                                <a href="#">{{ __('admin.privacy_policy') }}</a>
                                &middot;
                                <a href="#">{{ __('admin.terms_conditions') }}</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        @stack('scripts')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/admin/js/scripts.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/admin/js/datatables-simple-demo.js') }}"></script>
    </body>
</html>
