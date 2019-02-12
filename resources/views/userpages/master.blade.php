<!DOCTYPE html>
<html>
	<head>
		<title>أحسان</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="{{asset('users/css/bootstrap.css')}}">
		<link rel="stylesheet" href="{{asset('users/css/w3.css')}}">
		<link rel="stylesheet" href="{{asset('users/css/style.css')}}">
		<link rel="stylesheet" href="{{asset('users/css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('users/css/animate.css')}}">
		<script src="{{asset('users/html5shive.min.js')}}"></script>
		<script src="{{asset('users/js/respond.min.js')}}"></script>
	</head>
<body style="height: 1200px;">	
		<!-- navbar  -->
		<nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
			<div class="container"> 
				<a class="navbar-brand mr-5" href="/">إحسان <i class="fa fa-opera"></i></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
					aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent" style="direction: rtl">
					<ul class="navbar-nav ml-auto">
							@guest
						<li class="nav-item">
							<a href="#" class="nav-link registrationForm"><i class="fa fa-sign-in fa-lg"></i> إنشاء حساب</a>
						</li>	
						<li class="nav-item">
							 <a href="#" class="nav-link logInForm"><i class="fa fa-user-circle fa-lg"></i>  تسجيل الدخول </a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="/"><i class="fa fa-home fa-lg"></i>  الرئيسية</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#portfolio"><i class="fa fa-opera fa-lg"></i> الفصائل </a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"> الجمعيات <i class="fa fa-university"></i></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#contactUs"> إتصل بنا  <i class="fa fa-envelope fa-lg"></i></a>
						</li>
						@else

						<li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
									<li> <a href="profile/{{ Auth::user()->id }}"> الملف الشخصي </a></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            خروج
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
									</li>
									
                                </ul>
							</li>
						<li class="nav-item">
								<a class="nav-link" href="/"><i class="fa fa-home fa-lg"></i>  الرئيسية</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#portfolio"><i class="fa fa-opera fa-lg"></i> الفصائل </a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#"> الجمعيات <i class="fa fa-university"></i></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#contactUs"> إتصل بنا  <i class="fa fa-envelope fa-lg"></i></a>
							</li>
						@endguest
					</ul>
				</div>
			</div>
		</nav>
		<!-- end of navbar -->

