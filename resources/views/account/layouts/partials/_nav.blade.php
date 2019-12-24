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
  <a class="nav-link {{ return_if(on_page('*/deactivate'), 'active') }}" href="{{ route('account.deactivate.index') }}">
  	Deactivate account
  </a>
  <a class="nav-link {{ return_if(on_page('*/twofactor'), 'active') }}" href="{{ route('account.twofactor.index') }}">
    Two factor authentication
  </a>
  <a class="nav-link {{ return_if(on_page('*/tokens'), 'active') }}" href="{{ route('account.tokens.index') }}">
    API Tokens
  </a>
</nav>

<hr>

@subscribed()
  @notpiggybacksubscription()
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
      @teamsubscription()
        <a class="nav-link {{ return_if(on_page('account/subscription/team'), 'active') }}" href="{{ route('account.subscription.team.index') }}">
          Manage team
        </a>
      @endteamsubscription
    </nav>
  @endnotpiggybacksubscription
@endsubscribed