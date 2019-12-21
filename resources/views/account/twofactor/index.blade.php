@extends('account.layouts.default')

@section('account.content')
    <div class="card">
    	<div class="card-body">
            @if(auth()->user()->twoFactorPendingVerification())
                    <form action="{{ route('account.twofactor.verify') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="token">Verification code</label>
                            <input type="text" name="token" id="token" class="form-control @error('token') is-invalid @enderror">

                            @error('token')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-outline-primary">Verify</button>
                    </form>
            @else
        		<form action="{{ route('account.twofactor.store') }}" method="post">
        			@csrf
        			<div class="form-group">
        				<label for="dial_code">Dialling code</label>
        				<select name="dial_code" id="dial_code" class="form-control @error('dial_code') is-invalid @enderror">
                            @foreach($countries as $country)
                                <option value="{{ $country->dial_code }}">{{ $country->name }} (+{{ $country->dial_code }})</option>
                            @endforeach
                        </select>

        				@error('dial_code')
        				    <span class="invalid-feedback" role="alert">
        				        <strong>{{ $message }}</strong>
        				    </span>
        				@enderror
        			</div>

        			<div class="form-group">
        				<label for="phone_number">Phone number</label>
        				<input type="text" name="phone_number" id="phone_number" class="form-control @error('phone_number') is-invalid @enderror" value="{{ old('phone_number')}}">

        				@error('phone_number')
        				    <span class="invalid-feedback" role="alert">
        				        <strong>{{ $message }}</strong>
        				    </span>
        				@enderror
        			</div>

        			<button type="submit" class="btn btn-outline-primary">Enable</button>
        		</form>
            @endif
    	</div>
    </div>
@endsection