<?php
header("Content-type:text/html;charset=UTF-8");
session_start();

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
        $_SESSION['username'] = $username;
        accessGrant();
    }
}

 
 
// check username / password blank
function checkEmpty($username,$password){
    if(!$username||!$password){
        fieldBlank();
        die();
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
        wrongPassword();
    }
}   



// print a message indicating wrong password
function accessGrant(){
    header("location: users.html ");
}


// print a message indicating wrong password
function wrongPassword(){
    echo '<html><head><Script Language="JavaScript">alert("Yor entered an invalid password, access denied");</Script></head></html>' . 
    "<meta http-equiv=\"refresh\" content=\"0;url=login.html\">";  
}

// print a message indicating that access is denied
function accessDenied(){
    echo '<html><head><Script Language="JavaScript">alert("Access Denied");</Script></head></html>' . 
    "<meta http-equiv=\"refresh\" content=\"0;url=login.html\">";  
}

// print a message indicating that fields have been left blank
function fieldBlank() {
    echo '<html><head><Script Language="JavaScript">alert("Username or Password blank!");</Script></head></html>' . 
    "<meta http-equiv=\"refresh\" content=\"0;url=login.html\">";
}


 

