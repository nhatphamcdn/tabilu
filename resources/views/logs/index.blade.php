@extends('layouts.app')

{{-- Set Meta Title --}}
@section('metaTitle', 'Logs viewer')
{{-- End Set Meta Title --}}

{{-- Body Content --}}
@section('content')
<div class="content-wrapper">
    <div class="content-body pt-2">
       <iframe src="/admin/log-viewer" frameborder="0" width="100%" style="height: calc(100vh - 4.8rem - 80px)"></iframe>
    </div>
</div>
@endsection
{{-- End Body Content --}}