<?php
$handle = @fopen('contact.txt','r');
if(@handle){
	while (($buffer = fgets($handle, 4096)) !== false){
		echo "<p?>$buffer</p>";
		echo "<br>";
	}
	if(!feof($handle)){
		echo "</p>Error: unexpected fgets() fail</p>";
	}
	fclose($handle);
}
?>