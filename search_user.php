<?php
require_once "mysql.php";

// Check Empty
if(!isset($_POST['first_name']) && !isset($_POST['last_name']) 
    && !isset($_POST['email']) && !isset($_POST['home_address'])
    && !isset($_POST['home_phone']) && !isset($_POST['cell_phone']) ){
    die('No Input!');
    header("location: users.html ");
}

$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$address=$_POST['home_address'];
$home_phone=$_POST['home_phone'];
$cell_phone=$_POST['cell_phone'];

// connect to DB

$conn=new Mysql();

$sql="INSERT INTO my_customers(first_name, last_name, email, home_address, home_phone, cell_phone) VALUES ('$first_name','$last_name','$email','$home_address',$home_phone,$cell_phone)";
 
// excute query
$result=$conn->sql($sql);

// # ofrows affectd
$num=$conn->getResultNum($sql);
//close connection to DB
$conn->close();
die('New User Added');
header("location: users.html ");
