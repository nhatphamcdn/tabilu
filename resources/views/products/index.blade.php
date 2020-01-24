@extends('layouts.app')

{{-- Set Meta Title --}}
@section('metaTitle', 'Products')
{{-- End Set Meta Title --}}

{{-- Body Content --}}
@section('content')
<div class="content-wrapper no-scroll">
    <div class="content-header row">
        <div class="content-header-left col-md-4 col-12">
            <h3 class="content-header-title">{{ __('Products') }}</h3>
        </div>
    </div>

    <div class="content-body pt-3">
        <div class="searchs-form mb-4">
            <form action={{ route('admin.products.search', ['search_query' => request()->search_query]) }} method="get">
                <div class="row">
                    <div class="col-md-8">
                        <input class="form-control" name="search_query" id="search" type="text" placeholder="Input keyword (tags name, product name)...">
                    </div>
                    <div class="col-md-4 text-right">
                        <button class="btn btn-secondary height-44 float-left">Apply</button>
                        <a href="{{ route('admin.products.create') }}" class="btn btn-primary height-44 float-right">{{ __('Create a product') }}</a>
                    </div>
                </div>
            </form>
        </div>

        @include('products._partials.notify')

        <div class="heading-card">
            <div class="row">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-2 pr-0">
                            <strong>{{ __('Image') }}</strong>
                        </div>
                        <div class="col-md-4 pl-0">
                            <strong>{{ __('Product Name') }}</strong>
                        </div>
                        <div class="col-md-2">
                            <strong>{{ __('Base Price') }}</strong>
                        </div>
                        <div class="col-md-2">
                            <strong>{{ __('Sale Price') }}</strong>
                        </div>
                        <div class="col-md-2">
                            <strong>{{ __('Share Price') }}</strong>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 text-right">
                    <strong>{{ __('Actions') }}</strong>
                </div>
            </div>
        </div>
        <div class="scroll-body">
            @foreach($products as $product)
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-10">
                                <div class="row align-items-center">
                                    <div class="col-md-2 pr-0">
                                        <img src={{ $product->images[0]->path ?? asset('/img/commons/none-available.png') }}
                                             alt={{ $product->name }}
                                             title={{ $product->name }}
                                             class="{{ $product->images->count() ? 'w-75 height-100 image-cover' : 'max-100 h-100' }}" />
                                    </div>
                                    <div class="col-md-4 pl-0">
                                        {{ $product->name }}
                                    </div>
                                    <div class="col-md-2">
                                        {{ $product->price }}
                                    </div>
                                    <div class="col-md-2">
                                        {{ $product->sale_price }}
                                    </div>
                                    <div class="col-md-2">
                                        {{ $product->share_price }}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="actions text-right">
                                    @if(!$show || $show === 'searching')
                                        <a href={{ route('admin.products.edit', $product->id) }} class="btn btn-sm btn-primary">
                                            <i class="la la-edit"></i>
                                        </a>

                                        <form class="d-inline-block" action="{{ route('admin.products.delete', $product->id) }}" method="POST">
                                            @csrf
                                            <button class="btn btn-sm btn-danger">
                                                <i class="la la-trash-o"></i>
                                            </button>
                                        </form>
                                    @else
                                        <a title="Restore product" href={{ route('admin.products.restore', $product->id) }} class="btn btn-sm btn-primary">
                                            <i class="la la-refresh"></i>
                                        </a>

                                        <form class="d-inline-block" action="{{ route('admin.products.forceDelete', $product->id) }}" method="POST">
                                            @csrf
                                            <button class="btn btn-sm btn-danger">
                                                <i class="la la-trash-o"></i>
                                            </button>
                                        </form>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-10">
                                <span class="font-weight-bold">{{ __('Tags: ') }}</span>
                                @foreach($product->tags as $tag)
                                    <span class="badge badge-sm badge-primary">{{ $tag->name }}</span>
                                @endforeach
                            </div>
                            <div class="col-md-2 text-right">
                                <span class="font-weight-bold">{{ __('Status: ') }}</span>
                                {{ $product->status }}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            @unless($products->count())
                <span>{{ __('List empty.') }}</span>
            @endunless
        </div>

        <div class="group-pagination">
            <div class="row">
                <div class="col-md-3">
                    <a href={{ route('admin.products', ['show' => !$show  ? 'trashed' : null]) }} class="btn btn-warning">
                        {{ !$show ? __('List trashed') : ($show === 'searching' ? __('List products') : __('List available')) }}
                    </a>
                </div>
				<div class="col-md-9 d-flex justify-content-end align-items-center">
                    @if(!$show)
                        {{ $products->render() }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
{{-- End Body Content --}}
