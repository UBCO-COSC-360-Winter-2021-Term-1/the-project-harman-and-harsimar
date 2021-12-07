<!DOCTYPE html>
<html lang = "en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel = "stylesheet" href="..\client\css\comments.css">
<script src = "..\client\js\index.js"></script>
</head>
<body>
<header id = "masthead">
<nav>
  <ul>
            <li class="left"><b><a href="index.php">MySpace</a></b></li>
            <li class="right "><a href="login.php?logout"><button class = "btn btn-primary"  id='logged'>
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
    if(isset($_SESSION['user']) AND isset($_SESSION['type'])){
      echo "Log out";
    } else{
      echo "Log in";
    }
    
  }
              ?>
          
          </button</a></li>
            <li class="right "><a href="index.php"><button class = "btn btn-primary">Home</button</a></li>
            <li class="right ">
              
            <a href="#"><img src = "img/search.png" id="search_image"></a>
            
            <form method="POST" id="search_form" name="search_form" onsubmit="return validateForm()" action="searchresults.php">
            <input type = "text" placeholder = "Search.." id="search" name = "search" class = "search">
           </form>
          
          </li>
          
            
         </ul>
</nav>
</header>

<div class="bodyContainer">


<div id="main">
  

 

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
  
    $idclick = $_GET['id'];
  $sql = "SELECT username,title,description,id FROM posts where id = '$idclick'";

  $results = mysqli_query($connection, $sql);
 
 

  while($row = mysqli_fetch_assoc($results))

  {
    echo " <div id = 'postfullmain'>
  
    <i>  {$row['username']} </i>   
    <h2> {$row['title']} </h2>
   
    <p> {$row['description']} </p>
    <hr>
    
  </div>            
     <br><br>";    

  }

  if(isset($_SESSION['user']) AND isset($_SESSION['type'])){
    echo "
    <form id = 'commentform' action = 'processcomments.php?id={$idclick}' method = 'post'>
    <input type = 'text' id = 'commentpost' class = 'commentpost'  name = 'commentpost' placeholder = 'make a comment..' rows='4' cols='100'>
    
   <br> <br> 
    <button type = 'submit' class = 'btn btn-primary'> submit </button>
    </form>
    <br><br><br>";
    } else{
    
    }


$sql2 = "SELECT username,comment,id FROM comments where id = '$idclick'";


$results2 = mysqli_query($connection, $sql2);

while($row = mysqli_fetch_assoc($results2))

{
  echo " <div id = 'postfull'>

  <i>  {$row['username']} </i>   
  <p> {$row['comment']} </p>
  ";    
   if(isset($_SESSION['user']) AND isset($_SESSION['type']) AND $_SESSION['type'] == 'admin'){
    echo"<a href='deletecomment.php?user={$row['username']}&idd={$row['id']}&&comment={$row['comment']}' class = 'nav'>Remove</a>";
  }

  echo "</div><br><br>";

}

}


?>
  

</div>

<div id = "sideright">

</div>
<script>
 
 function validateForm() {
    var x = document.forms["search_form"]["search"].value;
    if (x == "" || x == NULL) {
        alert("Search Field must be filled out");
        return false;
    }

}


</script>

</body>
</html>