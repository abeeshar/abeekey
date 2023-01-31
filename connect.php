<?php
$user = 'root';
$pass ='';
$db = 'world';
$db = new mysqli('localhost', $user, $pass, $db) or die('Unable to connect');
print 'Great work!!!';
?>
