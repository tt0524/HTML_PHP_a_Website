<?php
//log out and head to login page
session_start();
$_SESSION['username'] = null;
unset($_SESSION['username']);
session_destroy();
setcookie("username","",time()-1);   //clear cookie
setcookie("password","",time()-1);
header("location: login.html ");