<!-- Page Content -->
	<div class="modal logIn">
		<div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:550px">
			<div class="w3-center">
				<h2 class="p-1 font-weight-bold" style="color: cadetblue"><i class="fa fa-smile-o"></i>
				 تسجيل الدخول <i class="fa fa-smile-o"></i></h2><br>
				<img src="{{asset('users/images/logo.jpg')}}" style="max-width: 100%;height: 150px">
				<span  class="close w3-button w3-xlarge w3-transparent w3-display-topright w3-dark-gray" title="Close Modal"><i class="fa fa-close"></i></span>
			</div>
			<form class="container" method="POST" action="{{ route('login') }}">
					{{ csrf_field() }}
				<div class="input-group margin-bottom-sm">
					<input  type="text" class="form-control" placeholder=" اسم المستحدم "  name="username" required="required">
					<span class="input-group-addon"><i class="fa fa-user fa-lg"></i></span>
				</div><br>	
				<div class="input-group margin-bottom-sm">
					<input type="password" class="form-control" placeholder=" كلمة المرور"  name="password" required="reauired">
					<span class="input-group-addon"><i class="fa fa-key fa-lg"></i></span>
				</div>
				<div class="form-check w3-right">
					<label for="checked" class="w3-margin-top font-weight-bold">  حفظ كلمة المرور&nbsp; </label><input class="w3-check" id="checked" type="checkbox" checked="checked">
				</div><br><br>
				<button class="btn btn-success btn-block float-right" type="submit"><i class="fa fa-thumbs-o-up"></i> دخول </button><hr>
				<div class="w3-jumbotron" style="text-align: center;padding: 1rem 2rem;">
					<h3 class="font-weight-bold" style="color: cadetblue"> تسجيل الدخول بواسطة</h3><br>
					<div>
						<button class="btn btn-primary"><i class="fa fa-facebook-f fa-lg">
							</i>&shy; &shy; Facebook</button>
						<button class="btn btn-success"><i class="fa fa-twitter fa-lg"></i>&shy; &shy; Twitter</button>
						<button class="btn btn-danger"><i class="fa fa-google-plus fa-lg"></i>&shy; &shy; Google+</button><hr>
					</div>
				</div>
			</form>
		</div>
	</div>
				  
	<div  class="modal registration">
		<div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:550px">
			<div class="w3-center">
				<h2 class="p-1 font-weight-bold" style="color: cadetblue"><i class="fa fa-smile-o"></i>
					  إنشاء حساب جديد  <i class="fa fa-smile-o"></i></h2><br>
				
				<span  class="close w3-button w3-xlarge w3-transparent w3-display-topright w3-dark-gray" title="Close Modal"><i class="fa fa-close"></i></span>
			</div>
			<form class="container-fluid"  method="POST" action="/insert" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="step1">
					<img src="{{asset('users/images/logo.jpg')}}" style="width: 100%;height: 150px">
					<div class="row">
						<div class="col">
							<div class="input-group margin-bottom-sm">
								<input type="text" class="form-control" name="username"placeholder=" اسم المستحدم " required="required">
								<span class="input-group-addon"><i class="fa fa-user fa-lg"></i></span>
							</div>
						</div>
						<div class="col">
							<div class="input-group">
								<input type="text" class="form-control" name="name"placeholder=" الاسم " required="reauired">
								<span class="input-group-addon"><i class="fa fa-user-o fa-lg"></i></span>
							</div><br>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="input-group margin-bottom-sm">
								<input type="password" class="form-control" name="password_confirmation" placeholder="تأكيد  كلمة المرور " required="reauired">
								<span class="input-group-addon"><i class="fa fa-key fa-lg"></i></span>
							</div><br>
						</div>
						<div class="col">
							<div class="input-group margin-bottom-sm">
								<input type="password" class="form-control" name="password" placeholder="  كلمة المرور " required="reauired">
								<span class="input-group-addon"><i class="fa fa-key fa-lg"></i></span>
							</div><br>
						</div>
					</div>
					<div class="input-group margin-bottom-sm">
						<input type="email" class="form-control" name="email"placeholder=" الإيميل " required="reauired">
						<span class="input-group-addon"><i class="fa fa-envelope-o fa-lg"></i></span>
					</div><br>
					<div class="input-group margin-bottom-sm">
						<input type="number" class="form-control" name="phone"placeholder=" رقم التليفون" required="reauired">
						<span class="input-group-addon"><i class="fa fa-phone fa-lg"></i></span>
					</div><br>
					<button  class="btn btn-success d-right next"> <i class="fa fa-arrow-circle-left"></i> التالي</button><br><br>
				</div>

				<div class="step2" style="display:none;">
					<br>
					<br>
					<div class="input-group margin-bottom-sm">
						<select class="form-control"  name="city" style="direction: rtl">
						
							<option selected="true" disabled="disabled">اختر الدوله</option>
							<option value="Asyut">Asyut</option>
							<option value="Mina">Mina</option>
							<option value="Sohag">Sohag</option>
							<option value="Quna">Quna</option>
							<option value="Louxor">Louxor</option>
							<option value="Gizza">Gizza</option>
							<option value="Benswif">Benswif</option>
						</select>
						<span class="input-group-addon"><i class="fa fa-home fa-lg"></i></span>
					</div><br>



					<div class="input-group margin-bottom-sm">
						<select class="form-control"  name="blood_type" style="direction: rtl">
							<option selected="true" disabled="disabled">فصيلة الدم</option>
							<option value="A+">A+</option>
							<option value="A-">A-</option>
							<option value="B+">B+</option>
							<option value="B-">B-</option>
							<option value="AB-">AB-</option>
							<option value="AB+">AB+</option>
							<option value="O+">O+</option>
							<option value="O-">O-</option>
						</select>
						<span class="input-group-addon"><i class="fa fa-tint fa-lg"></i></span>
					</div><br>
					<div class="input-group margin-bottom-sm">
						<div class="form-group">
							<div class="row">
								<div class="col-sm-6">
									<div class="show-img">
										<img  name='img' id='img-upload'/>
                                    </div>
                                </div>
                                <div class="col-sm-6">
									<div class="input-group">
										<span class="input-group-btn">
											<input type="text" class="form-control" readonly>
											<span class="btn btn-danger btn-file">
												اختار صورة <input type="file"  name="img" id="input-img">
											</span>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div><br>
					<div class="input-group margin-bottom-sm">
						<input type="date" class="form-control" name="birthdate"required="reauired">
						<span class="input-group-addon"><i class='fa fa-birthday-cake'></i></span>
					</div><br>
					<div class="input-group margin-bottom-sm d-flex flex-row-reverse">
						<span class="input-group-addon"><i class="fa fa-user fa-lg"></i></span>
						<div class="form-check mr-4">
							<label class="form-check-label">
									
										<input type="radio" class="form-check-input" value="male" name="gender"> ذكر 
								
							</label>
						</div>
						<div class="form-check mr-4">
							<label class="form-check-label">
								<input type="radio" class="form-check-input" value="female" name="gender"> انثي
							</label>
						</div>
					</div>
					<button class="btn btn-primary back"> <i class="fa fa-arrow-circle-right"></i> السابق </button><br><br>
					<button class="btn btn-success btn-block float-right" type="submit"><i class="fa fa-thumbs-o-up"></i> دخول </button><hr><br>
				</div>
			</form>
		</div>
	</div>
	
@yield('content')


	<!-- footer -->
	<div class="footer bg-dark p-2 text-center">
		<h5 class="font-weight-bold">Copy Right &copy; EHSAAN Team</h5>
	</div>
	<!-- end of footer -->
<script src="{{asset('users/js/popper.min.js')}}"></script>
<script src="{{asset('users/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('users/js/bootstrap.min.js')}}"></script>
<script src="{{asset('users/js/easing.min.js')}}"></script>
<script src="{{asset('users/js/wow.min.js')}}"></script>
<script>new WOW().init();</script>
<script src="{{asset('users/js/file.js')}}"></script>
<script src="{{asset('users/main.js')}}"></script>
</body>
</html>









