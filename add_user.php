<?php require_once "mysql.php";?>
<html>
<head>
<title>Add User</title>
</head>
<body>
<h3>Add New User</h3>
<form id="add_user" name="add_user" method="post" action="insert_user.php">
First Name: <input type="text" name="first_name"/><br/>
Last Name: <input type="text" name="last_name"/><br/>
email: <input type="text" name="email"/><br/>
home address: <input type="text" name="home_address"/><br/>
home phone: <input type="int" name="home_phone"/><br/>
cell phone: <input type="int" name="cell_phone"/><br/>
<?php
$sql="select * from dept";
$result=mysql_query($sql,$con);
while($rows=mysql_fetch_row($result)){
echo "<option value=".$rows[0].">".$rows[1]."</option>";
}
?>
</select><br/>

用户组名：<select name="user_group">
    <?php
    $sql="select * from usergroup";
    $result=mysql_query($sql,$con);
    while($rows=mysql_fetch_row($result)){
        echo "<option value=".$rows[0].">".$rows[1]."</option>";
    }
    ?>
    </select><br/>
    <br/>
<input type="submit" value="Add"/>
</form>
</body>
</html>