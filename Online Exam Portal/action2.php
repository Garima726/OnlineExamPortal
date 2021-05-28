<?php
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
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
	
	$sql="INSERT into users (fname, lname, username, password) VALUES ('$fname', '$lname', '$username', '$password')";
	
	if ($conn->query($sql) === TRUE){
	header("location:divert1.html");
    }else{
	echo "Error".$sql."<br>".$conn->error;
    }

	$conn->close();
?>