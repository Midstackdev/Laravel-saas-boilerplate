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