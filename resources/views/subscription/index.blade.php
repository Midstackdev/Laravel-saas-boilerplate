@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Subscription') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('subscription.store') }}" id="payment-form">
                        @csrf

                        <div class="form-group row">
                            <label for="plan" class="col-md-4 col-form-label text-md-right">{{ __('Plan') }}</label>

                            <div class="col-md-6">
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
                        </div>

                        <div class="form-group row">
                            <label for="coupon" class="col-md-4 col-form-label text-md-right">{{ __('Coupon') }}</label>

                            <div class="col-md-6">
                                <input id="coupon" type="text" class="form-control @error('coupon') is-invalid @enderror" name="coupon">

                                @error('coupon')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						
						<div class="form-group row mb-0">
						    <div class="col-md-8 offset-md-4">
                        		<button type="submit" class="btn btn-outline-info" id="pay">Pay</button>
                        	</div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
	<script src="https://checkout.stripe.com/checkout.js"></script>
	<script>
		let handler = StripeCheckout.configure({
			key: '{{ config('services.stripe.key') }}',
			locale: 'auto',
			token: function (token) {
				let form  = $('#payment-form')

				$('#pay').prop('disabled', true)

				$('<input>').attr({
					type: 'hidden',
					name: 'token',
					value: token.id
				}).appendTo(form)

				form.submit()
			}

		})

		$('#pay').click(function (e) {
			handler.open({
				name: 'Saas Ltd',
				description: 'Membership',
				currency: 'usd',
				key: '{{ config('services.stripe.key') }}',
				email: '{{ auth()->user()->email }}'
			})

			e.preventDefault()
		})
	</script>
@endsection