<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
<link href="style.css" type="text/css" rel="stylesheet" />
</head>
<header><div class = logo>
	<title>Gem State Smash</title>
	<h1>Gem State Smash</h1>
    <h2>Idaho Smash Fan Site</h2>
    <p>Characters</p></div>
</header>
<body>
<div class = navbar><p>
<li><a href="index.php">Home</a></li>
<li><a href="characters.php">Characters</a></li>
<li><a href="rankings.php">Rankings</a></li>
<li><a href="games.php">Games</a></li>
<?php
if (!isset($_SESSION['user_id'])) { ?>
<li><a href="login.php">Login</a></li>
<li><a href="register.php">Sign-Up</a></li>
<?php } else { ?>
<li><a href='logout_handler.php'>Logout</a></li>
<?php } ?>
</p></div>
<div class = login><?php
if (isset($_SESSION['user_id'])) {
	echo "<li><a href='#'>Welcome ".$_SESSION['user_name']."!</a></li>";
	
}?>
<hr />
<p>Characters</p>
<p>Super Smash Bros.</p>
<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 5</div>
    <img src="fox.png" style="width:100%">
    <div class="text">Fox</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 5</div>
    <img src="daisy.png" style="width:100%">
    <div class="text">Daisy</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 5</div>
    <img src="Ganondorf.png" style="width:100%">
    <div class="text">Ganondorf</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">4 / 5</div>
    <img src="inkling.png" style="width:100%">
    <div class="text">Inkling</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">5 / 5</div>
    <img src="Ike.png" style="width:100%">
    <div class="text">Ike</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
</div>
<script>var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}</script>
<ol>
	<li>Mario</li>
	<li>Donkey Kong</li>
	<li>Link</li>
	<li>Samus</li>
	<li>Yoshi</li>
	<li>Kirby</li>
	<li>Fox</li>
	<li>Pikachu</li>
	<li>Luigi</li>
	<li>Ness</li>
	<li>Captain Falcon</li>
	<li>Jigglypuff</li>
</ol>
<p>Super Smash Bros. Melee</p>
	<ol>
	<li>Mario</li>
	<li>Donkey Kong</li>
	<li>Link</li>
	<li>Samus</li>
	<li>Yoshi</li>
	<li>Kirby</li>
	<li>Fox</li>
	<li>Pikachu</li>
	<li>Luigi</li>
	<li>Ness</li>
	<li>Captain Falcon</li>
	<li>Jigglypuff</li>
	<li>Under construction</li>
</ol>
<p>Super Smash Bros. Brawl</p>
<ol>
<li>In progress, will use JSON api to fill out lists next assignment.</li>
</ol>
<p>Super Smash Bros. for Wii U/3DS</p>
<ol>
<li>In progress, will use JSON api to fill out lists next assignment.</li>
</ol>
<p>Super Smash Bros. Ultimate</p>
<ol>
<li>In progress, will use JSON api to fill out lists next assignment.</li>
</ol>
<hr />
<footer>
  <address>
  Created by: Jake Halopoff<br>
  Contact information: <a href="mailto:jacobtylerhalopoff@gmail.com">
  jacobtylerhalopoff@gmail.com</a><br>
	Visit us at:<br>
	Facebook.com<br>
	Box 564, Disneyland<br>
	USA<br>
	<img src="gemlogo.png" alt="Gem State Smash" width="150" height="150">
</address>
</footer>
</body>
</html>