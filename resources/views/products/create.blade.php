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

    {{-- @include('products._partials.form') --}}
    <div class="content-body pt-5">
        <section class="textarea-select">
            <form method="post" action="{{ route('admin.products.store') }}">
                @csrf
                <div class="row match-height">
                    <!-- Start General Form -->
                    <div class="col-lg-8 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">General</h4>
                            </div>
                            <div class="card-block">
                                <div class="card-body">
                                    <div class="field-group">
                                        <h5 class="mt-2">{{ __('Name') }}</h5>
                                        <fieldset class="form-group">
                                            <input type="text"
                                                    class="form-control @error('name') is-invalid @enderror"
                                                    id="name"
                                                    name="name"
                                                    value="{{ old('name') }}"
                                                    required
                                                    autocomplete="name">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </fieldset>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="field-group">
                                                <h5 class="mt-2">{{ __('Price') }}</h5>
                                                <fieldset class="form-group">
                                                    <div class="input-group mb-2 mr-sm-2">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">VND</div>
                                                        </div>
                                                        <input type="text" 
                                                                class="form-control"
                                                                id="price"
                                                                name="{{ old('price') ?? 0 }}"
                                                                placeholder="100.000"
                                                                required
                                                                pattern="\d[0-9]{1,5}">
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="field-group">
                                                <h5 class="mt-2">{{ __('Sale Price') }}</h5>
                                                <fieldset class="form-group">
                                                    <div class="input-group mb-2 mr-sm-2">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">VND</div>
                                                        </div>
                                                        <input type="text"
                                                                class="form-control"
                                                                id="price"
                                                                name="sale_price"
                                                                value="{{ old('sale_price') ?? 0 }}"
                                                                placeholder="100.000"
                                                                pattern="\d[0-9]{0,5}">
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="field-group">
                                                <h5 class="mt-2">{{ __('Share Price') }}</h5>
                                                <fieldset class="form-group">
                                                    <div class="input-group mb-2 mr-sm-2">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">VND</div>
                                                        </div>
                                                        <input type="text"
                                                                class="form-control"
                                                                id="price"
                                                                name="share_price"
                                                                value="{{ old('share_price') ?? 0 }}"
                                                                placeholder="100.000"
                                                                pattern="\d[0-9]{0,5}">
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="field-group">
                                        <h5 class="mt-2">{{ __('Content') }}</h5>
                                        <fieldset class="form-group @error('content') is-invalid @enderror">
                                            <textarea class="form-control editor"
                                                        id="content"
                                                        name="content"
                                                        required
                                                        rows="3"></textarea>

                                            @error('content')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End General Form --}}

                    {{-- Start Setting Form --}}
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Images</h4>
                            </div>
                            <div class="card-block">
                                <div class="card-body">
                                    {{-- Body --}}
                                    
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Setting</h4>
                            </div>
                            <div class="card-block">
                                <div class="card-body">
                                    {{-- Body --}}
                                    <div class="field-group">
                                        <h5 class="mt-2">{{ __('# HashTags') }}</h5>
                                        <fieldset class="form-group">
                                            <select name="hashtag[]" id="select-hashtag" placeholder="shoe,box..."></select>
                                        </fieldset>
                                    </div>

                                    <div class="field-group">
                                        <h5 class="mt-2">{{ __('Status') }}</h5>
                                        <fieldset class="form-group">
                                            <select class="form-control" id="Status" name="status">
                                                <option value="available">{{ __('Available') }}</option>
                                                <option value="unavailable">{{ __('Unavailable') }}</option>
                                            </select>
                                        </fieldset>
                                    </div>

                                    <div class="text-right">
                                        <button class="btn btn-primary btn-lg">Save & close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End Setting Form --}}
                </div>
            </form>
        </section>
    </div>
</div>
@endsection
{{-- End Body Content --}}