@extends('layouts.app')

@section('content')
    <div class="row">
    	<div class="col-md-3">
    		@include('account.layouts.partials._nav')
    	</div>

    	<div class="col-md-9">
    		@yield('account.content')
    	</div>
    </div>
@endsection