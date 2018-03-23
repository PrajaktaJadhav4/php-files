<?php
require "connection.php";
$user_name = $_POST["name"];
$fetch_qry="SELECT name, email, category ,orphanage_name, orphanage_address ,orphanage_mobile_number,Requirements,description FROM info WHERE orphanage_name ='$user_name' ";
$result= mysqli_query($conn,$fetch_qry);
$responce = array();


if(mysqli_num_rows($result)>0) {
	while($row = mysqli_fetch_array($result))
	{
	array_push($responce, array("name"=>$row[0], "email"=>$row[1], "orphanage_name"=>$row[3], "orphanage_address"=>$row[4],"orphanage_mobile_number"=>$row[5],"Requirements"=>$row[6],"description"=>$row[7]));
	}
	echo json_encode($responce);
}
else{
		echo "No record found";
	}


$conn->close();
?>