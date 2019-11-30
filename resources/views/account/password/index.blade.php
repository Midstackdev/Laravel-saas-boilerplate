@extends('account.layouts.default')

@section('account.content')
    <div class="card">
    	<div class="card-body">
    		<form action="{{ route('account.password.store') }}" method="post">
    			@csrf
    			<div class="form-group">
    				<label for="password_current">Current password</label>
    				<input type="password" name="password_current" id="password_current" class="form-control @error('password_current') is-invalid @enderror">

    				@error('password_current')
    				    <span class="invalid-feedback" role="alert">
    				        <strong>{{ $message }}</strong>
    				    </span>
    				@enderror
    			</div>

    			<div class="form-group">
    				<label for="password">New password</label>
    				<input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror">

    				@error('password')
    				    <span class="invalid-feedback" role="alert">
    				        <strong>{{ $message }}</strong>
    				    </span>
    				@enderror
    			</div>

                <div class="form-group">
                    <label for="password_confirmation">New password again</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror">

                    @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

    			<button type="submit" class="btn btn-outline-primary">Change password</button>

    		</form>
    	</div>
    </div>
@endsection