@if(session('success'))
	@component('layouts.partials.alerts._alerts_component', ['type' => 'success'])
	  {{ session('success') }}
	@endcomponent
@endif

@if(session('error'))
	@component('layouts.partials.alerts._alerts_component', ['type' => 'danger'])
	  {{ session('error') }}
	@endcomponent
@endif