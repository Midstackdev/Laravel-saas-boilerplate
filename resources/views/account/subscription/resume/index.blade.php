@extends('account.layouts.default')

@section('account.content')
    <div class="card">
    	<div class="card-body">
    		<form action="{{ route('account.subscription.resume.store') }}" method="post">
    			@csrf
    			<p>Confrim to resume your subscription.</p>
    			<button type="submit" class="btn btn-outline-primary">Resune</button>
    		</form>
    	</div>
    </div>
@endsection