@extends('account.layouts.default')

@section('account.content')
    <div class="card">
    	<div class="card-body">
    		<form action="{{ route('account.subscription.cancel.store') }}" method="post">
    			@csrf
    			<p>Confrim your subscription cancellation.</p>
    			<button type="submit" class="btn btn-outline-danger">Cancel</button>
    		</form>
    	</div>
    </div>
@endsection