@extends('userpages.master')

@section('content')

	<!-- slider -->
	<div id="demo" class="carousel slide" data-ride="carousel">

			<!-- Indicators -->
			<ul class="carousel-indicators">
			  <li data-target="#demo" data-slide-to="0" class="active"></li>
			  <li data-target="#demo" data-slide-to="1"></li>
			  <li data-target="#demo" data-slide-to="2"></li>
			</ul>
			
			<!-- The slideshow -->
			<div class="carousel-inner">
			  <div class="carousel-item active">
				<img src="{{asset('users/images/banner1.jpg')}}">
			  </div>
			  <div class="carousel-item">
				<img src="{{asset('users/images/banner2.jpg')}}">
			  </div>
			  <div class="carousel-item">
				<img src="{{asset('users/images/2.jpg')}}">
			  </div>
			</div>
			
			<!-- Left and right controls -->
			<a class="carousel-control-prev" href="#demo" data-slide="prev">
			  <span class="carousel-control-prev-icon"></span>
			</a>
			<a class="carousel-control-next" href="#demo" data-slide="next">
			  <span class="carousel-control-next-icon"></span>
			</a>
		  </div>
		<!-- end of slider -->



<!-- start section portfolio -->			

<section id="portfolio">
	<div class="container wow fadeInUp ">
		<div class="section-header">
		<h3 class="text-center font-weight-bold section-title"> جميع الفصائل </h3>
		<h5 class="text-center font-weight-bold p-3">( وما جزاء الإحسان إلا الإحسان )</h5><br>
		</div>
		<div class="row">

		<div class="col-lg-12">
			<ul id="portfolio-flters">
			<li data-filter=".filter-O-Plus, filter-O-Negative, .filter-A-Plus, .filter-A-Negative, .filter-B-Plus, .filter-B-Negative, .filter-AB-Plus,.filter-AB-Negative font-weight-bold"  class="filter-active ml-auto"> كل الفصائل</li>
			<li data-filter=".filter-O-Plus">O+</li>
			<li data-filter=".filter-O-Negative">O-</li>
			<li data-filter=".filter-A-Plus">A+</li>
			<li data-filter=".filter-A-Negative">A-</li>
			<li data-filter=".filter-B-Plus">B+</li>
			<li data-filter=".filter-B-Negative">B-</li>
			<li data-filter=".filter-AB-Plus">AB+</li>
			<li data-filter=".filter-AB-Negative">AB-</li>
			</ul>
		</div>
		</div>

	<!--  Start  portfolio-wrapper -->
	<div class="row" id="portfolio-wrapper">


	@foreach ($users as $user)
	@if ($user->blood_type=="O+")  	
		<div class="col-lg-3 col-md-6 portfolio-item filter-O-Plus">
			<div class="portfolio-wrap">
				<div class="card">
				<h3 class="card-header mt-0 text-center">&shy; {{$user->name}}</h3>						
					<div class="card-body">
						<ul class="list-unstyled">
								{{-- "img/{{$post->image_name}}" --}}
							<li><img src="users/usersimgages/{{$user->img}}"  width="100%" height="200px"></li>
						</ul> 
						<ul class="list-unstyled text-right" style="direction: ltr">
							<li>&shy; {{$user->city}} &shy; <i class="fa fa-home fa-lg mt-1"></i></li>
							<li>&shy;  {{$user->blood_type}} فصيلة الدم&shy; <i class="fa fa-opera fa-lg mt-1"></i> </li>
						</ul>
					</div>
					<div class="portfolio-info">
						<h4>App 1</h4>
						<p>يمكنك رؤية الملف الشخصي وكذلك يمكنك الإتصال به</p>
						<div>
							<a href="profile/{{$user->id}}" target="_blank" data-lightbox="portfolio" data-title="App 1" class="link-preview" title=" الملف الشخصي"><i class="fa fa-user-circle"></i></a>
							<a href="#" class="link-details" title="إتصال"><i class="fa fa-comments"></i></a>
						</div>
					</div>		
				</div>
			
			</div>	
		</div>
	@endif
	@endforeach



	@foreach ($users as $user)
	@if ($user->blood_type=="O-")  	
		<div class="col-lg-3 col-md-6 portfolio-item filter-O-Negative">
			<div class="portfolio-wrap">
				<div class="card">
				<h3 class="card-header mt-0 text-center">&shy; {{$user->name}}</h3>						
					<div class="card-body">
						<ul class="list-unstyled">
							<li><img src="users/usersimgages/{{$user->img}}"  width="100%" height="200px"></li>
						</ul> 
						<ul class="list-unstyled text-right" style="direction: ltr">
							<li>&shy; {{$user->city}} &shy; <i class="fa fa-home fa-lg mt-1"></i></li>
							<li>&shy;  {{$user->blood_type}} فصيلة الدم&shy; <i class="fa fa-opera fa-lg mt-1"></i> </li>
						</ul>
					</div>
					<div class="portfolio-info">
						<h4>App 1</h4>
						<p>يمكنك رؤية الملف الشخصي وكذلك يمكنك الإتصال به</p>
						<div>
							<a href="profile/{{$user->id}}" target="_blank" data-lightbox="portfolio" data-title="App 1" class="link-preview" title=" الملف الشخصي"><i class="fa fa-user-circle"></i></a>
							<a href="#" class="link-details" title="إتصال"><i class="fa fa-comments"></i></a>
						</div>
					</div>		
				</div>
			
			</div>	
		</div>
	@endif
	@endforeach



	@foreach ($users as $user)
	@if ($user->blood_type=="A+")  	
		<div class="col-lg-3 col-md-6 portfolio-item filter-A-Plus">
			<div class="portfolio-wrap">
				<div class="card">
				<h3 class="card-header mt-0 text-center">&shy; {{$user->name}}</h3>						
					<div class="card-body">
						<ul class="list-unstyled">
							<li><img src="users/usersimgages/{{$user->img}}" width="100%" height="200px"></li>
						</ul> 
						<ul class="list-unstyled text-right" style="direction: ltr">
							<li>&shy; {{$user->city}} &shy; <i class="fa fa-home fa-lg mt-1"></i></li>
							<li>&shy;  {{$user->blood_type}} فصيلة الدم&shy; <i class="fa fa-opera fa-lg mt-1"></i> </li>
						</ul>
					</div>
					<div class="portfolio-info">
						<h4>App 1</h4>
						<p>يمكنك رؤية الملف الشخصي وكذلك يمكنك الإتصال به</p>
						<div>
							<a href="profile/{{$user->id}}" target="_blank" data-lightbox="portfolio" data-title="App 1" class="link-preview" title=" الملف الشخصي"><i class="fa fa-user-circle"></i></a>
							<a href="#" class="link-details" title="إتصال"><i class="fa fa-comments"></i></a>
						</div>
					</div>		
				</div>
			
			</div>	
		</div>
	@endif
	@endforeach




	@foreach ($users as $user)
	@if ($user->blood_type=="A-")  	
		<div class="col-lg-3 col-md-6 portfolio-item filter-A-Negative">
			<div class="portfolio-wrap">
				<div class="card">
				<h3 class="card-header mt-0 text-center">&shy; {{$user->name}}</h3>						
					<div class="card-body">
						<ul class="list-unstyled">
							<li><img src="users/usersimgages/{{$user->img}}"  width="100%" height="200px"></li>
						</ul> 
						<ul class="list-unstyled text-right" style="direction: ltr">
							<li>&shy; {{$user->city}} &shy; <i class="fa fa-home fa-lg mt-1"></i></li>
							<li>&shy;  {{$user->blood_type}} فصيلة الدم&shy; <i class="fa fa-opera fa-lg mt-1"></i> </li>
						</ul>
					</div>
					<div class="portfolio-info">
						<h4>App 1</h4>
						<p>يمكنك رؤية الملف الشخصي وكذلك يمكنك الإتصال به</p>
						<div>
							<a href="profile/{{$user->id}}" target="_blank" data-lightbox="portfolio" data-title="App 1" class="link-preview" title=" الملف الشخصي"><i class="fa fa-user-circle"></i></a>
							<a href="#" class="link-details" title="إتصال"><i class="fa fa-comments"></i></a>
						</div>
					</div>		
				</div>
			
			</div>	
		</div>
	@endif
	@endforeach



	@foreach ($users as $user)
	@if ($user->blood_type=="B+")  	
		<div class="col-lg-3 col-md-6 portfolio-item filter-B-Plus">
			<div class="portfolio-wrap">
				<div class="card">
				<h3 class="card-header mt-0 text-center">&shy; {{$user->name}}</h3>						
					<div class="card-body">
						<ul class="list-unstyled">
							<li><img src="users/usersimgages/{{$user->img}}" width="100%" height="200px"></li>
						</ul> 
						<ul class="list-unstyled text-right" style="direction: ltr">
							<li>&shy; {{$user->city}} &shy; <i class="fa fa-home fa-lg mt-1"></i></li>
							<li>&shy;  {{$user->blood_type}} فصيلة الدم&shy; <i class="fa fa-opera fa-lg mt-1"></i> </li>
						</ul>
					</div>
					<div class="portfolio-info">
						<h4>App 1</h4>
						<p>يمكنك رؤية الملف الشخصي وكذلك يمكنك الإتصال به</p>
						<div>
							<a href="profile/{{$user->id}}" target="_blank" data-lightbox="portfolio" data-title="App 1" class="link-preview" title=" الملف الشخصي"><i class="fa fa-user-circle"></i></a>
							<a href="#" class="link-details" title="إتصال"><i class="fa fa-comments"></i></a>
						</div>
					</div>		
				</div>
			
			</div>	
		</div>
	@endif
	@endforeach


	@foreach ($users as $user)
	@if ($user->blood_type=="B-")  	
		<div class="col-lg-3 col-md-6 portfolio-item filter-B-Negative">
			<div class="portfolio-wrap">
				<div class="card">
				<h3 class="card-header mt-0 text-center">&shy; {{$user->name}}</h3>						
					<div class="card-body">
						<ul class="list-unstyled">
							<li><img src="users/usersimgages/{{$user->img}}" width="100%" height="200px"></li>
						</ul> 
						<ul class="list-unstyled text-right" style="direction: ltr">
							<li>&shy; {{$user->city}} &shy; <i class="fa fa-home fa-lg mt-1"></i></li>
							<li>&shy;  {{$user->blood_type}} فصيلة الدم&shy; <i class="fa fa-opera fa-lg mt-1"></i> </li>
						</ul>
					</div>
					<div class="portfolio-info">
						<h4>App 1</h4>
						<p>يمكنك رؤية الملف الشخصي وكذلك يمكنك الإتصال به</p>
						<div>
							<a href="profile/{{$user->id}}" target="_blank" data-lightbox="portfolio" data-title="App 1" class="link-preview" title=" الملف الشخصي"><i class="fa fa-user-circle"></i></a>
							<a href="#" class="link-details" title="إتصال"><i class="fa fa-comments"></i></a>
						</div>
					</div>		
				</div>
			
			</div>	
		</div>
	@endif
	@endforeach



	@foreach ($users as $user)
	@if ($user->blood_type=="AB+")  	
		<div class="col-lg-3 col-md-6 portfolio-item filter-AB-Plus">
			<div class="portfolio-wrap">
				<div class="card">
				<h3 class="card-header mt-0 text-center">&shy; {{$user->name}}</h3>						
					<div class="card-body">
						<ul class="list-unstyled">
							<li><img src="users/usersimgages/{{$user->img}}"  width="100%" height="200px"></li>
						</ul> 
						<ul class="list-unstyled text-right" style="direction: ltr">
							<li>&shy; {{$user->city}} &shy; <i class="fa fa-home fa-lg mt-1"></i></li>
							<li>&shy;  {{$user->blood_type}} فصيلة الدم&shy; <i class="fa fa-opera fa-lg mt-1"></i> </li>
						</ul>
					</div>
					<div class="portfolio-info">
						<h4>App 1</h4>
						<p>يمكنك رؤية الملف الشخصي وكذلك يمكنك الإتصال به</p>
						<div>
							<a href="profile/{{$user->id}}" target="_blank" data-lightbox="portfolio" data-title="App 1" class="link-preview" title=" الملف الشخصي"><i class="fa fa-user-circle"></i></a>
							<a href="#" class="link-details" title="إتصال"><i class="fa fa-comments"></i></a>
						</div>
					</div>		
				</div>
			
			</div>	
		</div>
	@endif
	@endforeach



	@foreach ($users as $user)
	@if ($user->blood_type=="AB-")  	
		<div class="col-lg-3 col-md-6 portfolio-item filter-AB-Negative">
			<div class="portfolio-wrap">
				<div class="card">
				<h3 class="card-header mt-0 text-center">&shy; {{$user->name}}</h3>						
					<div class="card-body">
						<ul class="list-unstyled">
							<li><img src="users/usersimgages/{{$user->img}}" width="100%" height="200px"></li>
						</ul> 
						<ul class="list-unstyled text-right" style="direction: ltr">
							<li>&shy; {{$user->city}} &shy; <i class="fa fa-home fa-lg mt-1"></i></li>
							<li>&shy;  {{$user->blood_type}} فصيلة الدم&shy; <i class="fa fa-opera fa-lg mt-1"></i> </li>
						</ul>
					</div>
					<div class="portfolio-info">
						<h4>App 1</h4>
						<p>يمكنك رؤية الملف الشخصي وكذلك يمكنك الإتصال به</p>
						<div>
							<a href="profile/{{$user->id}}" target="_blank" data-lightbox="portfolio" data-title="App 1" class="link-preview" title=" الملف الشخصي"><i class="fa fa-user-circle"></i></a>
							<a href="#" class="link-details" title="إتصال"><i class="fa fa-comments"></i></a>
						</div>
					</div>		
				</div>
			
			</div>	
	 	</div>	
	@endif
	@endforeach

	





	</div>  <!-- End row of portfolio card --> 
	</div>
	
