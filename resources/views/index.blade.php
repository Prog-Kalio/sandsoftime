@extends('layouts.sotlayout')

@section('title', 'The Origin')

@section('head')
<style type="text/css">
	

</style>

@endsection


@section('content')
	
	<div class="row" id="slider">
		<div class="col-md-12">
			<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
			    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
			    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
			    <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
			  </ol>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img src="{{('/images/sot-1.jpg')}}" class="d-block w-100" alt="pics1">
			      <div id="mycard">
					<h2>Sands Of Time</h2>
					<h5>...we build on existing legacies</h5>
				</div>
			    </div>
			    <div class="carousel-item">
			      <img src="{{('/images/sot-1.jpg')}}" class="d-block w-100" alt="pics2">
			    </div>
			    <div class="carousel-item">
			      <img src="{{('/images/sot-1.jpg')}}" class="d-block w-100" alt="pics3">
			    </div>
			    <div class="carousel-item">
			      <img src="{{('/images/sot-1.jpg')}}" class="d-block w-100" alt="pics4">
			    </div>
			    <div class="carousel-item">
			      <img src="{{('/images/sot-1.jpg')}}" class="d-block w-100" alt="pics5">
			    </div>
			  </div>
			</div>
		</div>
	</div>


	<div class="row" id="row1">
		<div class="col-md-4 row1_col">
			<h4>Legacy 1</h4>
			<img src="images/sot-2.jpg" class="img-fluid">
			<p>Lorem Ipsum Text Ipsum Gypy Werty Gyiemn Qaser Terinum. Lorem Ipsum Text Ipsum Gypy Werty Gyiemn Qaser Terinum. Lorem Ipsum Text Ipsum Gypy Werty Gyiemn Qaser Terinum. Lorem Ipsum Text Ipsum Gypy Werty Gyiemn Qaser Terinum. Lorem Ipsum Text Ipsum Gypy Werty Gyiemn Qaser Terinum</p>
		</div>

		<div class="col-md-4 row1_col">
			<h4>Legacy 2</h4>
			<img src="images/sot-3.jpg" class="img-fluid">
			<p>No, you ain't the first in it!<br>...won't be the last either!! Werty Gyiemn Qaser Terinum. Lorem Ipsum Text Ipsum Gypy Werty Gyiemn Qaser Terinum. Lorem Ipsum Text Ipsum Gypy Werty Gyiemn Qaser Terinum. Text Ipsum Gypy Werty Gyiemn Qaser Terinum Werty Gyiemn Qaser Terinum. Lorem Ipsum</p>
		</div>

		<div class="col-md-4 row1_col">
			<h4>Legacy 3</h4>
			<img src="images/sot-2.jpg" class="img-fluid">
			<p>Lorem Ipsum Text Ipsum Gypy Werty Gyiemn Qaser Terinum. Lorem Ipsum Text Ipsum Gypy Werty Gyiemn Qaser Terinum. Lorem Ipsum Text Ipsum Gypy Werty Gyiemn Qaser Terinum. Lorem Ipsum Text Ipsum Gypy Werty Gyiemn Qaser Terinum. Lorem Ipsum Text Ipsum Gypy Werty Gyiemn Qaser Terinum</p>
		</div>
	</div>

	<!-- I will loop through this section to produce atlease 5 different legacies then add a LIMIT -->
	<div class="row" id="row2">
		<div class="col-md-12 row2_col">
			<img src="images/legacy1.jpg" class="img-fluid">
			<h5><b>Field:</b> PROGRAMMING</h5>
			<p><b>Achievments:</b> Q'est cera Cera! Q'est cera Cera! Q'est cera Cera! Q'est cera Cera! Q'est cera Cera! Q'est cera Cera! Q'est cera Cera! Q'est cera Cera!</p>
			<p><b>Story Behind It:</b> Lorem Ipsum Text Ipsum Gypy Werty Gyiemn Qaser Terinum. Lorem Ipsum Text Ipsum Gypy Werty Gyiemn Qaser Terinum. Lorem Ipsum Text Ipsum Gypy Werty Gyiemn Qaser Terinum. Lorem Ipsum Text Ipsum Gypy Werty Gyiemn Qaser Terinum. Lorem Ipsum Text Ipsum Gypy Werty Gyiemn Qaser Terinum. Lorem Ipsum Text Ipsum Gypy Werty Gyiemn Qaser Terinum. Lorem Ipsum Text Ipsum Gypy Werty Gyiemn Qaser Terinum. Lorem Ipsum Text Ipsum Gypy Werty Gyiemn Qaser Terinum. Lorem Ipsum Text Ipsum Gypy Werty Gyiemn Qaser Terinum. Lorem Ipsum Text Ipsum Gypy Werty Gyiemn Qaser Terinum</p>
			<p><b>Phone:</b> 080xxxxxxxx</p>
			<p><b>Email:</b> xyz@gmail.com</p>
			<p><b>Location:</b> Middlesbrough, UK</p>
			<div class="has-feedback">
				<p>
					<small>Likes 180</small>
					<small>Comments 43</small>
					<small>Share 27</small>
				</p>
			</div>
		</div>
	</div>

	<div class="row" id="row2">
		<div class="col-md-12 row2_col">
			<img src="images/legacy2.jpg" class="img-fluid">
			<h5><b>Field:</b> MUSIC</h5>
			<p><b>Achievments:</b> Q'est cera Cera! Q'est cera Cera! Q'est cera Cera! Q'est cera Cera! Q'est cera Cera! Q'est cera Cera! Q'est cera Cera! Q'est cera Cera!</p>
			<p><b>Story Behind It:</b> Lorem Ipsum Text Ipsum Gypy Werty Gyiemn Qaser Terinum. Lorem Ipsum Text Ipsum Gypy Werty Gyiemn Qaser Terinum. Lorem Ipsum Text Ipsum Gypy Werty Gyiemn Qaser Terinum. Lorem Ipsum Text Ipsum Gypy Werty Gyiemn Qaser Terinum. Lorem Ipsum Text Ipsum Gypy Werty Gyiemn Qaser Terinum. Lorem Ipsum Text Ipsum Gypy Werty Gyiemn Qaser Terinum. Lorem Ipsum Text Ipsum Gypy Werty Gyiemn Qaser Terinum. Lorem Ipsum Text Ipsum Gypy Werty Gyiemn Qaser Terinum. Lorem Ipsum Text Ipsum Gypy Werty Gyiemn Qaser Terinum. Lorem Ipsum Text Ipsum Gypy Werty Gyiemn Qaser Terinum</p>
			<p><b>Phone:</b> 080xxxxxxxx</p>
			<p><b>Email:</b> xyz@gmail.com</p>
			<p><b>Location:</b> Middlesbrough, UK</p>
			<div class="has-feedback">
				<p>
					<small>Likes 180</small>
					<small>Comments 43</small>
					<small>Share 27</small>
				</p>
			</div>
		</div>
	</div>

	<div class="row" id="row2">
		<div class="col-md-12 row2_col">
			<img src="images/legacy3.jpg" class="img-fluid">
			<h5><b>Field:</b> COMEDY</h5>
			<p><b>Achievments:</b> Q'est cera Cera! Q'est cera Cera! Q'est cera Cera! Q'est cera Cera! Q'est cera Cera! Q'est cera Cera! Q'est cera Cera! Q'est cera Cera!</p>
			<p><b>Story Behind It:</b> Lorem Ipsum Text Ipsum Gypy Werty Gyiemn Qaser Terinum. Lorem Ipsum Text Ipsum Gypy Werty Gyiemn Qaser Terinum. Lorem Ipsum Text Ipsum Gypy Werty Gyiemn Qaser Terinum. Lorem Ipsum Text Ipsum Gypy Werty Gyiemn Qaser Terinum. Lorem Ipsum Text Ipsum Gypy Werty Gyiemn Qaser Terinum. Lorem Ipsum Text Ipsum Gypy Werty Gyiemn Qaser Terinum. Lorem Ipsum Text Ipsum Gypy Werty Gyiemn Qaser Terinum. Lorem Ipsum Text Ipsum Gypy Werty Gyiemn Qaser Terinum. Lorem Ipsum Text Ipsum Gypy Werty Gyiemn Qaser Terinum. Lorem Ipsum Text Ipsum Gypy Werty Gyiemn Qaser Terinum</p>
			<p><b>Phone:</b> 080xxxxxxxx</p>
			<p><b>Email:</b> xyz@gmail.com</p>
			<p><b>Location:</b> Middlesbrough, UK</p>
			<div class="has-feedback">
				<p>
					<small>Likes 180</small>
					<small>Comments 43</small>
					<small>Share 27</small>
				</p>
			</div>
		</div>
	</div>


	<div class="row" id="row2">
		<div class="col-md-12 row2_col">
			<img src="images/legacy4.jpg" class="img-fluid">
			<h5><b>Field:</b> BANKING</h5>
			<p><b>Achievments:</b> Q'est cera Cera! Q'est cera Cera! Q'est cera Cera! Q'est cera Cera! Q'est cera Cera! Q'est cera Cera! Q'est cera Cera! Q'est cera Cera!</p>
			<p><b>Story Behind It:</b> Lorem Ipsum Text Ipsum Gypy Werty Gyiemn Qaser Terinum. Lorem Ipsum Text Ipsum Gypy Werty Gyiemn Qaser Terinum. Lorem Ipsum Text Ipsum Gypy Werty Gyiemn Qaser Terinum. Lorem Ipsum Text Ipsum Gypy Werty Gyiemn Qaser Terinum. Lorem Ipsum Text Ipsum Gypy Werty Gyiemn Qaser Terinum. Lorem Ipsum Text Ipsum Gypy Werty Gyiemn Qaser Terinum. Lorem Ipsum Text Ipsum Gypy Werty Gyiemn Qaser Terinum. Lorem Ipsum Text Ipsum Gypy Werty Gyiemn Qaser Terinum. Lorem Ipsum Text Ipsum Gypy Werty Gyiemn Qaser Terinum. Lorem Ipsum Text Ipsum Gypy Werty Gyiemn Qaser Terinum</p>
			<p><b>Phone:</b> 080xxxxxxxx</p>
			<p><b>Email:</b> xyz@gmail.com</p>
			<p><b>Location:</b> Middlesbrough, UK</p>
			<div class="has-feedback">
				<p>
					<small>Likes 180</small>
					<small>Comments 43</small>
					<small>Share 27</small>
				</p>
			</div>
		</div>
	</div>
	

@endsection


