<?php
//register.php

/**
 * Start the session.
 */
session_start();
$valid = true;

/**
 * Include ircmaxell's password_compat library.
 */
require 'lib/password.php';

/**
 * Include our MySQL connection.
 */
require 'connect.php';


//If the POST var "register" exists (our submit button), then we can
//assume that the user has submitted the registration form.
if(isset($_POST['register'])){
    
    //Retrieve the field values from our registration form.
    $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
    $email = !empty($_POST['email']) ? trim($_POST['email']) : null;
    $psw1 = !empty($_POST['password']) ? trim($_POST['password']) : null;
    $psw2 = !empty($_POST['password2']) ? trim($_POST['password2']) : null;

    if (empty($username)) {
        $messages[] = "Please enter a username";
        $valid = false;
      }
      if ($psw1 != $psw2) {
        $messages[] = "Passwords dont match";
        $valid = false;
      }
      if(strlen($username) < 4) {
              $messages[]= "DISPLAY NAME MUST BE MORE THAN 4 CHARACTERS LONG AND SHORTER THAN 20";
              $valid = false;
          }
          
      if(strlen($username) > 20) {
              $messages[]= "DISPLAY NAME MUST BE MORE THAN 4 CHARACTERS LONG AND SHORTER THAN 20";
              $valid = false;
          }
      if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) { 
          $messages[] = "PLEASE ENTER A VALID EMAIL";
              $valid = false;
          }
      if(!preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/',$psw1)) {
          $messages[] = "Password must contain at least one: number,symbol, uppercase letter, lowercase letter. And 8 characters long.";
          $valid = false;
      }
      if (!$valid) {
          $_SESSION['messages'] = $messages;
          $_SESSION['form_input'] = $_POST;
          header("Location: register.php");
          exit();
      }
      if ($valid) {
        $_SESSION['messages'] = null;
        $_SESSION['form_input'] = $_POST;
    }

    //TO ADD: Error checking (username characters, password length, etc).
    //Basically, you will need to add your own error checking BEFORE
    //the prepared statement is built and executed.
    
    //Now, we need to check if the supplied username already exists.
    
    //Construct the SQL statement and prepare it.
    $sql = "SELECT COUNT(username) AS num FROM users WHERE username = :username";
    $stmt = $pdo->prepare($sql);
    
    //Bind the provided username to our prepared statement.
    $stmt->bindValue(':username', $username);
    
    //Execute.
    $stmt->execute();
    
    //Fetch the row.
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
    //If the provided username already exists - display error.
    //TO ADD - Your own method of handling this error. For example purposes,
    //I'm just going to kill the script completely, as error handling is outside
    //the scope of this tutorial.
    if($row['num'] > 0){
        $messages[] = "That username already exists.";
        $_SESSION['messages'] = $messages;
        header("Location: register.php");
        exit();
    }
    
    //Hash the password as we do NOT want to store our passwords in plain text.
    $passwordHash = password_hash($psw1, PASSWORD_BCRYPT, array("cost" => 12));
    
    //Prepare our INSERT statement.
    //Remember: We are inserting a new row into our users table.
    $sql = "INSERT INTO users (username, password, email) VALUES (:username, :password, :email)";
    $stmt = $pdo->prepare($sql);
    
    //Bind our variables.
    $stmt->bindValue(':username', $username);
    $stmt->bindValue(':password', $passwordHash);
    $stmt->bindValue(':email', $email);

    //Execute the statement and insert the new account.
    $result = $stmt->execute();
    
    //If the signup process is successful.
    if($result){
        //What you do here is up to you!
        header("Location: login.php");
    }
    
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
    <p>Main Page</p></div>
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
<?php if (isset($_SESSION['messages'])) {
    foreach ($_SESSION['messages'] as $message) {
        echo $message, '<br>';
    }
} ?>
<h1>Register</h1>
        <form action="register.php" method="post">
            <label for="username">Username</label>
            <input type="text" id="username" name="username"><br>
            <label for="password">Password</label>
            <input type="text" id="password" name="password"><br>
            <label for="password2">Re-type Password</label>
            <input type="text" id="password2" name="password2"><br>
            <label for="email">Email</label>
            <input type="text" id="email" name="email"><br>
            <input type="submit" name="register" value="Register"></button>
        </form>
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
