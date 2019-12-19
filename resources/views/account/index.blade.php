@extends('account.layouts.default')

@section('account.content')
	<div class="card">
		<div class="card-body">
    		{{ auth()->user()->plan }}
    	</div>
    </div>
@endsection