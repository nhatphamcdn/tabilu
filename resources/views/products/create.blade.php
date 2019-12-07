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
            <!-- General start -->
            <div class="row match-height">
                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">General</h4>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <h5 class="mt-2">Basic Textarea</h5>
                                <fieldset class="form-group">
                                    <textarea class="form-control" id="basicTextarea" rows="3"></textarea>
                                </fieldset>

                                <h5 class="mt-2">Textarea with Placeholder</h5>
                                <fieldset class="form-group">
                                    <textarea class="form-control" id="placeTextarea" rows="3" placeholder="Simple Textarea"></textarea>
                                </fieldset>

                                <h5 class="mt-2">Textarea with Description</h5>
                                <fieldset class="form-group">
                                    <p class="text-muted">Textarea description text.</p>
                                    <textarea class="form-control" id="descTextarea" rows="3" placeholder="Textarea with description"></textarea>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Select</h4>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <h5 class="mt-2">Basic Select</h5>
                                <fieldset class="form-group">
                                    <select class="form-control" id="basicSelect">
                                        <option>Select Option</option>
                                        <option>Option 1</option>
                                    </select>
                                </fieldset>
                                <h5 class="mt-2">Custom select</h5>
                                <p>To use custom select add class<code>.custom-select</code> to select.</p>
                                <fieldset class="form-group">
                                    <select class="custom-select" id="customSelect">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </fieldset>
                                <h5 class="mt-2">Multiple select</h5>
                                <p>To use multiple select add an attribute<code> multiple="multiple"</code>.</p>
                                <fieldset class="form-group">
                                    <select class="form-control" id="countrySelect" multiple="multiple">
                                        <option selected="selected">United States</option>
                                    </select>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Textarea end -->
        </section>
    </div>
</div>
@endsection
{{-- End Body Content --}}