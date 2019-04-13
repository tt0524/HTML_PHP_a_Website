<?php
require_once "mysql.php";

$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$address=$_POST['home_address'];
$home_phone=$_POST['home_phone'];
$cell_phone=$_POST['cell_phone'];

// Check Empty
if(!$first_name){
    echo '<html><head><Script Language="JavaScript">alert("Empty First Name!");</Script></head></html>' . "<meta http-equiv=\"refresh\" content=\"0;url=users.html\">";
    die();
}
if(!$last_name){
    echo '<html><head><Script Language="JavaScript">alert("Empty Last Name!");</Script></head></html>' . "<meta http-equiv=\"refresh\" content=\"0;url=users.html\">";
    die();
}
if(!$email){
    echo '<html><head><Script Language="JavaScript">alert("Empty Email!");</Script></head></html>' . "<meta http-equiv=\"refresh\" content=\"0;url=users.html\">";
    die();
}
if(!$address){
    echo '<html><head><Script Language="JavaScript">alert("Empty Address!");</Script></head></html>' . "<meta http-equiv=\"refresh\" content=\"0;url=users.html\">";
    die();
}
if(!$home_phone){
    echo '<html><head><Script Language="JavaScript">alert("Empty Home Phone!");</Script></head></html>' . "<meta http-equiv=\"refresh\" content=\"0;url=users.html\">";
    die();
}
if(!$cell_phone){
    echo '<html><head><Script Language="JavaScript">alert("Empty Cell Phone!");</Script></head></html>' . "<meta http-equiv=\"refresh\" content=\"0;url=users.html\">";
    die();
}


// connect to DB

$conn=new Mysql();

$sql="INSERT INTO my_customers(first_name, last_name, email, home_address, home_phone, cell_phone) VALUES ('$first_name','$last_name','$email','$home_address',$home_phone,$cell_phone)";
 
// excute query
$result=$conn->sql($sql);

//close connection to DB
$conn->close();
// successfully added
echo '<html><head><Script Language="JavaScript">alert("New User Added!");</Script></head></html>' . "<meta http-equiv=\"refresh\" content=\"0;url=users.html\">";

die();
