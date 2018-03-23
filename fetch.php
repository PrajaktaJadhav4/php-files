<?php
require "connection.php";

$fetch_qry="SELECT name, email, category ,orphanage_name, orphanage_address FROM info WHERE category ='Orphanage' ";
$result= mysqli_query($conn,$fetch_qry);
$responce = array();


if(mysqli_num_rows($result)>0) {
	while($row = mysqli_fetch_array($result))
	{
	array_push($responce, array("name"=>$row[0], "email"=>$row[1], "orphanage_name"=>$row[3], "orphanage_address"=>$row[4]));
	}
	echo json_encode($responce);
}
else{
		echo "No record found";
	}


$conn->close();
?>