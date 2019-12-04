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
    <p>Games</p></div>
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

<center><h1>Games</h1>
<center><div>
<p>Super Smash Bros.<br><a href="https://www.ssbwiki.com/Super_Smash_Bros.">Wiki</a></p>
<p>Super Smash Bros. Melee<br><a href="https://www.ssbwiki.com/Super_Smash_Bros._Melee">Wiki</a></p>
<p>Super Smash Bros. Brawl<br><a href="https://www.ssbwiki.com/Super_Smash_Bros._Brawl">Wiki</a></p>
<p>Super Smash Bros. for Wii U/3DS<br><a href="https://www.ssbwiki.com/Super_Smash_Bros._4">Wiki</a></p>
<p>Super Smash Bros. Ultimate<br><a href="https://www.ssbwiki.com/Super_Smash_Bros._Ultimate">Wiki</a></p>
</center></div>
</center>
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides1 fade hover">
    <div class="numbertext">1 / 5</div>
    <img src="https://www.ssbwiki.com/images/thumb/4/45/SSB64_box.png/250px-SSB64_box.png" style="width:100%">

  </div>

  <div class="mySlides1 fade">
    <div class="numbertext">2 / 5</div>
    <img src="https://www.ssbwiki.com/images/thumb/5/55/SsbmBoxart.jpg/250px-SsbmBoxart.jpg" style="width:100%">
    
  </div>

  <div class="mySlides1 fade">
    <div class="numbertext">3 / 5</div>
    <img src="https://www.ssbwiki.com/images/thumb/f/f3/SSBB_Cover.jpg/250px-SSBB_Cover.jpg" style="width:100%">
  
  </div>

  <div class="mySlides1 fade">
    <div class="numbertext">4 / 5</div>
    <img src="https://upload.wikimedia.org/wikipedia/en/thumb/a/a2/Super_Smash_Bros_for_Wii_U_Box_Art.png/220px-Super_Smash_Bros_for_Wii_U_Box_Art.png" style="width:100%">
   
  </div>

  <div class="mySlides1 fade">
    <div class="numbertext">5 / 5</div>
    <img src="https://www.ssbwiki.com/images/thumb/1/15/Super_Smash_Bros_Ultimate_Box_Art.png/250px-Super_Smash_Bros_Ultimate_Box_Art.png" style="width:100%">
    
  </div>

  <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
  <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
</div>
<script> var slideIndex = [1,1,1,1,1];
var slideId = ["mySlides1", "mySlides2", "mySlides3", "mySlides4", "mySlides5"]
showSlides(1, 0);
showSlides(1, 1);
showSlides(1, 2);
showSlides(1, 3);
showSlides(1, 4);

function plusSlides(n, no) {
  showSlides(slideIndex[no] += n, no);
}

function currentSlide(n, no) {
  showSlides(slideIndex[no] = n, no);
}

function showSlides(n, no) {
  var i;
  var x = document.getElementsByClassName(slideId[no]);
  if (n > x.length) {slideIndex[no] = 1}    
  if (n < 1) {slideIndex[no] = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex[no]-1].style.display = "block";  
}
</script>
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