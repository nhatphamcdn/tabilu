@extends('layouts.app')

{{-- Set Meta Title --}}
@section('metaTitle', 'Create Product')
{{-- End Set Meta Title --}}

{{-- Body Content --}}
@section('content')
<div class="content-wrapper">
    {{ __('Create Products.') }}

    @include('products._partials.form')
    <!-- <div class="content-wrapper-before"></div>
    <div class="content-header row"></div> -->
</div>
@endsection
{{-- End Body Content --}}