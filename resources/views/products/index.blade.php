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

    <div class="content-body pt-3">
        @foreach($products as $product)
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-9">
                            <span class="font-weight-bold">{{ __('Ref: ') }}</span>
                            <span>{{ $product->product_ref }}</span>
                        </div>
                        <div class="col-md-3">
                            <div class="actions text-right">
                                <a href="#" class="btn btn-sm btn-primary">
                                    <i class="la la-edit"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-danger">
                                    <i class="la la-trash-o"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <span class="font-weight-bold">{{ __('Tags: ') }}</span>
                    @foreach($product->tags as $tag)
                        <span class="badge badge-sm badge-primary">{{ $tag->name }}</span>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
{{-- End Body Content --}}