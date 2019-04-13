<?php
require_once "mysql.php";

$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$home_address=$_POST['home_address'];
$phone=$_POST['phone'];

// Check Empty
if(!$first_name && !$last_name && !$email && !$home_address && !$phone ){
	echo '<html><head><Script Language="JavaScript">alert("No Input!");</Script></head></html>' . "<meta http-equiv=\"refresh\" content=\"0;url=users.html\">";
	die();
}

// echo $first_name;
// echo $last_name;
// echo $email;
// echo $home_address;
// echo $phone;

echo "%".$first_name."%";
echo "select * from my_customers 
		where first_name like \"%$first_name%\"
		and last_name like \"%$last_name%\"
		and email like \"%$email%\"
		and home_address like \"%$home_address%\"
		and (home_phone like \"%$phone%\"
			or cell_phone like \"%$phone%\"
		 ";

// connect to DB
$conn=new Mysql();

$sql="select * from my_customers where first_name like \"%$first_name%\"
		";

 
// excute query
$result=$conn->sql($sql);

// # of rows affectd
$num=$conn->getResultNum($sql);
echo "Rows Affected: ".$num;

echo "<table border=\"1\" cellspacing=\"0\"
        style=\"height: 90px; font-size: 10pt;\" cellpadding=\"10\">
        <thead>
        <tr>
            <th style=\"width: 80px;\">ID</th>
            <th style=\"width: 120px;\">First Name</th>
            <th style=\"width: 120px;\">Last Name</th>
            <th style=\"width: 220px;\">Email</th>
            <th style=\"width: 220px;\">Address</th>
            <th style=\"width: 220px;\">Home phone</th>
            <th style=\"width: 220px;\">Cell phone</th>
        </tr>
        </thead>
        <tbody>";
                            
/** Fetch each record in result set */
for ($counter = 0; $row = mysqli_fetch_row($result); $counter++) {
    echo "<tr>";
    foreach ($row as $key => $value) {
        echo "<td>$value</td>";
    }
    echo "<tr><br>";
}
echo "</tbody></table>";

//close connection to DB
$conn->close();

echo "<a href='users.html'> <strong> Click to go back </strong></a>";


