@extends('account.layouts.default')

@section('account.content')
    <div class="card">
    	<div class="card-body">
    		<form action="{{ route('account.subscription.card.store') }}" method="post" id="card-form">
    			@csrf
    			<p>Your new card will be used for future payments.</p>
    			<button type="submit" class="btn btn-outline-secondary" id="update">Update card</button>
    		</form>
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
				let form  = $('#card-form')

				$('#update').prop('disabled', true)

				$('<input>').attr({
					type: 'hidden',
					name: 'token',
					value: token.id
				}).appendTo(form)

				form.submit()
			}

		})

		$('#update').click(function (e) {
			handler.open({
				name: 'Saas Ltd',
				panelLabel: 'Update card',
				currency: 'usd',
				key: '{{ config('services.stripe.key') }}',
				email: '{{ auth()->user()->email }}'
			})

			e.preventDefault()
		})
	</script>
@endsection