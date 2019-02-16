


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Be Positive</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">

	<!-- Favicons -->
	<link href="{{asset('users/img/favicon.png')}}" rel="icon">
	<link href="{{asset('users/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700"
		  rel="stylesheet">
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'
		  integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
	<!-- Bootstrap CSS File -->
	<link href="{{asset('users/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

	<!-- Libraries CSS Files -->
	<link href="{{asset('users/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
	<link href="{{asset('users/lib/animate/animate.min.css')}}" rel="stylesheet">


	<link href="{{asset('users/lib/slick/slick.css')}}" rel="stylesheet">

	<!-- Main Stylesheet File -->
	<link href="{{asset('users/css/mainStyle.css')}}" rel="stylesheet">
	<link href="{{asset('users/css/modal.css')}}" rel="stylesheet">
	<link href="{{asset('users/css/profile.css.css')}}" rel="stylesheet">
	<link href="{{asset('users/css/dropdownNotificationAndProfile.css')}}" rel="stylesheet">

</head>

<body>

<!--==========================
Header
============================-->
<header id="header">
	<div class="container">

		<div id="logo" class="pull-left">
			<h1><a href="#hero">B+</a></h1>
		</div>

		<nav id="nav-menu-container">
			<ul class="nav-menu">

				@guest
				{{-- <li><a href="{{ route('login') }}">Login</a></li>
				<li><a href="{{ route('register') }}">Register</a></li> --}}
				<li class="menu-active"><a href="#hero">Home</a></li>
				<li><a href="#portfolio">Donors</a></li>
				<li><a href="#charities">Charities</a></li>
				<li><a href="#team">Team</a></li>
				<li><a href="#contact">Contact Us</a></li>
				<li><a href="{{ route('register') }}">Register</a></li>
				<li><a href="" data-toggle="modal" data-target="#login"> Login</a></li>
			 	@else
				<li class="menu-active"><a href="#hero">Home</a></li>
				<li><a href="#portfolio">Blood</a></li>
				<li><a href="#charities">Charities</a></li>
				<li><a href="#team">Team</a></li>
				<li><a href="#contact">Contact Us</a></li>
				<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								{{ Auth::user()->email}} 
								{{ Auth::user()->name}} 
						</a>
						<ul>
								<li>
										<a href="{{ route('logout') }}"
												onclick="event.preventDefault();
																 document.getElementById('logout-form').submit();">
												Logout
										</a>

										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
												{{ csrf_field() }}
										</form>
								</li>
						</ul>
				</li> 
				@endguest

			</ul>
		</nav><!-- #nav-menu-container -->
	</div>
</header><!-- #header -->

<!---------login modal-------------->
<div class="modal" id="login">
	<div class="modal-dialog slideDownAnimation">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<span>Login</span>
				<i class='fas fa-lock p-3'> </i>
			</div>
			<div class="modal-body">
				<form  class="modal-form" method="POST" action="{{ route('login') }}">
					{{ csrf_field() }}
					<div class="form-group {{ $errors->has('username') ? ' has-error' : '' }}">
						<label for="mail-phone">User name or Email :</label>
						<input type="text"  name="username" class="form-control" id="mail-phone">
						
						@if ($errors->has('username'))
						<span class="help-block">
								<strong>{{ $errors->first('username') }}</strong>
						</span>
		    		@endif
					</div>
					<div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
						<label for="pwd">Password:</label>
						<input type="password" name="password" class="form-control" id="pwd">
           
						@if ($errors->has('password'))
						<span class="help-block">
								<strong>{{ $errors->first('password') }}</strong>
						</span>
  
	    			@endif
					</div>
					<div class="form-group form-check d-flex  flex-wrap justify-content-between">
						<label class="form-check-label">
							<input class="form-check-input" type="checkbox"> Remember me
						</label>
						<a href="">Forget your password</a>
					</div>
					<input type="submit" class="btn submit" value="login">
				</form>
			</div>
		</div>
	</div>
</div>


@yield('content')


<!--==========================
    Footer
  ============================-->
<footer id="footer">
	<div class="footer-top">
		<div class="container">

		</div>
	</div>

	<div class="container">
		<div class="copyright">
			&copy; Copyright <strong>B+</strong>. All Rights Reserved
		</div>
		<div class="credits">
			Made with love by <a href="#">Hamo2a Team</a>
		</div>
	</div>
</footer>
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>



<!-- JavaScript Libraries -->
<script src="{{asset('users/lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('users/lib/jquery/jquery-migrate.min.js')}}"></script>
<script src="{{asset('users/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('users/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('users/lib/wow/wow.min.js')}}"></script>
<script src="{{asset('users/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('users/lib/counterup/counterup.min.js')}}"></script>
<script src="{{asset('users/lib/superfish/hoverIntent.js')}}"></script>
<script src="{{asset('users/lib/superfish/superfish.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script src="{{asset('users/lib/slick/slick.js')}}"></script>

<!-- Contact Form JavaScript File -->
<script src="{{asset('users/contactform/contactform.js')}}"></script>


<script src="{{asset('users/js/main.js')}}"></script>
<script src="{{asset('users/js/modal.js')}}"></script>
<script src="{{asset('users/js/dropdownNotificationAndProfile.js')}}"></script>
</body>

</html>