</section>
<!-- end of section portfolio -->		  

<!-- section كيف تتبرع بالدم -->
<section class="box-content box-2" id="nav-story">
		<div class="container">
			<div class="row heading">
				 <div class="col-lg-12">	
										<h2 class="text-center font-weight-bold wow bounceInUp" data-wow-duration="2s"><i class="fa fa-tint"></i> برنامج المتبرعين بالدم </h2>
					<hr class="line">
								</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<ul class="timeline">
						<li class="wow bounceInUp" data-wow-duration="2s" >
							<div class="timeline-image">
								<i class="fa fa-ambulance"></i>
							</div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4> من يستطيع التبرع بالدم؟ </h4>
								</div>
								<div class="timeline-body">
									<p class="text-muted">يجب ألّا يقل وزن المتبرعين عن 110 أرطال وألّا يقل عمرهم عن 17 عامًا. في مينيسوتا، يمكن لمن بلغوا سن الـ 16 التبرع بإقرار مكتوب مقدم من أحد الوالدين أو الوصي. في موعد التبرع الخاص بك، ستكمل استبيان صحة مختصر للتأكد من أن التبرع بالدم آمن لك ولمتلقي الدم منك.</p>
								</div>
							</div>
						</li>
						<li class="timeline-inverted wow bounceInUp" data-wow-duration="2s">
							<div class="timeline-image">
								<i class="fa fa-heart-o"></i>
							</div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4>ما هو الفرق بين التبرع بالدم الكامل والتبرع الآلي (الفصادة)؟</h4>
								</div>
								<div class="timeline-body">
									<p class="text-muted">يحتوي الدم على مكونات عديدة: خلايا الدم الحمراء والصفائح الدموية وخلايا الدم البيضاء والبلازما. يتبرع المانحون عادة بحوالي 1 باينت من الدم، خلال عملية التبرع بالدم الكامل. وخلال التبرع بالصفائح الدموية أو البلازما، يتم جمع الدم ومن ثَمَّ فصل مكوناته بواسطة جهاز؛ حيث يحافظ الجهاز على الصفائح الدموية أو البلازما ويعيد الكمية المتبقية منها لك. يُحفظ دمك داخل مجموعة أنابيب معقمة أحادية الاستخدام ومعدات معقمة، حث تكون العملية آمنة تمامًا. يسمح لك هذا الإجراء بالتبرع بشكل أكبر.</p>
								</div>
							</div>
						</li>
						<li class="wow bounceInUp" data-wow-duration="2s">
							<div class="timeline-image">
								<i class="fa fa-ambulance"></i>
							</div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4>هل أستطيع التبرع إن كنت مصابًا ببرد، أو إنفلونزا، أو حمى في يوم التبرع؟</h4>
								</div>
								<div class="timeline-body">
									<p class="text-muted">يجب أن تخلو من أعراض البرد أو الإنفلونزا أو الحمى يوم التبرع.</p>
								</div>
							</div>
						</li>
						<li class="timeline-inverted wow bounceInUp" data-wow-duration="2s">
							<div class="timeline-image">
								<i class="fa fa-clock-o"></i>
							</div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4>كم الفترة التي يستغرقها التبرع؟</h4>
								</div>
								<div class="timeline-body">
									<p class="text-muted">يستغرق التبرع الكامل بالدم ما يقرب من 45 إلى 60 دقيقة.
										يستغرق التبرع بالبلازما أو الصفائح الدموية (يسمى بالفصادة أو بالتبرع الآلي) من ساعة ونصف إلى ساعتين. يوفر مركز Mayo للتبرع بالدم في روتشستر أجهزة تلفاز، وفيديوهات حسب الطلب، وإمكانية استخدام للإنترنت اللاسلكي ليستخدمها المتبرعون أثناء تبرعهم.</p>
								</div>
							</div>
						</li>
						<li class="wow bounceInUp" data-wow-duration="2s">
							<div class="timeline-image">
								<i class="fa fa-edit"></i>
							</div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4>كم مرة يمكنني التبرع؟</h4>
								</div>
								<div class="timeline-body">
									<p class="text-muted">يمكنك التبرع بالدم كاملاً كل 84 يومًا .
										يمكن لمتبرعي البلازما التبرع كل 28 يومًا متى كان ذلك ممكنًا.
										يمكن للمتبرعين بالصفائح الدموية التبرع كل ثمانية أيام وحتى 24 مرة على مدار العام.
										يمكن لمتبرعي خلايا الدم الحمراء المزدوجة التبرع كل 168 يومًا متى كان ذلك ممكنًا.</p>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>	
		</div>
