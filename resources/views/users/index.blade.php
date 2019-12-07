@extends('layouts.app')

{{-- Set Meta Title --}}
@section('metaTitle', 'Users')
{{-- End Set Meta Title --}}

{{-- Body Content --}}
@section('content')
<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">{{ __('Users') }}</h3>
        </div>
    </div>
</div>
@endsection
{{-- End Body Content --}}