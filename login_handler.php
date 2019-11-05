<?php

//login.php

session_start();

/**
 * Include ircmaxell's password_compat library.
 */
require 'lib/password.php';

/**
 * Include our MySQL connection.
 */
require 'Dao.php';
$dao = new Dao();


//If the POST var "login" exists (our submit button), then we can
//assume that the user has submitted the login form.
if(isset($_POST['login'])){
    
    //Retrieve the field values from our login form.
    $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
    $passwordAttempt = !empty($_POST['password']) ? trim($_POST['password']) : null;
    
    //Fetch row.
    $user = $dao->loginUser($username);
    
    //If $row is FALSE.
    if($user === false){
        //Could not find a user with that username!
        $messages[] = "Could not find a user with that username.";
        foreach ($messages as $message) {
            echo $message, '<br>';
        }
        exit();
    } else if ($user == true){
        //User account found. Check to see if the given password matches the
        //password hash that we stored in our users table.
        
        //Compare the passwords.
        $validPassword = password_verify($passwordAttempt, $user['password']);
        
        //If $validPassword is TRUE, the login has been successful.
        if($validPassword){
            
            //Provide the user with a login session.
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['username'];
            $_SESSION['logged_in'] = time();
            $_SESSION['messages'] = null;
            $_SESSION['bad_login'] = null;
            //Redirect 
            header('Location: home.php');
            exit;
            
        } if(!$validPassword){
            //$validPassword was FALSE. Passwords do not match.
            $messages[] = "Username/password do not match. Please try again.";
            $_SESSION['messages'] = $messages;
            $_SESSION['bad_login'] = $_POST;
            header("Location: login.php");
            exit;
        }
    }
    
}
 
?>
