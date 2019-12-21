@extends('account.layouts.default')

@section('account.content')
    <div class="card">
    	<div class="card-body">
    		<form action="{{ route('account.deactivate.store') }}" method="post">
    			@csrf
    			<div class="form-group">
    				<label for="name">Current password</label>
    				<input type="password" name="password_current" id="password_current" class="form-control @error('password_current') is-invalid @enderror">

    				@error('password_current')
    				    <span class="invalid-feedback" role="alert">
    				        <strong>{{ $message }}</strong>
    				    </span>
    				@enderror
    			</div>

                @subscriptionnotcancelled()
                    <p>This will also cancel your active subscription.</p>
                @endsubscriptionnotcancelled

    			<button type="submit" class="btn btn-outline-primary">Deactivate account</button>

    		</form>
    	</div>
    </div>
@endsection