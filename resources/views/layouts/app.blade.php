<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite('resources/sass/app.scss')

    <!-- Custom styles for this Page-->
    @yield('custom_styles')

</head>
<body class="theme-light">
    <div class="page">
        <div class="sticky-top">
			<header class="navbar navbar-expand-md navbar-light sticky-top d-print-none">
				<div class="container-xl">
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
						<span class="navbar-toggler-icon"></span>
					</button>
					<h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
						<a href=".">
							{{ config('app.name', 'ClinicasApp') }}
						</a>
					</h1>
					<div class="navbar-nav flex-row order-md-last">

						@auth
						<div class="nav-item dropdown">
							<a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
								<span class="avatar avatar-sm" style="background-image: url(https://eu.ui-avatars.com/api/?name={{ urlencode(auth()->user()->username) }})"></span>
								<div class="d-none d-xl-block ps-2">
									{{ auth()->user()->username ?? null }}
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
								<a href="{{ route('home') }}" class="dropdown-item">{{ __('Profile') }}</a>
								<div class="dropdown-divider"></div>
								<form method="POST" action="{{ route('logout') }}">
									@csrf
									<a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); this.closest('form').submit();">
										{{ __('Log Out') }}
									</a>
								</form>
							</div>
						</div>
						@endauth

					</div>
				</div>
			</header>

         	 @include('layouts.navigation')

			</div>
			<div class="page-wrapper">

				@yield('content')

				{{-- <footer class="footer footer-transparent d-print-none">
					<div class="container-xl">
						<div class="row text-center align-items-center">
							<div class="col-12 col-lg-auto mt-3 mt-lg-0">
								<ul class="list-inline list-inline-dots mb-0">
									<li class="list-inline-item">
										&copy; {{ date('Y') }}
										<a href="{{ config('app.url') }}" class="link-secondary">{{ config('app.name') }}</a>
									</li>
									<li class="list-inline-item">
										Version 1.0.0
									</li>
								</ul>
							</div>
						</div>
					</div>
				</footer> --}}
        	</div>
      	</div>
    </div>
    <!-- Core plugin JavaScript-->
    @vite('resources/js/app.js')
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.3.min.js" /></script>

    <!-- Page level custom scripts -->
    @yield('custom_scripts')

</body>
</html>
