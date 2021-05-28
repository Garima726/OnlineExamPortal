<?php
    $username=$_POST["username"];
	$password=$_POST["password"];
	
	$servername="localhost";
	$username1="root";
	$password1="";
	$dbname="fouses";

	$conn=new mysqli($servername, $username1, $password1, $dbname);
	if($conn-> connect_error){
		die("connection error".$conn->connect_error);
	}
    
    $sql= "UPDATE users SET password='$password' WHERE username='$username'";
    $result= $conn->query($sql);
    header("location:divert1.html");
    
	$conn->close();
?>