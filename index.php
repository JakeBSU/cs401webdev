<?php
   include_once('index.html');
   require('connect.php');
   session_start();
      if (isset($_SESSION['user_name'])) {
      echo "<li><a href='#'>Welcome ".$_SESSION['user_name']."!</a></li>";
   }
?>
