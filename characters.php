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