<!DOCTYPE html>
<html>
<head>
	<title>Tours and travels website</title>
	<meta name="language" content="English">
	<meta name="description" content="It is a website about semister project">
	<meta name="keywords" content="Tours">
	<meta name="author" content="Raihan">
	<link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.css">	
	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/tour-image-gallery.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>



<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random',
		slices:10,
		animSpeed:500,
		pauseTime:5000,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:false,
		directionNavHide:false, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.8, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>
</head>

<body>
	<div class="headersection container">
		<a href="#">
			<div class="logo">
				<img src="images/logo.png" alt="Logo"/>
				<h2>Tours and Travels</h2>
				<p>Make your life enjoyable</p>
			</div>
		</a>
		<div class="social clear">
			<div class="icon clear">
				<a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
				<a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
				<a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
				<a href="#" target="_blank"><i class="fa fa-google-plus"></i></a>
			</div>
			<div class="searchbtn clear">
			<form action="" method="post">
				<input type="text" name="keyword" placeholder="Search keyword..."/>
				<input type="submit" name="submit" value="Search"/>
			</form>
			</div>
		</div>
	</div>
<div class="navsection container">
	<ul>
		<li><a id="" href="<?php echo BASE_URL;?>">Home</a></li>
		<li><a href="<?php echo BASE_URL;?>/index.php?url=Showpage/showtravelblog">Travel Blog</a></li>
		<li><a href="<?php echo BASE_URL;?>/index.php?url=Tour/showtour">Tours</a></li>
		<li><a href="#">Hotel</a></li>
		<li><a href="#">Sign Up</a></li>	
		<li><a href="<?php echo BASE_URL;?>/index.php?url=Showpage/showcontact">Contact Us</a></li>

	</ul>
</div>


