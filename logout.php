<?php
//log out and head to login page
$_SESSION['username'] = null;
unset($_SESSION['username']);
setcookie("username","",time()-1);   //clear cookie
setcookie("password","",time()-1);
header("location: login.html ");