@extends('layouts.app')

{{-- Set Meta Title --}}
@section('metaTitle', 'Dashboard')
{{-- End Set Meta Title --}}

{{-- Body Content --}}
@section('content')
<div class="content-wrapper">
    {{ __('Hello DashBoard') }}
    <!-- <div class="content-wrapper-before"></div>
    <div class="content-header row"></div> -->
</div>
@endsection
{{-- End Body Content --}}