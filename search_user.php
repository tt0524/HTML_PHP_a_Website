<?php
require_once "mysql.php";

// Check Empty
if(!isset($_POST['first_name']) && !isset($_POST['last_name']) 
    && !isset($_POST['email']) && !isset($_POST['home_address'])
    && !isset($_POST['phone']) ){
	echo '<html><head><Script Language="JavaScript">alert("No Input!");</Script></head></html>' . "<meta http-equiv=\"refresh\" content=\"0;url=users.html\">";
	die();
}

$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$home_address=$_POST['home_address'];
$phone=$_POST['phone'];


// connect to DB

$conn=new Mysql();

$sql="SELECT * FROM my_customer WHERE
			first_name  like ' %" . $first_name . "%'
		and last_name  like ' %" . $last_name . "%'
		and email  like ' %" . $email . "%'
		and home_address  like ' %" . $home_address . "%'
		and (home_phone  like ' %" . $phone . "%'
				or cell_phone  like ' %" . $phone . "%')
	";
 
// excute query
$result=$conn->sql($sql);

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


