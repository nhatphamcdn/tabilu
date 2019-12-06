@extends('layouts.app')

{{-- Set Meta Title --}}
@section('metaTitle', 'Products')
{{-- End Set Meta Title --}}

{{-- Body Content --}}
@section('content')
<div class="content-wrapper">
    {{ __('Hello Products.') }}

    <a href="{{ route('admin.products.create') }}">{{ __('Create product') }}</a>
    <!-- <div class="content-wrapper-before"></div>
    <div class="content-header row"></div> -->
</div>
@endsection
{{-- End Body Content --}}