<?php session_start();
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
        <body>
        <div class = navbar><p><ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="characters.php">Characters</a></li>
  <li><a href="rankings.php">Rankings</a></li>
  <li><a href="games.php">Games</a></li>
  <li><a href="login.php">Login</a></li>
  <li><a href="register.php">Sign-Up</a></li>
  </ul>
  </p></div>
        <hr />
        <?php if (isset($_SESSION['messages'])) {
         foreach ($_SESSION['messages'] as $message) {
             echo $message, '<br>';
         }
        } 
        ?>
<center><div>
        <h1>Login</h1>
        <form action="login_handler.php" method="post">
            <label for="username">Username</label>
            <input value= "<?php echo isset($_SESSION['bad_login']['username']) ? $_SESSION['bad_login']['username'] : ''; ?>" type="text" id="username" name="username"><br>
            <label for="password">Password</label>
            <input value="<?php echo isset($_SESSION['bad_login']['password']) ? $_SESSION['bad_login']['password'] : ''; ?>" type="text" id="password" name="password"><br>
            <input type="submit" name="login" value="Login">
        </form>
</center></div>
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