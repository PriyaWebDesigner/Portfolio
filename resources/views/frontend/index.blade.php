@extends('frontend.master')

@section('content')
<section id="home-section" class="hero">
	<div class="home-slider  owl-carousel">
		<div class="slider-item ">
			<div class="overlay"></div>
			<div class="container">
				<div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end"
					data-scrollax-parent="true">
					<div class="one-third js-fullheight order-md-last img"
					style="background-image:url({{asset('backend/images/hero/'.$hero->image)}});">
					<div class="overlay"></div>
				</div>
					<div class="one-forth d-flex  align-items-center ftco-animate"
						data-scrollax=" properties: { translateY: '70%' }">
						<div class="text">
							<span class="subheading">Hello!</span>
							{{-- <h1 class="mb-4 mt-3">I'm <span>Priya Naskar</span></h1> --}}
							<h1 class="mb-4 mt-3"><span>{{$hero->title}}</span></h1>
							<h2 class="mb-4">{{$hero->sub_title}}</h2>
							<p><a href="#contact-section" class="btn btn-warning btn-outline-primary text-dark py-3 px-4">Hire
									me</a> <a href="#services-section" class="btn btn-outline-primary text-info py-3 px-4">My
									works</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		{{-- <div class="slider-item">
			<div class="overlay"></div>
			<div class="container">
				<div class="row d-flex no-gutters slider-text align-items-end justify-content-end"
					data-scrollax-parent="true">
					<div class="one-third js-fullheight order-md-last img"
						style="background-image:url({{asset('frontend/assets/image/Priya\ HD\ half\ pic\ png2\ copy.png')}});">
						<div class="overlay"></div>
					</div>
					<div class="one-third js-fullheight order-md-last img"
					style="background-image:url({{asset('backend/images/hero/'.$hero->image)}});">
					<div class="overlay"></div>
				</div>
					<div class="one-forth d-flex align-items-center ftco-animate"
						data-scrollax=" properties: { translateY: '70%' }">
						<div class="text">
							<span class="subheading">Hello!</span>
							<h1 class="mb-4 mt-3"><span>I'm a Full Stack Web Developer </span></h1>
							<p><a href="#" class="btn btn-warning btn-outline-primary text-dark py-3 px-4">Hire
									me</a> <a href="#" class="btn btn-outline-primary text-info  py-3 px-4">My
									works</a></p>
						</div>
					</div>
				</div>
			</div>
		</div> --}}
	</div>
</section>

<section class="ftco-about img ftco-section ftco-no-pb" id="about-section">
	<div class="container">
		<div class="row d-flex">
			<div class="col-md-6 col-lg-5 d-flex">
				<div class="img-about img d-flex align-items-stretch">
					<div class="overlay"></div>
					<div class="img d-flex align-self-stretch align-items-center"
						style="background-image:url({{asset('backend/images/aboutUs/'.$aboutUs->image)}});">
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-7 pl-lg-5 pb-5">
				<div class="row justify-content-start pb-3">
					<div class="col-md-12 heading-section ftco-animate">
						<h1 class="big">About</h1>
						<h2 class="mb-4">About Me</h2>
						<p>{!!$aboutUs->description!!}</p>
						<ul class="about-info mt-4 px-md-0 px-2">
							<li class="d-flex"><span>Name:</span> <span>{{$siteSettingData->name}}</span></li>
							{{-- <li class="d-flex"><span>Date of birth:</span> <span>August 07, 2002</span></li> --}}
							<li class="d-flex"><span>Address:</span> <span>{{$siteSettingData->address}}</span>
							</li>
							{{-- <li class="d-flex"><span>PIN code:</span> <span> 743502</span></li> --}}
							<li class="d-flex"><span>Email:</span> <span>{{$siteSettingData->email}}</span></li>
							<li class="d-flex"><span>Phone: </span> <span>{{$siteSettingData->phone}}</span></li>
						</ul>
					</div>
				</div>
				<!-- <div class="counter-wrap ftco-animate d-flex mt-md-3">
					<div class="text">	
						<p class="mb-4">
							<span class="number" data-number="120">0</span>
							<span>Project complete</span>
						</p>
						<p><a href="#" class="btn btn-primary py-3 px-3">Download CV</a></p>
					</div>
				</div> -->
			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-no-pb" id="education-section">
	<div class="container">
		<div class="row justify-content-center pb-5">
			<div class="col-md-10 heading-section text-center ftco-animate">
				<h1 class="big big-2">Education</h1>
				<h2 class="mb-4">Education</h2>
				<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It
					is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
			</div>
		</div>
		<div class="row">
			@foreach ($educations as $education)
			<div class="col-md-6">
				<div class="resume-wrap ftco-animate">
					<span class="date">{{$education->year}}</span>
					<h2>{{$education->title}}</h2>
					<span class="position">{{$education->institute_name}}</span>
				</div>
			</div>
			@endforeach

			{{-- <div class="col-md-6">
				<div class="resume-wrap ftco-animate">
					<span class="date">2023-2024</span>
					<h2>Full Stack Web Developer</h2>
					<span class="position">Web-Coder It Institute, Dhaka, Bangladesh</span>
				</div>
			</div> --}}
		</div>
	</div>
</section>

<!-- <section class="ftco-section ftco-no-pb" id="resume-section">
	<div class="container">
		<div class="row justify-content-center pb-5">
			<div class="col-md-10 heading-section text-center ftco-animate">
				<h1 class="big big-2">Resume</h1>
				<h2 class="mb-4">Resume</h2>
				<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It
					is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="resume-wrap ftco-animate">
					<span class="date">2014-2015</span>
					<h2>Master Degree of Design</h2>
					<span class="position">Cambridge University</span>
					<p class="mt-4">A small river named Duden flows by their place and supplies it with the
						necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly
						into your mouth.</p>
				</div>
				<div class="resume-wrap ftco-animate">
					<span class="date">2014-2015</span>
					<h2>Bachelor's Degree of C.A</h2>
					<span class="position">Cambridge University</span>
					<p class="mt-4">A small river named Duden flows by their place and supplies it with the
						necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly
						into your mouth.</p>
				</div>
				<div class="resume-wrap ftco-animate">
					<span class="date">2014-2015</span>
					<h2>Diploma in Computer</h2>
					<span class="position">Cambridge University</span>
					<p class="mt-4">A small river named Duden flows by their place and supplies it with the
						necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly
						into your mouth.</p>
				</div>
			</div>

			<div class="col-md-6">
				<div class="resume-wrap ftco-animate">
					<span class="date">2014-2015</span>
					<h2>Art &amp; Creative Director</h2>
					<span class="position">Cambridge University</span>
					<p class="mt-4">A small river named Duden flows by their place and supplies it with the
						necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly
						into your mouth.</p>
				</div>
				<div class="resume-wrap ftco-animate">
					<span class="date">2014-2015</span>
					<h2>Wordpress Developer</h2>
					<span class="position">Cambridge University</span>
					<p class="mt-4">A small river named Duden flows by their place and supplies it with the
						necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly
						into your mouth.</p>
				</div>
				<div class="resume-wrap ftco-animate">
					<span class="date">2017-2018</span>
					<h2>UI/UX Designer</h2>
					<span class="position">Cambridge University</span>
					<p class="mt-4">A small river named Duden flows by their place and supplies it with the
						necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly
						into your mouth.</p>
				</div>
			</div>
		</div>
		<div class="row justify-content-center mt-5">
			<div class="col-md-6 text-center ftco-animate">
				<p><a href="#" class="btn btn-primary py-4 px-5">Download CV</a></p>
			</div>
		</div>
	</div>
</section> -->



<section class="ftco-section" id="services-section">
	<div class="container">
		<div class="row justify-content-center py-5 mt-5">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<h1 class="big big-2">Services</h1>
				<h2 class="mb-4">Services</h2>
				<!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p> -->
			</div>
		</div>
		<div class="row">
			@foreach ($services as $service)
			<div class="col-md-4 text-center d-flex ftco-animate">
				<a href="#" class="services-1">
					<span class="icon">
						<img class="flaticon-analysis" src="{{asset('backend/images/service/'.$service->image)}}" height="100" width="100">
						{{-- <i class="flaticon-analysis"></i> --}}
					</span>
					<div class="desc">
						<h3 class="mb-5">{{$service->service_name}}</h3>
						<p></p>
						<p>{!!$service->description!!}</p>
					</div>
				</a>
			</div>
			@endforeach
		</div>
	</div>
</section>


<section class="ftco-section" id="skills-section">
	<div class="container">
		<div class="row justify-content-center pb-5">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<h1 class="big big-2">Skills</h1>
				<h2 class="mb-4">My Skills</h2>
				<!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p> -->
			</div>
		</div>
		<div class="row">
			@foreach ($skills as $skill)
			<div class="col-md-6 animate-box">
				<div class="progress-wrap ftco-animate">
					<h3>{{$skill->skill_name}}</h3>
					<div class="progress">
						<div class="progress-bar color-1" role="progressbar" aria-valuenow="90" aria-valuemin="0"
							aria-valuemax="100" style="width:90%">
							<span>{{$skill->percentage}}</span>
						</div>
					</div>
				</div>
			</div>
			@endforeach
			
			{{-- <div class="col-md-6 animate-box">
				<div class="progress-wrap ftco-animate">
					<h3>PHP</h3>
					<div class="progress">
						<div class="progress-bar color-2" role="progressbar" aria-valuenow="85" aria-valuemin="0"
							aria-valuemax="100" style="width:85%">
							<span>85%</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 animate-box">
				<div class="progress-wrap ftco-animate">
					<h3>CSS3</h3>
					<div class="progress">
						<div class="progress-bar color-3" role="progressbar" aria-valuenow="95" aria-valuemin="0"
							aria-valuemax="100" style="width:95%">
							<span>95%</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 animate-box">
				<div class="progress-wrap ftco-animate">
					<h3>Laravel</h3>
					<div class="progress">
						<div class="progress-bar color-4" role="progressbar" aria-valuenow="90" aria-valuemin="0"
							aria-valuemax="100" style="width:90%">
							<span>90%</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 animate-box">
				<div class="progress-wrap ftco-animate">
					<h3>Bootstrap</h3>
					<div class="progress">
						<div class="progress-bar color-5" role="progressbar" aria-valuenow="90" aria-valuemin="0"
							aria-valuemax="100" style="width:90%">
							<span>90%</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 animate-box">
				<div class="progress-wrap ftco-animate">
					<h3>My SQL</h3>
					<div class="progress">
						<div class="progress-bar color-6" role="progressbar" aria-valuenow="80" aria-valuemin="0"
							aria-valuemax="100" style="width:80%">
							<span>80%</span>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-6 animate-box">
				<div class="progress-wrap ftco-animate">
					<h3>Javascript</h3>
					<div class="progress">
						<div class="progress-bar color-6" role="progressbar" aria-valuenow="80" aria-valuemin="0"
							aria-valuemax="100" style="width:80%">
							<span>80%</span>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-6 animate-box">
				<div class="progress-wrap ftco-animate">
					<h3>React JS</h3>
					<div class="progress">
						<div class="progress-bar color-6" role="progressbar" aria-valuenow="85" aria-valuemin="0"
							aria-valuemax="100" style="width:85%">
							<span>85%</span>
						</div>
					</div>
				</div>
			</div> --}}
		</div>
	</div>
</section>

<section class="ftco-section" id="interest-section">
	<div class="container">
		<div class="row justify-content-center py-5 mt-5">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<h1 class="big big-2">Interest</h1>
				<h2 class="mb-4">Interest</h2>
				<!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p> -->
			</div>
		</div>
		<div class="row">
			@foreach ($interests as $interest)
			<div class="col-md-4 text-center d-flex ftco-animate">
				<a href="#" class="services-1">
					<span class="icon">
						<img  class="flaticon-analysis" src="{{asset('backend/images/interest/'.$interest->image)}}" height="100" width="100">
					</span>
					<div class="desc">
						<h3 class="mb-5">{{$interest->interest_name}}</h3>
						<p></p>
						<p>{!!$interest->description!!}</p>
					</div>
				</a>
			</div>
			@endforeach

			{{-- <div class="col-md-4 text-center d-flex ftco-animate">
				<a href="#" class="services-1">
					<span class="icon">
						<i class="flaticon-flasks"></i>
					</span>
					<div class="desc">
						<h3 class="mb-5">Artificial Intelligence</h3>
						<p></p>
						<!-- <p>Static web design refers to websites that are built using only HTML and CSS, without any
								server-side programming or database integration.</p> -->
					</div>
				</a>
			</div>
			<div class="col-md-4 text-center d-flex ftco-animate">
				<a href="#" class="services-1">
					<span class="icon">
						<i class="flaticon-ideas"></i>
					</span>
					<div class="desc">
						<h3 class="mb-5">Machine Learning</h3>
						<p></p>
						<!-- <p>Static web design refers to websites that are built using only HTML and CSS, without any
									server-side programming or database integration.</p> -->
					</div>
				</a>
			</div>

			<div class="col-md-4 text-center d-flex ftco-animate">
				<a href="#" class="services-1">
					<span class="icon">
						<i class="flaticon-ideas"></i>
					</span>
					<div class="desc">
						<h3 class="mb-5">Digital Marketing</h3>
						<p></p>
						<!-- <p>Static web design refers to websites that are built using only HTML and CSS, without any
										server-side programming or database integration.</p> -->
					</div>
				</a>
			</div>
			<div class="col-md-4 text-center d-flex ftco-animate">
				<a href="#" class="services-1">
					<span class="icon">
						<i class="flaticon-flasks"></i>
					</span>
					<div class="desc">
						<h3 class="mb-5">Deep Learning</h3>
						<p></p>
						<!-- <p>Static web design refers to websites that are built using only HTML and CSS, without any
											server-side programming or database integration.</p> -->
					</div>
				</a>
			</div>

			<div class="col-md-4 text-center d-flex ftco-animate">
				<a href="#" class="services-1">
					<span class="icon">
						<i class="flaticon-analysis"></i>
					</span>
					<div class="desc">
						<h3 class="mb-5">Blockchain Tecnology</h3>
						<p></p>
						<!-- <p>Static web design refers to websites that are built using only HTML and CSS, without any
											server-side programming or database integration.</p> -->
					</div>
				</a>
			</div> --}}
		</div>
	</div>
</section>

<!-- <section class="ftco-section ftco-project" id="projects-section">
	<div class="container">
		<div class="row justify-content-center pb-5">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<h1 class="big big-2">Projects</h1>
				<h2 class="mb-4">Our Projects</h2>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="project img ftco-animate d-flex justify-content-center align-items-center"
					style="background-image: url(images/project-4.jpg);">
					<div class="overlay"></div>
					<div class="text text-center p-4">
						<h3><a href="#">Branding &amp; Illustration Design</a></h3>
						<span>Web Design</span>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="project img ftco-animate d-flex justify-content-center align-items-center"
					style="background-image: url(images/project-5.jpg);">
					<div class="overlay"></div>
					<div class="text text-center p-4">
						<h3><a href="#">Branding &amp; Illustration Design</a></h3>
						<span>Web Design</span>
					</div>
				</div>
			</div>

			<div class="col-md-8">
				<div class="project img ftco-animate d-flex justify-content-center align-items-center"
					style="background-image: url(images/project-1.jpg);">
					<div class="overlay"></div>
					<div class="text text-center p-4">
						<h3><a href="#">Branding &amp; Illustration Design</a></h3>
						<span>Web Design</span>
					</div>
				</div>

				<div class="project img ftco-animate d-flex justify-content-center align-items-center"
					style="background-image: url(images/project-6.jpg);">
					<div class="overlay"></div>
					<div class="text text-center p-4">
						<h3><a href="#">Branding &amp; Illustration Design</a></h3>
						<span>Web Design</span>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="row">
					<div class="col-md-12">
						<div class="project img ftco-animate d-flex justify-content-center align-items-center"
							style="background-image: url(images/project-2.jpg);">
							<div class="overlay"></div>
							<div class="text text-center p-4">
								<h3><a href="#">Branding &amp; Illustration Design</a></h3>
								<span>Web Design</span>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="project img ftco-animate d-flex justify-content-center align-items-center"
							style="background-image: url(images/project-3.jpg);">
							<div class="overlay"></div>
							<div class="text text-center p-4">
								<h3><a href="#">Branding &amp; Illustration Design</a></h3>
								<span>Web Design</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->


<!-- <section class="ftco-section" id="blog-section">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-5">
			<div class="col-md-7 heading-section text-center ftco-animate">
				<h1 class="big big-2">Blog</h1>
				<h2 class="mb-4">Our Blog</h2>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
			</div>
		</div>
		<div class="row d-flex">
			<div class="col-md-4 d-flex ftco-animate">
				<div class="blog-entry justify-content-end">
					<a href="single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
					</a>
					<div class="text mt-3 float-right d-block">
						<div class="d-flex align-items-center mb-3 meta">
							<p class="mb-0">
								<span class="mr-2">June 21, 2019</span>
								<a href="#" class="mr-2">Admin</a>
								<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
							</p>
						</div>
						<h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a>
						</h3>
						<p>A small river named Duden flows by their place and supplies it with the necessary
							regelialia.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 d-flex ftco-animate">
				<div class="blog-entry justify-content-end">
					<a href="single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
					</a>
					<div class="text mt-3 float-right d-block">
						<div class="d-flex align-items-center mb-3 meta">
							<p class="mb-0">
								<span class="mr-2">June 21, 2019</span>
								<a href="#" class="mr-2">Admin</a>
								<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
							</p>
						</div>
						<h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a>
						</h3>
						<p>A small river named Duden flows by their place and supplies it with the necessary
							regelialia.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 d-flex ftco-animate">
				<div class="blog-entry">
					<a href="single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
					</a>
					<div class="text mt-3 float-right d-block">
						<div class="d-flex align-items-center mb-3 meta">
							<p class="mb-0">
								<span class="mr-2">June 21, 2019</span>
								<a href="#" class="mr-2">Admin</a>
								<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
							</p>
						</div>
						<h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a>
						</h3>
						<p>A small river named Duden flows by their place and supplies it with the necessary
							regelialia.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->

<!-- <section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter">
	<div class="container">
		<div class="row d-md-flex align-items-center">
			<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
				<div class="block-18">
					<div class="text">
						<strong class="number" data-number="100">0</strong>
						<span>Awards</span>
					</div>
				</div>
			</div>
			<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
				<div class="block-18">
					<div class="text">
						<strong class="number" data-number="1200">0</strong>
						<span>Complete Projects</span>
					</div>
				</div>
			</div>
			<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
				<div class="block-18">
					<div class="text">
						<strong class="number" data-number="1200">0</strong>
						<span>Happy Customers</span>
					</div>
				</div>
			</div>
			<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
				<div class="block-18">
					<div class="text">
						<strong class="number" data-number="500">0</strong>
						<span>Cups of coffee</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->

<section class="ftco-section ftco-hireme img margin-top" style="background-image: url({{asset('backend/images/work-interest/'.$workInterest->image)}})">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-7 ftco-animate text-center">
				<h2>{{$workInterest->title}}</h2>
				<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> -->
				<p class="mb-0"><a href="#" class="btn btn-warning btn-outline-primary text-dark py-3 px-5">Hire
						me</a></p>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<h1 class="big big-2">Contact</h1>
					<h2 class="mb-4">Contact Me</h2>
					<!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p> -->
				</div>
			</div>
	
			<div class="row d-flex contact-info mb-5">
				<div class="col-md-6 col-lg-3 d-flex ftco-animate">
					<div class="align-self-stretch box p-4 text-center">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="icon-map-signs"></span>
						</div>
						<h3 class="mb-4">Address</h3>
						{{-- <p>Kolkata Leather Complex, Kolkata, West Bengal, India</p> --}}
						<p>{{$siteSettingData->address}}</p>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex ftco-animate">
					<div class="align-self-stretch box p-4 text-center">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="icon-phone2"></span>
						</div>
						<h3 class="mb-4">Contact Number</h3>
						<p><a href="tel://1234567920">{{$siteSettingData->phone}}</a></p>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex ftco-animate">
					<div class="align-self-stretch box p-4 text-center">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="icon-paper-plane"></span>
						</div>
						<h3 class="mb-4">Email Address</h3>
						<p><a href="mailto:info@yoursite.com">{{$siteSettingData->email}}</a></p>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex ftco-animate">
					<div class="align-self-stretch box p-4 text-center">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="icon-globe"></span>
						</div>
						<h3 class="mb-4">Website</h3>
						<p><a href="#">webdeveloperpriya.com</a></p>
					</div>
				</div>
			</div>
			{{-- <form action="{{url('/admin/store/contact-message')}}" method="POST" enctype="multipart/form-data">
				@csrf	 --}}
			<div class="row no-gutters block-9">
				<div class="col-md-6 order-md-last d-flex">
					<form action="{{url('/admin/store/contact-message')}}"  method="POST" enctype="multipart/form-data" class="bg-light p-4 p-md-5 contact-form">
						@csrf
						<div class="form-group">
							<input type="text" class="form-control" name="name" value="" placeholder="Your Name" required>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="email" value="" placeholder="Your Email" required>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="subject" value="" placeholder="Subject" required>
						</div>
						<div class="form-group">
							<textarea name="message" id="" cols="30" rows="7" class="form-control"
								placeholder="Message" required></textarea>
						</div>
						<div class="form-group">
							<input type="submit" value="Send Message"
								class="btn btn-warning btn-outline-primary text-dark  py-3 px-5">
						</div>
					</form>
	
				</div>
	
				<div class="col-md-6 d-flex">
					<!-- <div class="img" style="background-image: url(image/profile.pic-1.png);"></div> -->
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3686.1547057818343!2d88.514611674755!3d22.498378035687598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a020c61d5df133f%3A0xcb9c8415b03db3df!2sKolkata%20Leather%20Complex!5e0!3m2!1sen!2sin!4v1713243019685!5m2!1sen!2sin"
						width="600" height="530" style="border: 2px solid black;" allowfullscreen="" loading="lazy"
						referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
		</div>
</section>
@endsection