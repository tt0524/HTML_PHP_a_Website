<?php
require_once "mysql.php";

// Check Empty
if(!isset($_POST['first_name'])){
    die('first_name is not define');
}
if(!isset($_POST['last_name'])){
    die('age is not define');
}
if(!isset($_POST['email'])){
    die('email is not define');
}
if(!isset($_POST['address'])){
    die('address is not define');
}
if(!isset($_POST['home_phone'])){
    die('home phone is not define');
}
if(!isset($_POST['cell_phone'])){
    die('cell phone is not define');
}
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$address=$_POST['address'];
$home_phone=$_POST['home_phone'];
$cell_phone=$_POST['cell_phone'];

// connect to DB

$conn=new Mysql();

$sql="INSERT INTO my_customers(first_name, last_name, email, address, home_phone, cell_phone) VALUES ('$first_name','$first_name','$email','$address',$home_phone,$cell_phone)";
 
// excute query
$result=$conn->sql($sql);

// # ofrows affectd
$num=$conn->getResultNum($sql);
echo "rows affected: ".$num;
echo "\n";

//close connection to DB
$conn->close();