</section>
	<!-- end of section كيف تتبرع بالدم -->

	<!-- our team -->
<section id="team">
			<div class="container">
				<div class="section-header">
				<h2 class="text-center"> فريق العمل</h2>
				<p class="text-center">للإستفسار عن أي معلومات تخص الموقع أو عملية التبرع </p><br>
				</div>
		
				<div class="row">
		
				<div class="col-lg-3 col-md-6 wow fadeInUp">
					<div class="member">
					<img src="{{asset('users/images/lol.jpg')}}" class="img-fluid" alt="">
					<div class="member-info">
						<div class="member-info-content">
						<h4>Ahmed Alaa</h4>
						<span>Frontend Developer</span>
						<div class="social">
							<a href=""><i class="fa fa-twitter"></i></a>
							<a href=""><i class="fa fa-facebook"></i></a>
							<a href=""><i class="fa fa-google-plus"></i></a>
							<a href=""><i class="fa fa-linkedin"></i></a>
						</div>
						</div>
					</div>
					</div>
				</div>
		
				<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
					<div class="member">
					<img src="{{asset('users/images/momen.jpg')}}" class="img-fluid" alt="">
					<div class="member-info">
						<div class="member-info-content">
						<h4>Mo'men Adel</h4>
						<span>BackEnd Developer</span>
						<div class="social">
							<a href=""><i class="fa fa-twitter"></i></a>
							<a href=""><i class="fa fa-facebook"></i></a>
							<a href=""><i class="fa fa-google-plus"></i></a>
							<a href=""><i class="fa fa-linkedin"></i></a>
						</div>
						</div>
					</div>
					</div>
				</div>
		
				<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
					<div class="member">
					<img src="{{asset('users/images/salah.jpeg')}}" class="img-fluid" alt="">
					<div class="member-info">
						<div class="member-info-content">
						<h4>Mohamed Salah</h4>
						<span>Backend Developer</span>
						<div class="social">
							<a href=""><i class="fa fa-twitter"></i></a>
							<a href=""><i class="fa fa-facebook"></i></a>
							<a href=""><i class="fa fa-google-plus"></i></a>
							<a href=""><i class="fa fa-linkedin"></i></a>
						</div>
						</div>
					</div>
					</div>
				</div>
		
				<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
					<div class="member">
					<img src="{{asset('users/images/essa.jpg')}}" class="img-fluid" alt="">
					<div class="member-info">
						<div class="member-info-content">
						<h4>Mohamed Essa</h4>
						<span>Front End Developer</span>
						<div class="social">
							<a href=""><i class="fa fa-twitter"></i></a>
							<a href=""><i class="fa fa-facebook"></i></a>
							<a href=""><i class="fa fa-google-plus"></i></a>
							<a href=""><i class="fa fa-linkedin"></i></a>
						</div>
						</div>
					</div>
					</div>
				</div>
		
				</div>
			</div>
