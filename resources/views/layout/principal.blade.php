<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="UTF-8">
			<title>Clouds Design</title>
						
			<link rel="stylesheet" href="{{ asset('css/styles_index.css') }}">
			<link rel="stylesheet" href="{{ asset('css/animate/animate.css') }}">
			<link rel="stylesheet" href="{{ asset('css/color.css') }}">
				        

		</head>
		<body>
			<!-- ***** PRELOADER ***** -->
			<div class="overlay" id="loader">
	            <div class="loader logo">
	                <img src="{{ asset('imagen/logo-clouds.png') }}" alt="">
	                <ul>
	                    <li>L</li>
	                    <li>O</li>
	                    <li>A</li>
	                    <li>D</li>
	                    <li>I</li>
	                    <li>N</li>
	                    <li>G</li>
	                </ul>
	            </div>
	        </div>

		    <!-- page content -->
	        @yield('content')

	        <!-- ****	FOOTER  ***** -->
		    <div class="ed-container full">
		   		 <footer>
		    		Copyright © 2017 Apple Inc. Todos los derechos reservados. 	
		    	</footer>
		    </div>	      
			
			<script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
			<script src="{{ asset('js/script.js') }}"></script>
		</body>
	</html>	