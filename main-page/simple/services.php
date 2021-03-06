
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Simple &mdash; Free HTML5 Bootstrap Website Template by FreeHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

  <!--
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE
	DESIGNED & DEVELOPED by FreeHTML5.co

	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<div id="fh5co-wrap">
		<header id="fh5co-header">
			<div class="container">
				<nav class="fh5co-main-nav">
					<ul>
						<li><a href="index.html"><span>Home</span></a></li>
						<li class="fh5co-active"><a href="services.html"><span>Math</span></a></li>
						<li><a href="about.html"><span>Science</span></a></li>
						<li><a href="contact.html"><span>Literature</span></a></li>
					</ul>
				</nav>
			</div>
		</header>

		<div class="fh5co-hero" style="background-image: url(images/hero_5.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell">
							<h1 class="text-center">Solve Fractions</h1>
							<p>in the cool way, made by <a href="http://freehtml5.co">TeamLyceum</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="fh5co-section">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<h2>Fractions</h2>
<p><form action="services.php" method="post">

<table border="5">

<tr>
	<td>3/4 + 5/4</td>
	<td align="center">

	<?php
	$answer1 = $_POST['answer1'];
	if ($answer1 != 2)
		echo $answer1 . ' is wrong </br>';
	else
		echo $answer1 . ' is correct </br>';
	?>
	</td>


</tr>

<tr>
	<td>5/8 + 9/10</td>
	<td align="center">

	<?php
	$answer2 = $_POST['answer2'];
	if ($answer2 != 2)
		echo $answer2 . ' is wrong </br>';
	else
		echo $answer2 . ' is correct </br>';
	?>
	</td>
</tr>

<tr>
	<td>9/4 - 2/3</td>
	<td align="center">

	<?php
	$answer3 = $_POST['answer3'];
	if ($answer3 != 2)
		echo $answer3 . ' is wrong </br>';
	else
		echo $answer3 . ' is correct </br>';
	?>
	</td>
</tr>

<tr>
	<td>2/3 + 5/8</td>
	<td align="center">

	<?php
	$answer4 = $_POST['answer4'];
	if ($answer4 != 2)
		echo $answer4 . ' is wrong </br>';
	else
		echo $answer4 . ' is correct </br>';
	?>
	</td>
</tr>

<tr>
	<td>54/53 - 5/53</td>
	<td align="center">

	<?php
	$answer5 = $_POST['answer5'];
	if ($answer5 != 2)
		echo $answer5 . ' is wrong </br>';
	else
		echo $answer5 . ' is correct </br>';
	?>
	</td>
</tr>

<tr>
	<td>12/3 + 16/2</td>
	<td align="center">

	<?php
	$answer6 = $_POST['answer6'];
	if ($answer6 != 2)
		echo $answer6 . ' is wrong </br>';
	else
		echo $answer6 . ' is correct </br>';
	?>
	</td>
</tr>


<tr>
	<td>12/5 + 16/3</td>
	<td align="center">

	<?php
	$answer7 = $_POST['answer7'];
	if ($answer7 != 2)
		echo $answer7 . ' is wrong </br>';
	else
		echo $answer7 . ' is correct </br>';
	?>
	</td>
</tr>

<tr>
	<td>8/3 + 9/2</td>
	<td align="center"><input type="text" name="answer8" size="10"  /></td>
</tr>

<tr>
	<td>12/3 - 16/2</td>
	<td align="center"><input type="text" name="answer9" size="10"  /></td>
</tr>

<tr>
	<td>8/3 - 2/2</td>
	<td align="center"><input type="text" name="answer10" size="10"  /></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" value="Submit"/></td>
</tr>

<?php
$score = 0
$answer1 = $_POST('answer1');
$answer2 = $_POST('answer2');
$answer3 = $_POST('answer3');
$answer4 = $_POST('answer4');
$answer5 = $_POST('answer5');
$answer6 = $_POST('answer6');
$answer7 = $_POST('answer7');

if ($answer1 == 2)
	{$score=$score+1;}
elseif ($answer2 == 2)
	{$score=$score+1;}
elseif ($answer3 == 2)
	{$score=$score+1;}
elseif ($answer4 == 2)
	{$score=$score+1;}
elseif ($answer5 == 2)
	{$score=$score+1;}
elseif ($answer6 == 2)
	{$score=$score+1;}
elseif ($answer7 == 2)
	{$score=$score+1;}
else{ echo " test";}

echo "Your score: " . $score;

?>

</table></p>
						<ul class="fh5co-check">
							<li>Learn</li>
							<li>Practice</li>
							<li>Exam?!!?</li>
							<li>Have Fun!!</li>
						</ul>
					</div>
					<div class="col-md-7">
							<?php

	if ($answer1 == 2)
		echo '<img src="images/saber1.gif" alt="Free HTML5 by FreeHTML5.co" class="img-responsive">';
	else if ($answer1 == 1)
		echo '<img src="images/hangman.png" alt="Free HTML5 by FreeHTML5.co" class="img-responsive">';
	else if ($answer1 == 3)
		echo '<img src="images/hero_5.jpg" alt="Free HTML5 by FreeHTML5.co" class="img-responsive">';
	else
		echo '<img src="images/youdied.jpg" alt="Free HTML5 by FreeHTML5.co" class="img-responsive">';
	?>
					</div>
				</div>
			</div>
		</div>

		<div class="fh5co-parallax" style="background-image: url(images/hero_5.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell">
							<h1 class="text-center">Simple yet elegant</h1>
							<p>Made with love by the fine folks at <a href="http://freehtml5.co">FreeHTML5.co</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="fh5co-section">
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-md-push-7">
						<h2>Web Design</h2>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
						<ul class="fh5co-check">
							<li>Web Design</li>
							<li>User Experience</li>
							<li>User Interface</li>
							<li>Search Engine Optimization</li>
						</ul>
					</div>
					<div class="col-md-7 col-md-pull-5">
						<img src="images/hero_1.jpg" alt="Free HTML5 by FreeHTML5.co" class="img-responsive">
					</div>
				</div>
			</div>
		</div>


		<div class="fh5co-parallax" style="background-image: url(images/hero_3.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell">
							<h1 class="text-center">Keep it simple</h1>
							<p>Made with love by the fine folks at <a href="http://freehtml5.co">FreeHTML5.co</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="fh5co-section">
			<div class="container">

				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-6">
								<h2>Start A Project With Us Now!</h2>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen.</p>

					</div>
					<div class="col-md-6">
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
						<p><a href="#" class="btn btn-primary">Get started now!</a></p>
					</div>
				</div>

			</div>
		</div>

	</div> <!-- END fh5co-wrap -->


	<footer id="fh5co-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h3>About Us</h3>
					<p>She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains.</p>
				</div>
				<div class="col-md-3 col-md-push-1">
					<h3>Quick Links</h3>
					<ul>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Products</a></li>
						<li><a href="#">Services</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-md-push-1">
					<h3>Follow Us</h3>
					<ul class="fh5co-social">
						<li><a href="#"><i class="icon-twitter"></i> <span>Twitter</span></a></li>
						<li><a href="#"><i class="icon-facebook"></i> <span>Facebook</span></a></li>
						<li><a href="#"><i class="icon-instagram"></i> <span>Instagram</span></a></li>
						<li><a href="#"><i class="icon-google"></i> <span>Google Plus</span></a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 fh5co-copyright text-center">
					<p><small>&copy; 2016 Free HTML5 Simple. All Rights Reserved. </small> <small>Made with care by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.com" target="_blank">Unsplash</a></small></p>
				</div>
			</div>
		</div>
	</footer>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>
