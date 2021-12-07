<!DOCTYPE html>
<html lang = "en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel = "stylesheet" href="..\client\css\index.css">
<script src = "..\client\js\index.js"></script>
</head>
<body>

            <?php
           session_start();
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

      if(isset($_GET['id'])){
          $id = $_GET['id'];
    
      $sql = "DELETE from posts where id=$id";
   
      if ($connection->query($sql) === TRUE) {

        header("Location: index.php");

        }else {
            echo "Error: " . $sql . "<br>" . $connection->error;
          }
        }else{

        }

          if(isset($_GET['user'])){
            $user = $_GET['user'];
    
        if(isset($_GET['idd'])){
            $idd = $_GET['idd'];
        }
        if(isset($_GET['comment'])){
            $comment = $_GET['comment'];
        }
        $sql = "DELETE from comments where id=$idd AND username = '$user' AND comment = '$comment'";
     
        if ($connection->query($sql) === TRUE) {
           
            header("Location: comments.php?id=$idd");
          
  
          }else {
              echo "Error: " . $sql . "<br>" . $connection->error;
            }
  
        }else{

        }
 
 

  }
            
         
?>




 
</body>
</html>