<?php
require "connection.php";
$user_name = $_POST["name"];
$user_address =$_POST["address"];
$user_email = $_POST["email"];
$user_mobile_no = $_POST["mobile_no"];
$user_requirements = $_POST["requirements"];
$user_description = $_POST["description"];



$mysql_qry = "UPDATE info SET orphanage_address = '$user_address' , email = '$user_email' , orphanage_mobile_number = '$user_mobile_no' , Requirements = '$user_requirements' , description = '$user_description' WHERE orphanage_name = '$user_name' AND category = 'Orphanage';";

if($conn->query($mysql_qry) === TRUE){
	{
	echo "update success";
	}
}
else{
echo "Error" . $mysql_qry . "<br>" . $conn->error;
}
$conn->close();
?>