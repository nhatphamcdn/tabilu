@extends('layouts.app')

{{-- Set Meta Title --}}
@section('metaTitle', 'Products')
{{-- End Set Meta Title --}}

{{-- Body Content --}}
@section('content')
<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-4 col-12">
            <h3 class="content-header-title">{{ __('Products') }}</h3>
        </div>
        <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
                <a href="{{ route('admin.products.create') }}" class="btn btn-primary">{{ __('Create a product') }}</a>
            </div>
        </div>
    </div>
</div>
@endsection
{{-- End Body Content --}}