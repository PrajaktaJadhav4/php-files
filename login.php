<?php
require "connection.php";
$user_email = $_POST["email"];
$user_password = $_POST["password"];
$mysql_qry = "select * from info where email='$user_email' and password='$user_password';";
$mysql_qry2 = "select * from info where email = '$user_email' and category = 'Orphanage' ;";

$result = mysqli_query($conn, $mysql_qry);
$result2 = mysqli_query($conn, $mysql_qry2);
if(mysqli_num_rows($result)>0){
	if(mysqli_num_rows($result2)>0){
	echo "login success and its Orphanage";		
	}
	else{
		echo "login success and its Not a Orphanage";	
	}
}
else{
echo "login not success";
}
?>