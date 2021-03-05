<header>
	<div class="container-fluid position-relative no-side-padding">
		    <nav class="navbar navbar-expand-lg ">
                 <a class="navbar-brand navbar logo" href="#"><img src="{{ asset('assets/frontend/images/bust-logo-1 (2).png')}}"alt="Knowledge Bank"></a>
                   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                   </button>

                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
					 
						<ul class="navbar-nav mr-auto main-menu  visible-on-click" id="main-menu">
									
							<li class="nav-item active"><a href="{{route('home')}}">Home</a></li>
							<!-- <li class="nav-item"><a href="#">Categories</a></li> -->
							<li class="nav-item"><a href="{{ route('post.index') }}">posts</a></li>
							
							@guest
								<li><a href="{{ route('login') }}">Login</a></li>
								<li><a href="{{ route('register') }}">Register</a></li>
							@else
								@if(Auth::user()->role->id == 1)
									<li><a href="{{ route('admin.dashboard') }}">Profile</a></li>
								@endif
								@if(Auth::user()->role->id == 2)
									<li><a href="{{ route('author.dashboard') }}">Profile</a></li>
								@endif
							@endguest
							
						</ul>
						<form class="src-area" method="GET" action="{{ route('search') }}">
							<button class="src-btn" type="submit"><i class="ion-ios-search-strong"></i></button>
							<input class="src-input" value="{{ isset($query) ? $query : '' }}" name="query" type="text" placeholder="Type of search">
				        </form>
			
	              </div>
	           </nav>

		</div>
</header>