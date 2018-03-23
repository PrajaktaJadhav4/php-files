<?php
require "connection.php";
$user_name = $_POST["name"];
$user_email = $_POST["email"];
$user_password = $_POST["password"];
$user_category = $_POST["category"];
$user_o_name = $_POST["o_name"];
$user_o_address = $_POST["o_address"];
$user_mobile_no = $_POST["mobile_no"];
$user_requirements = $_POST["requirements"];
$user_description = $_POST["description"];


$mysql_qry = "insert into info (name,email,password,category,orphanage_name,orphanage_address,orphanage_mobile_number, Requirements,description)values('$user_name','$user_email','$user_password','$user_category','$user_o_name','$user_o_address','$user_mobile_no','$user_requirements','$user_description');";
if($user_category == 'Orphanage'){
	echo "Orphanage";
}
if($conn->query($mysql_qry) === TRUE){
	if($user_category == 'Orphanage')
	{
	echo "Orphanage Insert success";
	}
	else
	{
	echo " non Orphanage Insert success";
	}

}
else{
echo "Error" . $mysql_qry . "<br>" . $conn->error;
}
$conn->close();
?>