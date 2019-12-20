@if (session('success'))
    @component('components.alert', ['status' => 'success'])
        {{ session('success') }}
    @endcomponent
@endif

@if (session('fails'))
    @component('components.alert', ['status' => 'danger'])
        {{ session('fails') }}
    @endcomponent
@endif
