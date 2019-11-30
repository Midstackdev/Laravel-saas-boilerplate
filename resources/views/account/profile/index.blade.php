@extends('account.layouts.default')

@section('account.content')
    <div class="card">
    	<div class="card-body">
    		<form action="{{ route('account.profile.store') }}" method="post">
    			@csrf
    			<div class="form-group">
    				<label for="name">Name</label>
    				<input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', auth()->user()->name )}}">

    				@error('name')
    				    <span class="invalid-feedback" role="alert">
    				        <strong>{{ $message }}</strong>
    				    </span>
    				@enderror
    			</div>

    			<div class="form-group">
    				<label for="email">Email</label>
    				<input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', auth()->user()->email )}}">

    				@error('email')
    				    <span class="invalid-feedback" role="alert">
    				        <strong>{{ $message }}</strong>
    				    </span>
    				@enderror
    			</div>

    			<button type="submit" class="btn btn-outline-primary">Save</button>

    		</form>
    	</div>
    </div>
@endsection