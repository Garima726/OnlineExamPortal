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
    
    $sql= "SELECT * from users WHERE username='".$username."' AND password='".$password."'";
    $result= $conn->query($sql);
    $row= mysqli_fetch_array($result, MYSQLI_BOTH);
    
    if($row['username']== $username && $row['password']==$password){
        header("location:test/home.php?$username");
    }
    else{
        echo "Go back and retry...";
    }
	$conn->close();
?>