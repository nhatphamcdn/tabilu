@extends('layouts.app')

{{-- Set Meta Title --}}
@section('metaTitle', 'Create Product')
{{-- End Set Meta Title --}}

{{-- Body Content --}}
@section('content')
<div class="content-wrapper">
    @include('products._partials.header', ['title' => 'Edit product'])

    <div class="content-body pt-3">
        @include('products._partials.notify')

        <section class="textarea-select">
            @include('products._partials.form', [
                'action'    => route('admin.products.update', $product->id),
                'product'   => $product
            ])
        </section>
    </div>
</div>
@endsection
{{-- End Body Content --}}