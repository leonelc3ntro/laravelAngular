<html lang="en">
<head>
	<title>Laravel 5.2</title>
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<!-- Angular JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.2/angular.min.js"></script>  
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.2/angular-route.min.js"></script>
	<!-- MY App -->
	<script src="{{ asset('/app/packages/dirPagination.js') }}"></script>
	<script src="{{ asset('/app/route.js') }}"></script>
	<script src="{{ asset('/app/services/myServices.js') }}"></script>
	<script src="{{ asset('/app/helper/myHelper.js') }}"></script>
	<!-- App Controller -->
	<script src="{{ asset('/app/controllers/ItemController.js') }}"></script>
	<style>
		.modal-backdrop {
			z-index: 0;
		}
	</style>
</head>
<body ng-app="main-App">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Laravel 5.2</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
				
					@if (Route::has('login'))
		                <div class="top-right links">
		                    @if (Auth::check())
		                        <li><a href="{{ url('/home') }}">Home</a></li>
		                    @else
								<li><a href="#/items">Item</a></li>
		                        <li><a href="{{ url('/login') }}">Login</a></li>
		                        <li><a href="{{ url('/register') }}">Register</a></li>
		                    @endif
		                </div>
		            @endif

				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<ng-view></ng-view>
	</div>
</body>
</html>