<?php
session_start();
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
  

if(isset($_POST['titlepost'])){
  $titlepost = $_POST['titlepost'];
}
if(isset($_POST['descpost'])){
    $descpost = $_POST['descpost'];
  }

$idclick = $_GET['id'];
$idclick++;

$sql = "INSERT INTO posts(username,title,description,id) VALUES ('" . $_SESSION['user'] . "','$titlepost','$descpost','$idclick')";
if($titlepost != "" || $titlepost != NULL){
if ($connection->query($sql) === TRUE) {

    header("Location: index.php");



  }else {
      echo "Error: " . $sql . "<br>" . $connection->error;
    }
  }else{

}
}
?>