</section>
<!-- end of our team -->

	<!-- contact us -->
	<div id="contactUs">
			<h2 class="text-center pt-5 font-weight-bold"> <i class="fa fa-thumbs-up"></i> للتواصل معنا <i class="fa fa-smile-o"></i></h2>
		<div class="container">
		<div class="row">
			<div class="col-lg-12">
					<h3 class="text-center">   يمكنك متابعتناوكذلك يمكنك الإتصال بنا </h3>
					<h4 class="text-center"><i class="fa fa-phone fa-lg"></i> +20 286 217 0891</h4><br>
					<div>
							<form class="text-center mx-auto">
									<div class="row">
											<div class="col">
												<div class="input-group wow bounceInLeft">
													<input type="email" class="form-control" name="username"placeholder=" الإيميل " required="reauired">
													<span class="input-group-addon"><i class="fa fa-envelope fa-lg"></i></span>
												</div><br>
											</div>
											<div class="col">
													<div class="input-group margin-bottom-sm wow bounceInRight">
														<input type="text" class="form-control" name="name"placeholder=" اسم المستحدم " required="required">
														<span class="input-group-addon"><i class="fa fa-user fa-lg"></i></span>
													</div>
												</div>
										</div>
									<textarea class="form-control wow bounceInDown" cols="5" rows="5" placeholder="الرسالة"></textarea><br>
									<button class="btn btn-success text-center"> <i class="fa fa-sign-out"></i> إرسال</button><br>
							</form>
						
						<div class="text-center icons">
								<a href="#"><i class="fa fa-facebook fa-lg m-3"></i></a>
								<a href="#"><i class="fa fa-youtube fa-lg mr-3"></i></a>
								<a href="#"><i class="fa fa-google-plus fa-lg mr-3"></i></a>
								<a href="#"><i class="fa fa-twitter fa-lg "></i></a>
						</div>		
					</div>
			</div>
			<div class="col-lg-6">
				
			</div>
		</div>
		</div>
	</div>
	<!-- end of contact us -->
@endsection	
		
	