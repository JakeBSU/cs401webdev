<?php
session_start();
require 'Dao.php';
$dao = new Dao();
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
    <p>Rankings</p></div>
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
<?php
try {
	$con= new PDO('mysql:host=us-cdbr-iron-east-05.cleardb.net;dbname=heroku_9604bb6ecbe8698', "b9719fdd1787f7", "00f7255a");
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$query = "SELECT * FROM players";
	//first pass just gets the column names
	print "<table> n";
	$result = $con->query($query);
	//return only the first row (we only need field names)
	$row = $result->fetch(PDO::FETCH_ASSOC);
	print " <tr> n";
	foreach ($row as $field => $value){
	 print " <th>$field</th> n";
	} // end foreach
	print " </tr> n";
	//second query gets the data
	$data = $con->query($query);
	$data->setFetchMode(PDO::FETCH_ASSOC);
	foreach($data as $row){
	 print " <tr> n";
	 foreach ($row as $name=>$value){
	 print " <td>$value</td> n";
	 } // end field loop
	 print " </tr> n";
	} // end record loop
	print "</table> n";
	} catch(PDOException $e) {
	 echo 'ERROR: ' . $e->getMessage();
	} // end tr
?>
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