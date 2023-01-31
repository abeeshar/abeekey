<?php
  require_once 'headers.php';
  echo "<br><center><span class='main'>Welcome to $appname<br><br><br><br></center>";
  if($loggedin){
    echo "$user, You are now logged in!";
  }
  else {
       echo "<center><h4>DEAR, Welcome to ABEEKEY World, This site is based on code tutorials,<br> and you are required to have an account before accessing this website.</4>";
  }
 ?>
