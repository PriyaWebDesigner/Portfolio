<!DOCTYPE html>
<html lang="en">

<head>
	<title>Priya Naskar</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('frontend.includes.style')
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

	@include('frontend.includes.header')
	
    <main>
        @yield('content')
	</main>
	
	@include('frontend.includes.footer')

	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen">
		<svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#F96D00" />
		</svg>
	</div>

		@include('frontend.includes.script')

</body>

</html>