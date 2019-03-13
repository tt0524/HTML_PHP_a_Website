<?php
header("Content-type:text/html;charset=UTF-8");
$username=$_POST['username'];
$password=$_POST['password'];

// default username & password
$GLOBALS['MY_username'] = "admin";
$GLOBALS['MY_password'] = "12345678";

/*
 * check if usename / password field are non-blank / valid
 * */
if(checkEmpty($username,$password)){

    if(checkUser($username,$password)){
        header("location: users.html ");     // if pass validation, jump to users.html
    }
}

 
 
// check username / password blank
function checkEmpty($username,$password){
    if($username==null||$password==null){
        echo '<html><head><Script Language="JavaScript">alert("Username or Password blank!");</Script></head></html>' . "<meta http-equiv=\"refresh\" content=\"0;url=login.html\">";
    }
    else{
        return true;
    }

}
 
// check username / password valid
function checkUser($username,$password){

    if($username==$GLOBALS['MY_username']) {
        if($password==$GLOBALS['MY_password']) {
            return true;
         }else{
            echo '<html><head><Script Language="JavaScript">alert("Incorrect password!");</Script></head></html>' . "<meta http-equiv=\"refresh\" content=\"0;url=login.html\">";
            return false;
        }
     }else{
        echo "Incorrect username or password!";
        return false;
    }

}
 

