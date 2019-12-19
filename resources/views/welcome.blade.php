@extends('layouts.master')

{{-- @push('css')
    <link rel="stylesheet" href="{{ asset('/css/welcome.css') }}" data-instant-track>
@endpush --}}

@section('css_link', asset('/css/welcome.css'))

@section('body')
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                @endauth
            </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                <h1>
                    <strong>{{ __('TABILU') }}</strong>
                </h1>
                <span>{{__('LANDING IS COMMING SOON.')}}</span>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush