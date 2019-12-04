<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
<link href="style.css" type="text/css" rel="stylesheet" />
<!--<script src="slide.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
  <div class="mySlides1 fade">
    <div class="numbertext">1 / 12</div>
    <img src="https://www.ssbwiki.com/images/b/b3/Mario_SSB.png" style="width:100%">
    <div class="text">Mario</div>
  </div>

  <div class="mySlides1 fade">
    <div class="numbertext">2 / 12</div>
    <img src="https://www.ssbwiki.com/images/3/3d/Donkey_Kong_SSB.png" style="width:100%">
    <div class="text">Donkey Kong</div>
  </div>

  <div class="mySlides1 fade">
    <div class="numbertext">3 / 12</div>
    <img src="https://www.ssbwiki.com/images/6/6e/Link_SSB.png" style="width:100%">
    <div class="text">Link</div>
  </div>

  <div class="mySlides1 fade">
    <div class="numbertext">4 / 12</div>
    <img src="https://www.ssbwiki.com/images/1/18/Samus_SSB.png" style="width:100%">
    <div class="text">Samus</div>
  </div>

  <div class="mySlides1 fade">
    <div class="numbertext">5 / 12</div>
    <img src="https://www.ssbwiki.com/images/6/64/Yoshi_SSB.png" style="width:100%">
    <div class="text">Yoshi</div>
  </div>

  <div class="mySlides1 fade">
    <div class="numbertext">6 / 12</div>
    <img src="https://www.ssbwiki.com/images/f/f2/Kirby_SSB.png" style="width:100%">
    <div class="text">Kirby</div>
  </div>

  <div class="mySlides1 fade">
    <div class="numbertext">7 / 12</div>
    <img src="https://www.ssbwiki.com/images/6/61/Fox_SSB.png" style="width:100%">
    <div class="text">Fox</div>
  </div>

  <div class="mySlides1 fade">
    <div class="numbertext">8 / 12</div>
    <img src="https://www.ssbwiki.com/images/9/92/Pikachu_SSB.png" style="width:100%">
    <div class="text">Pikachu</div>
  </div>

  <div class="mySlides1 fade">
    <div class="numbertext">9 / 12</div>
    <img src="https://www.ssbwiki.com/images/5/52/Luigi_SSB.png" style="width:100%">
    <div class="text">Luigi</div>
  </div>

  <div class="mySlides1 fade ">
    <div class="numbertext">10 / 12</div>
    <img src="https://www.ssbwiki.com/images/1/16/Ness_SSB.png" style="width:100%">
    <div class="text">Ness</div>
  </div>
  
  <div class="mySlides1 fade ">
    <div class="numbertext">11 / 12</div>
    <img src="https://www.ssbwiki.com/images/0/04/Captain_Falcon_SSB.png" style="width:100%">
    <div class="text">Captain Falcon</div>
  </div>

  <div class="mySlides1 fade">
    <div class="numbertext">12 / 12</div>
    <img src="https://www.ssbwiki.com/images/d/de/Jigglypuff_SSB.png" style="width:100%">
    <div class="text">Jigglypuff</div>
  </div>

  <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
  <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
</div>
<p>Super Smash Bros. Melee</p>
<div class="slideshow-container">
  <div class="mySlides2">
    <img src="https://www.ssbwiki.com/images/6/60/Mario_SSBM.jpg" style="width:100%">
    <div class="text">Mario</div>
  </div>

  <div class="mySlides2">
    <img src="https://www.ssbwiki.com/images/6/65/Luigi_SSBM.jpg" style="width:100%">
  </div>

  <div class="mySlides2">
    <img src="https://www.ssbwiki.com/images/1/1f/Link_SSBM.jpg" style="width:100%">
  </div>

  <div class="mySlides2">
    <img src="https://www.ssbwiki.com/images/f/fb/Samus_SSBM.jpg" style="width:100%">
  </div>

  <div class="mySlides2">
    <img src="https://www.ssbwiki.com/images/0/0a/Yoshi_SSBM.jpg" style="width:100%">
  </div>

  <div class="mySlides2">
    <img src="https://www.ssbwiki.com/images/e/e6/Kirby_SSBM.jpg" style="width:100%">
  </div>

  <div class="mySlides2">
    <img src="https://www.ssbwiki.com/images/b/bf/Fox_SSBM.jpg" style="width:100%">
  </div>

  <div class="mySlides2">
    <img src="https://www.ssbwiki.com/images/b/bf/Pikachu_SSBM.jpg" style="width:100%">
  </div>

  <div class="mySlides2">
    <img src="https://www.ssbwiki.com/images/e/eb/Jigglypuff_SSBM.jpg" style="width:100%">
  </div>

  <div class="mySlides2">
    <img src="https://www.ssbwiki.com/images/7/77/Captain_Falcon_SSBM.jpg" style="width:100%">
  </div>

  <div class="mySlides2">
    <img src="https://www.ssbwiki.com/images/6/64/Ness_SSBM.jpg" style="width:100%">
  </div>

  <div class="mySlides2">
    <img src="https://www.ssbwiki.com/images/d/db/Peach_SSBM.jpg" style="width:100%">
  </div>

  <div class="mySlides2">
    <img src="https://www.ssbwiki.com/images/0/03/Bowser_SSBM.jpg" style="width:100%">
  </div>

  <div class="mySlides2">
    <img src="https://www.ssbwiki.com/images/7/71/Dr._Mario_SSBM.jpg" style="width:100%">
  </div>

  <div class="mySlides2">
    <img src="https://www.ssbwiki.com/images/4/4e/Zelda_SSBM.jpg" style="width:100%">
  </div>

  <div class="mySlides2">
    <img src="https://www.ssbwiki.com/images/4/48/Sheik_SSBM.jpg" style="width:100%">
  </div>

  <div class="mySlides2">
    <img src="https://www.ssbwiki.com/images/6/67/Young_Link_SSBM.jpg" style="width:100%">
  </div>

  <div class="mySlides2">
    <img src="https://www.ssbwiki.com/images/2/27/Ganondorf_SSBM.jpg" style="width:100%">
  </div>

  <div class="mySlides2">
    <img src="https://www.ssbwiki.com/images/1/17/Falco_SSBM.jpg" style="width:100%">
  </div>

  <div class="mySlides2">
    <img src="https://www.ssbwiki.com/images/2/2c/Pichu_SSBM.jpg" style="width:100%">
  </div>

  <div class="mySlides2">
    <img src="https://www.ssbwiki.com/images/2/27/Mewtwo_SSBM.jpg" style="width:100%">
  </div>

  <div class="mySlides2">
    <img src="https://www.ssbwiki.com/images/1/10/Ice_Climbers_SSBM.jpg" style="width:100%">
  </div>

  <div class="mySlides2">
    <img src="https://www.ssbwiki.com/images/d/dd/Marth_SSBM.jpg" style="width:100%">
  </div>

  <div class="mySlides2">
    <img src="https://www.ssbwiki.com/images/f/fc/Roy_SSBM.jpg" style="width:100%">
  </div>

  <div class="mySlides2">
    <img src="https://www.ssbwiki.com/images/d/d3/Mr._Game_%26_Watch_SSBM.jpg" style="width:100%">
  </div>

  <a class="prev" onclick="plusSlides(-1, 1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1, 1)">&#10095;</a>
</div>

<p>Super Smash Bros. Brawl</p>
<div class="slideshow-container">
  <div class="mySlides3 fade">
    <img src="https://www.ssbwiki.com/images/thumb/8/83/Mario_SSBB.jpg/250px-Mario_SSBB.jpg" style="width:100%">
    <div class="text">Mario</div>
  </div>

  <div class="mySlides3 fade">
    <img src="https://www.ssbwiki.com/images/thumb/6/67/Luigi_SSBB.jpg/250px-Luigi_SSBB.jpg" style="width:100%">
  </div>

  <div class="mySlides3 fade">
    <img src="https://www.ssbwiki.com/images/thumb/d/d4/Peach_SSBB.jpg/250px-Peach_SSBB.jpg" style="width:100%">
  </div>
  
  <div class="mySlides3 fade">
    <img src="https://www.ssbwiki.com/images/thumb/a/ac/Bowser_SSBB.jpg/250px-Bowser_SSBB.jpg" style="width:100%">
  </div>
  <div class="mySlides3 fade">
    <img src="https://www.ssbwiki.com/images/thumb/2/2c/Donkey_Kong_SSBB.jpg/250px-Donkey_Kong_SSBB.jpg" style="width:100%">
  </div>
  <div class="mySlides3 fade">
    <img src="https://www.ssbwiki.com/images/thumb/a/a5/Yoshi_SSBB.jpg/250px-Yoshi_SSBB.jpg" style="width:100%">
  </div>
  <div class="mySlides3 fade">
    <img src="https://www.ssbwiki.com/images/thumb/a/ae/Kirby_SSBB.jpg/250px-Kirby_SSBB.jpg" style="width:100%">
  </div>
  <div class="mySlides3 fade">
    <img src="https://www.ssbwiki.com/images/thumb/b/b8/Link_SSBB.jpg/250px-Link_SSBB.jpg" style="width:100%">
  </div>
  <div class="mySlides3 fade">
    <img src="https://www.ssbwiki.com/images/thumb/b/bb/Sheik_SSBB.jpg/250px-Sheik_SSBB.jpg" style="width:100%">
  </div>
  <div class="mySlides3 fade">
    <img src="https://www.ssbwiki.com/images/thumb/8/8f/Zelda_SSBB.jpg/250px-Zelda_SSBB.jpg" style="width:100%">
  </div>
  <div class="mySlides3 fade">
    <img src="https://www.ssbwiki.com/images/thumb/4/4b/Ganondorf_SSBB.jpg/250px-Ganondorf_SSBB.jpg" style="width:100%">
  </div>
  <div class="mySlides3 fade">
    <img src="https://www.ssbwiki.com/images/thumb/e/eb/Samus_SSBB.jpg/250px-Samus_SSBB.jpg" style="width:100%">
  </div>
  <div class="mySlides3 fade">
    <img src="https://www.ssbwiki.com/images/thumb/e/ee/Fox_SSBB.jpg/250px-Fox_SSBB.jpg" style="width:100%">
  </div>
  <div class="mySlides3 fade">
    <img src="https://www.ssbwiki.com/images/thumb/c/c3/Falco_SSBB.jpg/250px-Falco_SSBB.jpg" style="width:100%">
  </div>
  <div class="mySlides3 fade">
    <img src="https://www.ssbwiki.com/images/thumb/f/f5/Pikachu_SSBB.jpg/250px-Pikachu_SSBB.jpg" style="width:100%">
  </div>
  <div class="mySlides3 fade">
    <img src="https://www.ssbwiki.com/images/thumb/d/d8/Jigglypuff_SSBB.jpg/256px-Jigglypuff_SSBB.jpg" style="width:100%">
  </div>
  <div class="mySlides3 fade">
    <img src="https://www.ssbwiki.com/images/thumb/6/63/Ness_SSBB.jpg/250px-Ness_SSBB.jpg" style="width:100%">
  </div>
  <div class="mySlides3 fade">
    <img src="https://www.ssbwiki.com/images/thumb/c/c3/Captain_Falcon_SSBB.jpg/250px-Captain_Falcon_SSBB.jpg" style="width:100%">
  </div>
  <div class="mySlides3 fade">
    <img src="https://www.ssbwiki.com/images/thumb/1/1f/Ice_Climbers_SSBB.jpg/250px-Ice_Climbers_SSBB.jpg" style="width:100%">
  </div>
  <div class="mySlides3 fade">
    <img src="https://www.ssbwiki.com/images/thumb/d/d4/Marth_SSBB.jpg/250px-Marth_SSBB.jpg" style="width:100%">
  </div>
  <div class="mySlides3 fade">
    <img src="https://www.ssbwiki.com/images/thumb/9/9c/Mr._Game_%26_Watch_SSBB.jpg/250px-Mr._Game_%26_Watch_SSBB.jpg" style="width:100%">
  </div>
  <div class="mySlides3 fade">
    <img src="https://www.ssbwiki.com/images/thumb/5/5a/Diddy_Kong_SSBB.jpg/250px-Diddy_Kong_SSBB.jpg" style="width:100%">
  </div>
  <div class="mySlides3 fade">
    <img src="https://www.ssbwiki.com/images/thumb/4/45/Meta_Knight_SSBB.jpg/250px-Meta_Knight_SSBB.jpg" style="width:100%">
  </div>
  <div class="mySlides3 fade">
    <img src="https://www.ssbwiki.com/images/thumb/1/17/King_Dedede_SSBB.jpg/250px-King_Dedede_SSBB.jpg" style="width:100%">
  </div>
  <div class="mySlides3 fade">
    <img src="https://www.ssbwiki.com/images/thumb/2/2a/Toon_Link_SSBB.jpg/250px-Toon_Link_SSBB.jpg" style="width:100%">
  </div>
  <div class="mySlides3 fade">
    <img src="https://www.ssbwiki.com/images/1/10/Zero_Suit_Samus_SSBB.jpg" style="width:100%">
  </div>


  <a class="prev" onclick="plusSlides(-1, 2)">&#10094;</a>
  <a class="next" onclick="plusSlides(1, 2)">&#10095;</a>
</div>
<p>Super Smash Bros. for Wii U/3DS</p>
<div class="slideshow-container">
  <div class="mySlides4 fade">
    <img src="https://www.ssbwiki.com/images/thumb/e/e1/Mario_SSB4.png/250px-Mario_SSB4.png" style="width:100%">
    <div class="text">Mario</div>
  </div>

  <div class="mySlides4 fade">
    <img src="https://www.ssbwiki.com/images/thumb/e/e2/Luigi_SSB4.png/250px-Luigi_SSB4.png" style="width:100%">
  </div>

  <div class="mySlides4 fade">
    <img src="https://www.ssbwiki.com/images/thumb/2/23/Peach_SSB4.png/250px-Peach_SSB4.png" style="width:100%">
  </div>
  
  <div class="mySlides4 fade">
    <img src="https://www.ssbwiki.com/images/thumb/d/d5/Bowser_SSB4.png/250px-Bowser_SSB4.png" style="width:100%">
  </div>
  <div class="mySlides4 fade">
    <img src="https://www.ssbwiki.com/images/thumb/e/e2/Dr._Mario_SSB4.png/250px-Dr._Mario_SSB4.png" style="width:100%">
  </div>
  <div class="mySlides4 fade">
    <img src="https://www.ssbwiki.com/images/thumb/2/29/Yoshi_SSB4.png/250px-Yoshi_SSB4.png" style="width:100%">
  </div>
  <div class="mySlides4 fade">
    <img src="https://www.ssbwiki.com/images/thumb/5/5f/Donkey_Kong_SSB4.png/250px-Donkey_Kong_SSB4.png" style="width:100%">
  </div>
  <div class="mySlides4 fade">
    <img src="https://www.ssbwiki.com/images/thumb/4/43/Diddy_Kong_SSB4.png/250px-Diddy_Kong_SSB4.png" style="width:100%">
  </div>
  <div class="mySlides4 fade">
    <img src="https://www.ssbwiki.com/images/thumb/3/32/Link_SSB4.png/100px-Link_SSB4.png" style="width:100%">
  </div>
  <div class="mySlides4 fade">
    <img src="https://www.ssbwiki.com/images/thumb/f/fd/Zelda_SSB4.png/250px-Zelda_SSB4.png" style="width:100%">
  </div>
  <div class="mySlides4 fade">
    <img src="https://www.ssbwiki.com/images/thumb/6/64/Sheik_SSB4.png/250px-Sheik_SSB4.png" style="width:100%">
  </div>
  <div class="mySlides4 fade">
    <img src="https://www.ssbwiki.com/images/thumb/2/23/Ganondorf_SSB4.png/250px-Ganondorf_SSB4.png" style="width:100%">
  </div>
  <div class="mySlides4 fade">
    <img src="https://www.ssbwiki.com/images/thumb/0/0c/Toon_Link_SSB4.png/250px-Toon_Link_SSB4.png" style="width:100%">
  </div>
  <div class="mySlides4 fade">
    <img src="https://www.ssbwiki.com/images/thumb/e/e4/Samus_SSB4.png/250px-Samus_SSB4.png" style="width:100%">
  </div>
  <div class="mySlides4 fade">
    <img src="https://www.ssbwiki.com/images/thumb/5/59/Zero_Suit_Samus_SSB4.png/250px-Zero_Suit_Samus_SSB4.png" style="width:100%">
  </div>
  <div class="mySlides4 fade">
    <img src="https://www.ssbwiki.com/images/thumb/e/ed/Kirby_SSB4.png/250px-Kirby_SSB4.png" style="width:100%">
  </div>
  <div class="mySlides4 fade">
    <img src="https://www.ssbwiki.com/images/thumb/1/1b/Meta_Knight_SSB4.png/250px-Meta_Knight_SSB4.png" style="width:100%">
  </div>
  <div class="mySlides4 fade">
    <img src="https://www.ssbwiki.com/images/thumb/9/9a/King_Dedede_SSB4.png/250px-King_Dedede_SSB4.png" style="width:100%">
  </div>
  <div class="mySlides4 fade">
    <img src="https://www.ssbwiki.com/images/thumb/7/74/Fox_SSB4.png/250px-Fox_SSB4.png" style="width:100%">
  </div>
  <div class="mySlides4 fade">
    <img src="https://www.ssbwiki.com/images/thumb/5/5f/Falco_SSB4.png/250px-Falco_SSB4.png" style="width:100%">
  </div>
  <div class="mySlides4 fade">
    <img src="https://www.ssbwiki.com/images/thumb/a/a0/Pikachu_SSB4.png/250px-Pikachu_SSB4.png" style="width:100%">
  </div>
  <div class="mySlides4 fade">
    <img src="https://www.ssbwiki.com/images/thumb/a/a6/Jigglypuff_SSB4.png/250px-Jigglypuff_SSB4.png" style="width:100%">
  </div>
  <div class="mySlides4 fade">
    <img src="https://www.ssbwiki.com/images/thumb/d/da/Mewtwo_SSB4.png/250px-Mewtwo_SSB4.png" style="width:100%">
  </div>
  <div class="mySlides4 fade">
    <img src="https://www.ssbwiki.com/images/thumb/c/c1/Charizard_SSB4.png/300px-Charizard_SSB4.png" style="width:100%">
  </div>
  <div class="mySlides4 fade">
    <img src="https://www.ssbwiki.com/images/thumb/a/af/Lucario_SSB4.png/250px-Lucario_SSB4.png" style="width:100%">
  </div>
  <div class="mySlides4 fade">
    <img src="https://www.ssbwiki.com/images/thumb/6/6f/Captain_Falcon_SSB4.png/250px-Captain_Falcon_SSB4.png" style="width:100%">
  </div>


  <a class="prev" onclick="plusSlides(-1, 3)">&#10094;</a>
  <a class="next" onclick="plusSlides(1, 3)">&#10095;</a>
</div>
<p>Super Smash Bros. Ultimate</p>
<div class="slideshow-container">
  <div class="mySlides5 fade">
    <img src="https://www.ssbwiki.com/images/thumb/4/44/Mario_SSBU.png/250px-Mario_SSBU.png" style="width:100%">
  </div>

  <div class="mySlides5 fade">
    <img src="https://www.ssbwiki.com/images/thumb/b/bb/Luigi_SSBU.png/250px-Luigi_SSBU.png" style="width:100%">
  </div>

  <div class="mySlides5 fade">
    <img src="https://www.ssbwiki.com/images/thumb/7/74/Peach_SSBU.png/250px-Peach_SSBU.png" style="width:100%">
  </div>
  
  <div class="mySlides5 fade">
    <img src="https://www.ssbwiki.com/images/thumb/4/49/Bowser_SSBU.png/250px-Bowser_SSBU.png" style="width:100%">
  </div>
  <div class="mySlides5 fade">
    <img src="https://www.ssbwiki.com/images/thumb/3/3f/Dr._Mario_SSBU.png/250px-Dr._Mario_SSBU.png" style="width:100%">
  </div>
  <div class="mySlides5 fade">
    <img src="https://www.ssbwiki.com/images/thumb/1/16/Rosalina_%26_Luma_SSBU.png/250px-Rosalina_%26_Luma_SSBU.png" style="width:100%">
  </div>
  <div class="mySlides5 fade">
    <img src="https://www.ssbwiki.com/images/thumb/2/2b/Bowser_Jr._SSBU.png/270px-Bowser_Jr._SSBU.png" style="width:100%">
  </div>
  <div class="mySlides5 fade">
    <img src="https://www.ssbwiki.com/images/thumb/8/8d/Yoshi_SSBU.png/250px-Yoshi_SSBU.png" style="width:100%">
  </div>
  <div class="mySlides5 fade">
    <img src="https://www.ssbwiki.com/images/thumb/c/c9/Donkey_Kong_SSBU.png/250px-Donkey_Kong_SSBU.png" style="width:100%">
  </div>
  <div class="mySlides5 fade">
    <img src="https://www.ssbwiki.com/images/thumb/a/a7/Diddy_Kong_SSBU.png/250px-Diddy_Kong_SSBU.png" style="width:100%">
  </div>
  <div class="mySlides5 fade">
    <img src="https://www.ssbwiki.com/images/thumb/c/c8/Zelda_SSBU.png/250px-Zelda_SSBU.png" style="width:100%">
  </div>
  <div class="mySlides5 fade">
    <img src="https://www.ssbwiki.com/images/thumb/0/00/Sheik_SSBU.png/250px-Sheik_SSBU.png" style="width:100%">
  </div>
  <div class="mySlides5 fade">
    <img src="https://www.ssbwiki.com/images/thumb/8/8a/Young_Link_SSBU.png/250px-Young_Link_SSBU.png" style="width:100%">
  </div>
  <div class="mySlides5 fade">
    <img src="https://www.ssbwiki.com/images/thumb/9/91/Ganondorf_SSBU.png/250px-Ganondorf_SSBU.png" style="width:100%">
  </div>
  <div class="mySlides5 fade">
    <img src="https://www.ssbwiki.com/images/thumb/5/56/Toon_Link_SSBU.png/250px-Toon_Link_SSBU.png" style="width:100%">
  </div>
  <div class="mySlides5 fade">
    <img src="https://www.ssbwiki.com/images/thumb/0/03/Samus_SSBU.png/250px-Samus_SSBU.png" style="width:100%">
  </div>
  <div class="mySlides5 fade">
    <img src="https://www.ssbwiki.com/images/thumb/f/f0/Zero_Suit_Samus_SSBU.png/250px-Zero_Suit_Samus_SSBU.png" style="width:100%">
  </div>
  <div class="mySlides5 fade">
    <img src="https://www.ssbwiki.com/images/thumb/0/07/Kirby_SSBU.png/250px-Kirby_SSBU.png" style="width:100%">
  </div>
  <div class="mySlides5 fade">
    <img src="https://www.ssbwiki.com/images/thumb/0/00/Meta_Knight_SSBU.png/250px-Meta_Knight_SSBU.png" style="width:100%">
  </div>
  <div class="mySlides5 fade">
    <img src="https://www.ssbwiki.com/images/thumb/f/f5/King_Dedede_SSBU.png/250px-King_Dedede_SSBU.png" style="width:100%">
  </div>
  <div class="mySlides5 fade">
    <img src="https://www.ssbwiki.com/images/thumb/2/2f/Fox_SSBU.png/250px-Fox_SSBU.png" style="width:100%">
  </div>
  <div class="mySlides5 fade">
    <img src="https://www.ssbwiki.com/images/thumb/8/80/Falco_SSBU.png/250px-Falco_SSBU.png" style="width:100%">
  </div>
  <div class="mySlides5 fade">
    <img src="https://www.ssbwiki.com/images/thumb/8/8a/Wolf_SSBU.png/250px-Wolf_SSBU.png" style="width:100%">
  </div>
  <div class="mySlides5 fade">
    <img src="https://www.ssbwiki.com/images/thumb/9/93/Pikachu_SSBU.png/250px-Pikachu_SSBU.png" style="width:100%">
  </div>
  <div class="mySlides5 fade">
    <img src="https://www.ssbwiki.com/images/thumb/6/6a/Jigglypuff_SSBU.png/250px-Jigglypuff_SSBU.png" style="width:100%">
  </div>
  <div class="mySlides5 fade">
    <img src="https://www.ssbwiki.com/images/thumb/c/c1/Pichu_SSBU.png/250px-Pichu_SSBU.png" style="width:100%">
  </div>


  <a class="prev" onclick="plusSlides(-1, 4)">&#10094;</a>
  <a class="next" onclick="plusSlides(1, 4)">&#10095;</a>
</div>
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