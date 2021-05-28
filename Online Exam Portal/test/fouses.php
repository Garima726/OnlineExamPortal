<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        h1,h3
        {
            color: green;
        }
    </style>
    <title>Questions</title>
  </head>
  <body>
  <h1 class="text-center">All the questions are mandatory *</h1>
  <h3 class="text-center">Fill in the text area below</h3>
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
            $existsql = "SELECT * FROM `work`";
            $res=mysqli_query($conn, $existsql);
            while($row = mysqli_fetch_assoc($res))
            {
                echo'<div class="container">
                <form action="/fouse/test/fouses.php" method="POST">
                <h3>Question '.$row['sno'].'</h3>
                <h4>'.$row['ques'].'</h4>
                <div>
                    1. '.$row['opta'].'<br>
                    2. '.$row['optb'].'<br>
                    3. '.$row['optc'].'<br>
                    4. '.$row['optd'].'
                </div>
                <div class="row">
                  <div class="col-xl-3">
                    <input type="text" name="answer" class="my-2 form-control">
                  </div>
                </div>
                </div>';
                
                if($_SERVER["REQUEST_METHOD"]=="POST")
                {
                    $ans = $_POST['answer'];
                    $no = $_POST['answer'];
                    $sql="INSERT INTO `get` (`getsno`,`getans`) VALUES ('$no','$ans')";
                    $result = mysqli_query($conn, $sql);
                }
            }
            echo'<div class="container">
                <div>
                    <button type="submit" class="my-3 btn btn-success">Submit</button>
                </div>
            </div>';
        
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>