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
$database = "myspace";
$user = "webuser";
$password = "myspace@12345";

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
      if(isset($_POST['username'])){
          $username = $_POST['username'];
      
      }
      if(isset($_POST['email'])){
        $email = $_POST['email'];
    }
    if(isset($_POST['pswd'])){
        $pswrd = $_POST['pswd'];
    }


    $sql = "SELECT * FROM users WHERE username LIKE '%$username%' OR email LIKE '%$email%';";

    $results = mysqli_query($connection, $sql);

    //and fetch requsults
    if(mysqli_num_rows($results) > 0 )
    { 
       
           echo "<div class = 'left'>User already exists with this name and/or email <br></div>";
           echo "<div class = 'left'><br><a href = 'register.html'>Return to user entry </a></div>";
       } else{

        $sql = "INSERT INTO users (username,email,password,usertype) VALUES
        ('$username', '$email', '$pswrd','user')";

        if ($connection->query($sql) === TRUE) {

        echo "<div id = 'main'>An account for the user `$username` has been created</div>";

        }else {
            echo "Error: " . $sql . "<br>" . $connection->error;
          }

       }

      


       // closing connection
         mysqli_close($connection);
       
      
    

    



    }
}

?>
</body>
</html>