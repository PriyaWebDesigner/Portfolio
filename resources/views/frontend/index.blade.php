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
						style="background-image:url({{asset('frontend/assets/image/Priya\ HD\ half\ pic\ png2\ copy.png')}});">
						<div class="overlay"></div>
					</div>
					<div class="one-forth d-flex  align-items-center ftco-animate"
						data-scrollax=" properties: { translateY: '70%' }">
						<div class="text">
							<span class="subheading">Hello!</span>
							<h1 class="mb-4 mt-3">I'm <span>Priya Naskar</span></h1>
							<h2 class="mb-4">A Freelancer, Web Designer</h2>
							<p><a href="#" class="btn btn-warning btn-outline-primary text-dark py-3 px-4">Hire
									me</a> <a href="#" class="btn btn-outline-primary text-info py-3 px-4">My
									works</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="slider-item">
			<div class="overlay"></div>
			<div class="container">
				<div class="row d-flex no-gutters slider-text align-items-end justify-content-end"
					data-scrollax-parent="true">
					<div class="one-third js-fullheight order-md-last img"
						style="background-image:url({{asset('frontend/assets/image/Priya\ HD\ half\ pic\ png2\ copy.png')}});">
						<div class="overlay"></div>
					</div>
					<div class="one-forth d-flex align-items-center ftco-animate"
						data-scrollax=" properties: { translateY: '70%' }">
						<div class="text">
							<span class="subheading">Hello!</span>
							<h1 class="mb-4 mt-3">I'm a <span>Full Stack </span>Web Developer </h1>
							<p><a href="#" class="btn btn-warning btn-outline-primary text-dark py-3 px-4">Hire
									me</a> <a href="#" class="btn btn-outline-primary text-info  py-3 px-4">My
									works</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-about img ftco-section ftco-no-pb" id="about-section">
	<div class="container">
		<div class="row d-flex">
			<div class="col-md-6 col-lg-5 d-flex">
				<div class="img-about img d-flex align-items-stretch">
					<div class="overlay"></div>
					<div class="img d-flex align-self-stretch align-items-center"
						style="background-image:url({{asset('frontend/assets/image/about.img.png')}});">
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-7 pl-lg-5 pb-5">
				<div class="row justify-content-start pb-3">
					<div class="col-md-12 heading-section ftco-animate">
						<h1 class="big">About</h1>
						<h2 class="mb-4">About Me</h2>
						<p>Hey there, I'm Priya, an ambitious full-stack web developer with a passion for crafting
							immersive digital experiences. Hailing from Bangladesh, I recently wrapped up an
							intensive training program at Webcoder IT, where I delved into the intricacies of web
							development.

							During my course, I embarked on a journey of discovery, tackling numerous small-scale
							projects that allowed me to flex my creative muscles and dive deep into the world of
							coding. Armed with proficiency in HTML, CSS, JavaScript, and more, I've honed my skills
							across the entire web development spectrum.
						</p>
						<p>
							What sets me apart is my unwavering commitment to excellence and my relentless pursuit
							of innovation. From designing sleek, intuitive interfaces to architecting robust backend
							systems, I thrive on the challenges that come with building dynamic web solutions.

							Now, as I embark on the exciting journey of securing my place in the industry, I'm eager
							to bring my unique blend of technical expertise and creative flair to the table. Let's
							collaborate on something extraordinary and make waves in the digital landscape together.
						</p>
						<ul class="about-info mt-4 px-md-0 px-2">
							<li class="d-flex"><span>Name:</span> <span>Priya Naskar</span></li>
							<li class="d-flex"><span>Date of birth:</span> <span>August 07, 2002</span></li>
							<li class="d-flex"><span>Address:</span> <span>Kolkata Leather Complex, Kolkata, West
									Bengal, India</span>
							</li>
							<li class="d-flex"><span>PIN code:</span> <span> 743502</span></li>
							<li class="d-flex"><span>Email:</span> <span>naskartanu111@gmail.com</span></li>
							<!-- <li class="d-flex"><span>Phone: </span> <span>+1-2234-5678-9-0</span></li> -->
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
			<div class="col-md-6">
				<div class="resume-wrap ftco-animate">
					<span class="date">2020-2023</span>
					<h2>Bachelor of Arts (Honours)</h2>
					<span class="position">Victoria College Institution (Kolkata)</span>
					<!-- <p class="mt-4">A small river named Duden flows by their place and supplies it with the
						necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly
						into your mouth.</p> -->
				</div>
			</div>

			<div class="col-md-6">
				<div class="resume-wrap ftco-animate">
					<span class="date">2023-2024</span>
					<h2>Full Stack Web Developer</h2>
					<span class="position">Web-Coder It Institute, Dhaka, Bangladesh</span>
					<!-- <p class="mt-4">A small river named Duden flows by their place and supplies it with the
						necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly
						into your mouth.</p> -->
				</div>
			</div>
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
			<div class="col-md-4 text-center d-flex ftco-animate">
				<a href="#" class="services-1">
					<span class="icon">
						<i class="flaticon-analysis"></i>
					</span>
					<div class="desc">
						<h3 class="mb-5"> Satic Website</h3>
						<p></p>
						<p>Static web design refers to websites that are built using only HTML and CSS, without any
							server-side programming or database integration.</p>
					</div>
				</a>
			</div>
			<div class="col-md-4 text-center d-flex ftco-animate">
				<a href="#" class="services-1">
					<span class="icon">
						<i class="flaticon-flasks"></i>
					</span>
					<div class="desc">
						<h3 class="mb-5">Dynamic Website</h3>
						<p>
							A dynamic website is a type of website that generates web pages in real-time in response
							to user input or interaction.
							dynamic websites are capable of updating content dynamically,</p>
					</div>
				</a>
			</div>
			<div class="col-md-4 text-center d-flex ftco-animate">
				<a href="#" class="services-1">
					<span class="icon">
						<i class="flaticon-ideas"></i>
					</span>
					<div class="desc">
						<h3 class="mb-5">Web Design</h3>
						<p>Web design refers to the process of creating and designing the visual elements, layout,
							structure, and overall user experience of websites.</p>
					</div>
				</a>
			</div>
			<div class="col-md-4 text-center d-flex ftco-animate">
				<a href="#" class="services-1">
					<span class="icon">
						<i class="flaticon-ideas"></i>
					</span>
					<div class="desc">
						<h3 class="mb-5">Web Development</h3>
						<p>A web developer specializes in building and maintaining websites
							and web applications. They are proficient in various programming languages, frameworks,
							and technologies used to create dynamic and interactive web experiences.</p>
					</div>
				</a>
			</div>
			<!-- <div class="col-md-4 text-center d-flex ftco-animate">
				<a href="#" class="services-1">
					<span class="icon">
						<i class="flaticon-flasks"></i>
					</span>
					<div class="desc">
						<h3 class="mb-5">Web Application</h3>
						<p>
							A web application, often abbreviated as "web app," is a software application that is
							accessed and used through a web browser over a network, typically the internet.web
							applicationsare accessed through a client-server model via a web browser interface.</p>
					</div>
				</a>
			</div> -->

			<div class="col-md-4 text-center d-flex ftco-animate">
				<a href="#" class="services-1">
					<span class="icon">
						<i class="flaticon-analysis"></i>
					</span>
					<div class="desc">
						<h3 class="mb-5">App Development</h3>
						<p>App development, short for application development, refers to the process of creating
							software applications that run on various platforms such as mobile devices (e.g.,
							smartphones and tablets), desktop computers, and web browsers</p>
					</div>
				</a>
			</div>
			<div class="col-md-4 text-center d-flex ftco-animate">
				<a href="#" class="services-1">
					<span class="icon">
						<i class="flaticon-flasks"></i>
					</span>
					<div class="desc">
						<h3 class="mb-5">SEO Advance</h3>
						<p> SEO Advanced involves deeper analysis, strategic planning, and execution to achieve
							higher rankings and drive more organic traffic to a website. </p>
					</div>
				</a>
			</div>
			<!-- <div class="col-md-4 text-center d-flex ftco-animate">
				<a href="#" class="services-1">
					<span class="icon">
						<i class="flaticon-ideas"></i>
					</span>
					<div class="desc">
						<h3 class="mb-5">Product Strategy</h3>
					</div>
				</a>
			</div> -->
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
			<div class="col-md-6 animate-box">
				<div class="progress-wrap ftco-animate">
					<h3>HTML5</h3>
					<div class="progress">
						<div class="progress-bar color-1" role="progressbar" aria-valuenow="90" aria-valuemin="0"
							aria-valuemax="100" style="width:90%">
							<span>90%</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 animate-box">
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
			</div>
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
			<div class="col-md-4 text-center d-flex ftco-animate">
				<a href="#" class="services-1">
					<span class="icon">
						<i class="flaticon-analysis"></i>
					</span>
					<div class="desc">
						<h3 class="mb-5"> Software Architecture</h3>
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
			</div>
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

