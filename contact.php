<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("contact.txt", "r") or die("Unable to open file!");
// output until end-of-file
while(!feof($myfile)) {
   echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>



<h3>This page is realized using PHP.</h3>

</body>
</html>