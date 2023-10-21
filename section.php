<?php
session_start();
$_SESSION['username']='Roshan_patil';
$_SESSION['email']='rp8812@gmail.com';
echo "Welcome ," .$_SESSION['username'];
echo "your emai is : ," .$_SESSION['email'];
$_SESSION['email']='new_roshanpatil@gamail.com';
echo "updated emai :".$_SESSION['email'];
unset($_SESSION['email']);
echo"email unset :".(isset($_SESSION['email'])) ? "email is set" : "email is not set";
session_destroy();
echo "session Destroyed.";
?>
