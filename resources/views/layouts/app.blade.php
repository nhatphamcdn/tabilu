@extends('layouts.master')

{{-- Style inport --}}
@push('css')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endpush
{{-- End Style inport --}}
  
@section('body')
    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="collapse navbar-collapse show h-100" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left align-items-center">
                        <li class="nav-item d-block d-md-none">
                            <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#">
                                <i class="ft-menu"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown navbar-search">
                            <form>
                                <div class="input-group search-box">
                                    <input class="form-control" id="search" type="text" placeholder="Search here...">
                                </div>
                            </form>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav float-right align-items-center">
                        <li class="nav-item d-none d-md-inline-block">
                            <a class="nav-link dropdown-user-link" href="#">
                                <span>{{ Auth::user()->name }}</span>
                                <span class="avatar avatar-online">
                                    <img src="{{ asset('/img/avatar/avatar.jpg') }}" alt="avatar">
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                                title="{{ __('Logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                <span class="btn btn-danger btn-sm">
                                    <i class="la la-power-off m-0"></i>
                                </span>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">       
                <li class="nav-item mr-auto">
                    <a class="navbar-brand" href="{{ route('admin.dashboard') }}">
                        {{-- <img class="brand-logo" alt="TaBiLu" src="theme-assets/images/logo/logo.png"/> --}}
                        <h3 class="brand-text">TaBiLu</h3>
                    </a>
                </li>
                <li class="nav-item d-md-none">
                    <a class="nav-link close-navbar">
                        <i class="ft-x"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="active">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="ft-home"></i>
                        <span class="menu-title" data-i18n="">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="ft-layers"></i>
                        <span class="menu-title">Products</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="app-content content">
        @yield('content')
    </div>
        
@endsection