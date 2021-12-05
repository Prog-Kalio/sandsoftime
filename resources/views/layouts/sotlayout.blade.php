<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<title> {{ config('app.name', 'Sands of Time') }} - @yield('title')</title>
	<!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	@yield('head')
	
	<style type="text/css">

		* {
			padding: 0;
			margin:  0;
		}

		.comtainer-fluid {
			width: 99%;
			margin: auto;
			min-height: 600px;
		}

		#mycard {
			position: absolute;
			top: 40%;
			left: 40%;
			text-align: center;
		}
		
		#row1 {
			width: 96%;
			margin: auto;
			min-height: 450px;
			
			margin-top: 30px;
			justify-content: space-between;
			padding: 10px;
		} 

		.row1_col {
			
			box-shadow: 5px 0px 5px rgba(249, 246, 241);
			min-height: 400px;
			width: 96%;
			margin: auto;
			background-color: cream;
			transition: all 1s ease;
		}
		.row1_col:hover {
			transform: translateY(-15px);
		}

		.row1_col h4 {
			text-align: center;
			background-color: rgba(205, 189, 165);
			padding: 10px;
		}

		#row2 {
			width: 96%;
			margin: auto;
		}

		.row2_col {
			margin-top: 30px;
			min-height: 400px;
			border:  1px solid rgb(205, 189, 165);
			text-align: center;
			padding: 8px;
		}

		.row2_col img {
			border-radius: 50%;
			height: 70px;
		}

		.has-feedback {
			text-align: left;
		}


	</style>

</head>
<body>
	<div class="container-fluid">
		@include('nav')


		<div>
			@yield('content')
		</div>





		@include('footer')
	</div>
	<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</body>
</html>