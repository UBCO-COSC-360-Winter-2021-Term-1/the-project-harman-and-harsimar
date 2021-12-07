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
  

if(isset($_POST['commentpost'])){
  $commentpost = $_POST['commentpost'];
}

$idclick = $_GET['id'];


$sql = "INSERT INTO comments(username,comment,id) VALUES ('" . $_SESSION['user'] . "','$commentpost','$idclick')";
if($commentpost != "" || $commentpost != NULL){
if ($connection->query($sql) === TRUE) {

    header("Location: comments.php?id=$idclick");



  }else {
      echo "Error: " . $sql . "<br>" . $connection->error;
    }
  }else{

}
}
?>