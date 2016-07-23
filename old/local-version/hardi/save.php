<?php
include('cn.php');
$data = serialize($_POST);

$query = "INSERT INTO hdata values ('','$data',NOW())";

if( mysql_query($query) ) {
	echo "<center><h1>Data Saved Succesfully </h1></center>";
}
else {
	echo "<center><h1>Error No Save Record. </h1></center>";
	}
?>