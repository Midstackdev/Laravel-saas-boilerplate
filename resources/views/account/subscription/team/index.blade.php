@extends('account.layouts.default')

@section('account.content')
	<div class="card">
		<div class="card-body">
    		<form action="{{ route('account.subscription.team.update') }}" method="post">
    			@csrf
    			@method('patch')
    			<div class="form-group">
    				<label for="name">Team name</label>
    				<input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $team->name )}}">

    				@error('name')
    				    <span class="invalid-feedback" role="alert">
    				        <strong>{{ $message }}</strong>
    				    </span>
    				@enderror
    			</div>

    			<button type="submit" class="btn btn-outline-primary">Update</button>

    		</form>
    	</div>
    </div>
@endsection