<section class="ftco-section ftco-hireme img margin-top" style="background-image: url({{asset('frontend/assets/images/bg_1.jpg')}})">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-7 ftco-animate text-center">
				<h2>I'm <span>Available to work as a freelancer</span> or full-time Web Development
					Specialist</h2>
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
					<p>Kolkata Leather Complex, Kolkata, West Bengal, India</p>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 d-flex ftco-animate">
				<div class="align-self-stretch box p-4 text-center">
					<div class="icon d-flex align-items-center justify-content-center">
						<span class="icon-phone2"></span>
					</div>
					<h3 class="mb-4">Contact Number</h3>
					<p><a href="tel://1234567920">+91 9832854019</a></p>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 d-flex ftco-animate">
				<div class="align-self-stretch box p-4 text-center">
					<div class="icon d-flex align-items-center justify-content-center">
						<span class="icon-paper-plane"></span>
					</div>
					<h3 class="mb-4">Email Address</h3>
					<p><a href="mailto:info@yoursite.com">naskartanu111@gmail.com</a></p>
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

		<div class="row no-gutters block-9">
			<div class="col-md-6 order-md-last d-flex">
				<form action="#" class="bg-light p-4 p-md-5 contact-form">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Your Name">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Your Email">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Subject">
					</div>
					<div class="form-group">
						<textarea name="" id="" cols="30" rows="7" class="form-control"
							placeholder="Message"></textarea>
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