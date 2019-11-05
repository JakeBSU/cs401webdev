<?php
//register.php

/**
 * Include ircmaxell's password_compat library.
 */
require 'lib/password.php';

/**
 * Include our MySQL connection.
 */
require 'Dao.php';

session_start();
$valid = true;
$dao = new Dao();


//If the POST var "register" exists (our submit button), then we can
//assume that the user has submitted the registration form.
if(isset($_POST['register'])){
    
    //Retrieve the field values from our registration form.
    $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
    $email = !empty($_POST['email']) ? trim($_POST['email']) : null;
    $psw1 = !empty($_POST['password']) ? trim($_POST['password']) : null;
    $psw2 = !empty($_POST['password2']) ? trim($_POST['password2']) : null;

    if (empty($username)) {
        $messages[] = "Please enter a username.";
        $valid = false;
    }
    if (empty($psw1)) {
        $messages[] = "Please enter a password.";
        $valid = false;
    }
      if ($psw1 != $psw2) {
        $messages[] = "Passwords don't match.";
        $valid = false;
      }
      if(strlen($username) < 4) {
              $messages[]= "Username must be between 4 and 20 characters.";
              $valid = false;
          }
          
      if(strlen($username) > 20) {
              $messages[]= "Username must be between 4 and 20 characters.";
              $valid = false;
          }
      if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) { 
          $messages[] = "Invalid Email. Please enter a valid email address.";
              $valid = false;
          }
      if(!preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/',$psw1)) {
          $messages[] = "Password must contain: at least one number (0-9), one symbol (!@#$), one uppercase letter (A-Z), and one lowercase letter (a-z). Must be at least 8 characters long.";
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
        $_SESSION['form_input'] = null;
    }

    //TO ADD: Error checking (username characters, password length, etc).
    //Basically, you will need to add your own error checking BEFORE
    //the prepared statement is built and executed.
    
    //Now, we need to check if the supplied username already exists.
    
    //Construct the SQL statement and prepare it.
    
    
    //Fetch the row.
    $row = $dao->checkUsername($username);
    
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
    
    $result = $dao->createUser($username,$passwordHash,$email);
    
    //If the signup process is successful.
    if($result){
        //What you do here is up to you!
        header("Location: login.php");
    }
    
}
?>