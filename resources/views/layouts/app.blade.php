@extends('layouts.master')

{{-- Style inport --}}
@push('css')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endpush
{{-- End Style inport --}}

{{-- Body Handle --}}
@section('body')
    <!-- fixed-top-->
    @include('layouts._partials.header')

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
        
        {{-- Partial Menu --}}
        @include('layouts._partials.menu')
        {{-- End Partial Menu --}}
    </div>

    <div class="app-content content">
        @yield('content')
    </div>
        
@endsection
{{-- End Body Handle --}}