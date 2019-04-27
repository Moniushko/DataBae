<nav class="navbar navbar-expand-lg navbar-light bg-light border shadow">
		<a class="navbar-brand" href="/home">
			<img src="public/img/Databae_logo.png">
	</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item dropdown">
					<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
					Browse Recipes<span class="caret"></span></a>
					<div class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="/recipes">
						All
					</a>

					<a class="dropdown-item" href="/recipes/categories">
						Categories
					</a>

					<a class="dropdown-item" href="/recipes?popular=1">
						Popular
					</a>
				</li>
			</ul>
			<form method = "GET" class="typeahead ml-auto mr-auto" action="{{ url('search') }}" role="search">
				<div class="btn-group">
					<div class="u-posRelative has-search">
					<span class="fa fa-search form-control-feedback"></span>
					<input class="form-control search-input" name="q" type="search" autocomplete="off" placeholder="Search recipes..." aria-label="Search" style="width: 500px">
					</div>
					<div class="Typeahead-menu"></div>
					<button class ="u-hidden" type="submit">blah</button>
				</div>
			</form>		
		</div>
		<!-- Sign in Button -->
		<ul class="navbar-nav ml-auto">
			<!-- Authentication Links -->
			@guest
			<div class="btn-group">
				<a class="btn btn-dark navbar-btn login-btn" href="{{ route('login') }}">{{ __('Login') }}</a>
				@if (Route::has('register'))
				<a class="btn btn-danger navbar-btn login-btn" href="{{ route('register') }}">{{ __('Register') }}</a>
				@endif
			</div>
			@else
			<a href="/uploadrecipes" class="btn btn-secondary navbar-btn login-btn mt-1" style="margin-right: 50px;height: 50%;">Upload a Recipe</a>
			<div class="dropdown dropleft">
			<a href="#" style="text-decoration: none;" class="header__userNavItem header__userNavButton header__userNavMessagesButton" tabindex="0" data-toggle="dropdown" aria-haspopup="true" role="button" aria-owns="dropdown-button-48">
         <button type="button" class="btn btn-email waves-effect waves-light">
      <i class="fas fa-envelope"></i>
    </button>
	<span class="counter">10</span>
        </a>
		<div class="dropdown-menu">
    <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false">
      <div class="toast-header">
		<img class=" rounded ml-2 mr-2" width="20" height="20" src="/storage/avatars/{{ Auth::user()->avatar }}"></img>
		<strong class="mr-auto">{{ Auth::user()->username }}</strong>
        <small class="text-muted">11 mins ago</small>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="toast-body ml-1 mb-1">
		Hello, world! This is a toast message.
      </div>
    </div>
  </div>
  </div>
			<li class="nav-item dropdown">
				<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
					<img class="rounded-circle" width="30px" height="30px" src="/storage/avatars/{{ Auth::user()->avatar }}" /> {{ Auth::user()->username }} <span class="caret"></span>
				</a>

				<div class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown">
										 @if (auth()->check())
										 <a class="dropdown-item" href="/user/{{ auth()->user()->id }}">
						Profile
					</a>
                               <a class="dropdown-item" href="/recipes/myrecipes?by={{ auth()->user()->username }}">
						My Recipes
					</a>

					<a class="dropdown-item" href="/settings">
						Settings
					</a>
				<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
						{{ __('Logout') }}
					</a>

                            @endif

					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						@csrf
					</form>
				</div>
			</li>
			@endguest
		</ul>
	</nav>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="/js/bootstrap.min.js"></script>
