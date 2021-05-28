<?php
        $servername="localhost";
        $username1="root";
        $password1="";
        $dbname="fouses";
        $conn=mysqli_connect($servername, $username1, $password1, $dbname);
        if(!$conn)
        {
            die("Error:".mysqli_connect_error());
        }
		
		if($_SERVER["REQUEST_METHOD"]=="POST")
        {
			$ans = $_POST['answer'];
			$sql="INSERT INTO get (getans) VALUES ('$ans')";
			$result = mysqli_query($conn, $sql);
        }
?>