<?php
   require('Dao.php');
   session_start();
      if (isset($_SESSION['user_name'])) {
      echo "<li><a href='#'>Welcome ".$_SESSION['user_name']."!</a></li>";
   }
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
	<p>Main Page</p></div></div>
</header>
<div class = navbar><p><ul>
<li><a href="index.php">Home</a></li>
<li><a href="characters.html">Characters</a></li>
<li><a href="rankings.html">Rankings</a></li>
<li><a href="games.html">Games</a></li>
<li><a href="login.html">Login</a></li>
<li><a href="register.php">Sign-Up</a></li>
</ul>
</p></div>
<body>
<hr />
<div><p>Popular Characters</p><ol>
	<li>Character 1</li>
	<li>Character 2</li>
	<li>Character 3</li>
</ol></div>
<div><p>Site News</p><p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p></div>
<div><p>Top Players</p></div>
<ol>
	<li>Player 1</li>
	<li>Player 2</li>
	<li>Player 3</li>
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