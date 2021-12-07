<!DOCTYPE html>
<html lang = "en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel = "stylesheet" href="../client/css/index.css">
<script src = "../client/js/index.js"></script>
</head>
<body>
<header id = "masthead">
<nav>
  <ul>
            <li class="left"><b><a href="index.php">MySpace</a></b></li>
            <li class="right "><a href="login.php"><button class = "btn btn-primary">Log In</button</a></li>
            <li class="right "><a href="index.php"><button class = "btn btn-primary">Home</button</a></li>        
            
         </ul>
</nav>
</header>

<?php

$host = "localhost";
$database = "db_28337426";
$user = "28337426";
$password = "28337426";

$connection = mysqli_connect($host, $user, $password, $database);

$error = mysqli_connect_error();
if($error != null)
{
  $output = "<p>Unable to connect to database!</p>";
  exit($output);
}
else
{
  
  if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(isset($_POST['mail'])){
        $mail = $_POST['mail'];
    }
    if(isset($_POST['newpsw'])){
        $newpsw = $_POST['newpsw'];
    }

       $sql = "SELECT * FROM users WHERE email LIKE '%$mail%';";

       $results = mysqli_query($connection, $sql);

       if(mysqli_num_rows($results) > 0 )
    { 
        $sql2 = "UPDATE users SET password = '$newpsw' WHERE email = '$mail';";

        if ($connection->query($sql2) === TRUE) {

            echo "<div id = 'main'>Password Updated!</div>";
    
            }else {
                echo "Error: " . $sql . "<br>" . $connection->error;
              }


    }else{
        echo "<div class = 'left'>User doesnt exist<br></div>";
    }



       // closing connection
         mysqli_close($connection);
       
      
    

    



    }
}

?>
</body>
</html>