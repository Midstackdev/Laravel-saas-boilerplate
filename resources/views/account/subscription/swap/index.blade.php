@extends('account.layouts.default')

@section('account.content')
    <div class="card">
    	<div class="card-body">
    		<p>Current plan: {{ auth()->user()->plan->name }} (${{ auth()->user()->plan->price }})</p>

    		<form method="POST" action="{{ route('account.subscription.swap.store') }}" id="payment-form">
    		    @csrf

    		    <div class="form-group">
    		        <label for="plan">{{ __('Plan') }}</label>

		            <select id="plan" class="form-control @error('plan') is-invalid @enderror" name="plan">
		            	@foreach($plans as $plan)
		            		<option value="{{ $plan->gateway_id }}"
		            			{{ request('plan') === $plan->slug || old('plan') === $plan->gateway_id ? 'selected' : ''}}
		            			>
		            			{{ $plan->name }} (${{ $plan->price }})
		            		</option>
		            	@endforeach
		            </select>

		            @error('plan')
		                <span class="invalid-feedback" role="alert">
		                    <strong>{{ $message }}</strong>
		                </span>
		            @enderror
    		    </div>

    		    <button type="submit" class="btn btn-outline-info">Update</button>
    		</form>
    	</div>
    </div>
@endsection