<?php

$server_name="35.202.184.238";
$username="root";
$password="";
$database_name="Hackathon";

$conn=mysqli_connect($server_name, $username, $password, $database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{	
	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
    $password = $_POST['password'];


	 $sql_query = "INSERT INTO register (name,gender,email,password)
	 VALUES ('$name','$gender','$email','$password')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "New Details Entry inserted successfully !";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>