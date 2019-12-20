@extends('layouts.app')

{{-- Set Meta Title --}}
@section('metaTitle', 'Create Product')
{{-- End Set Meta Title --}}

{{-- Body Content --}}
@section('content')
<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">{{ __('Add new a product') }}</h3>
        </div>
    </div>

    <div class="content-body pt-3">
        @include('products._partials.notify')

        <section class="textarea-select">
            @include('products._partials.form')
        </section>
    </div>
</div>
@endsection
{{-- End Body Content --}}