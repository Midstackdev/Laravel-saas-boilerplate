<nav class="nav flex-column nav-pills">
  <a class="nav-link {{ return_if(on_page('account'), 'active') }}" href="{{ route('account.index') }}">
  	Account
  </a>
  <a class="nav-link {{ return_if(on_page('*/profile'), 'active') }}" href="{{ route('account.profile.index') }}">
  	Profile
  </a>
  <a class="nav-link {{ return_if(on_page('*/password'), 'active') }}" href="{{ route('account.password.index') }}">
  	Change password
  </a>
  <a class="nav-link" href="#">
  	Disabled
  </a>
</nav>

<hr>

@subscribed()
  <nav class="nav flex-column nav-pills">
    @subscriptionnotcancelled()
      <a class="nav-link {{ return_if(on_page('account/subscription/swap'), 'active') }}" href="{{ route('account.subscription.swap.index') }}">
        Change plan
      </a>
      <a class="nav-link {{ return_if(on_page('account/subscription/cancel'), 'active') }}" href="{{ route('account.subscription.cancel.index') }}">
        Cancel subscription
      </a>
    @endsubscriptionnotcancelled
    @subscriptioncancelled()
      <a class="nav-link {{ return_if(on_page('account/subscription/resume'), 'active') }}" href="{{ route('account.subscription.resume.index') }}">
        Resume subscription 
      </a>
    @endsubscriptioncancelled
    <a class="nav-link {{ return_if(on_page('account/subscription/card'), 'active') }}" href="{{ route('account.subscription.card.index') }}">
      Update card
    </a>
  </nav>
@endsubscribed