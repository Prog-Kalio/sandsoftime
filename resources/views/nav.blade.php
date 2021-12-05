
<style type="text/css">

	#navname {
		background-color: rgba(60,60,60,0.7);
	}

	#navbar {
		background-color: rgba(60,60,60,0.7);
	}

	#navname h4 {
		color:  white;
		padding-top: 10px;
	}

	#navname h4 span{
		padding-left: 30px;
	}

	#navbar ul {
		padding: 5px;
		text-align: right;
		margin-top: 10px;
	}

	#navbar li {
		display: inline-block;
		list-style: none;
		padding: 5px 15px;
		background-color: rgba(100, 100, 100, 0.8);
		border-radius: 5px;
		margin-right: 13px;
	}

	#navbar li a {
		text-decoration: none;
		color: white;
	}

	#navbar li:hover {
		padding: 5px 17px;
		border-radius: 0px;
		background-color: rgba(45, 45, 45, 0.7);
	}
</style>



<div class="row">
	<div class="col-md-4" id="navname">
		<h4><img src="images/logo.png" width="45" height="50"> <span>SANDS OF TIME</span></h4>
	</div>
	<div class="col-md-8" id="navbar">
		<ul>
			<li><a href="{{ url('/') }}">Home</a></li>
			<li><a href="{{ url('/about') }}">About</a></li>
			<li><a href="{{ url('/times') }}">Times</a></li>
			<li><a href="{{ url('/contact') }}">Contact</a></li>
			<li><a href="{{ url('/login') }}">Login</a></li>
			<li><a href="{{ url('/register') }}">Register</a></li>
		</ul>
	</div>
</div>