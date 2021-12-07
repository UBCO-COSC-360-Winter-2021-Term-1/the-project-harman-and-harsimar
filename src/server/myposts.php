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
            <li class="right "><a href = "login.php?logout"><button class = "btn btn-primary" id='logged'>
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
            
            
            </button></a></li>
            <li class="right ">
              
            <a href="#"><img src = "../client/img/search.png" id="search_image"></a>
            
            <form method="POST" id="search_form" name="search_form" onsubmit="validateSearch()" action="searchresults.php">
            <input type = "text" placeholder = "Search.." id="search" name = "search" class = "search">
           </form>
          
          </li>
            
         </ul>
</nav>
</header>

<div class="bodyContainer">
<div class="sidebar" id = "mysidebar">
<br>
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<a href="index.php" class = " nav">Home</a>
  <a href="myposts.php" class = "nav active">My Posts</a>
  <a href="explore.php" class = "nav">Explore</a>
  <a href="myprofile.php" class = "nav">My Profile</a>



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

    if(isset($_SESSION['user']) AND isset($_SESSION['type'])){
        echo "<p id = 'status'> Logged in as : {$_SESSION['user']} <br> user type: {$_SESSION['type']} </p>";
      } else{
        echo "<p id = 'status'>Currently not logged in</p>";
      }
      
    }
  
    ?>
  </div>
  <div id="main">
  <button class="openbtn" id = "openbtn" onclick="openNav()">&#9776;</button>

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
    if(isset($_SESSION['user']) AND isset($_SESSION['type'])){

    echo "<h1 id='name'>" . $_SESSION['user'] . "'s posts</h1><br><br><br>";

    $sql = "SELECT username,title,description,id FROM posts WHERE username = '{$_SESSION['user']}'";

  $results = mysqli_query($connection, $sql);
 

  while($row = mysqli_fetch_assoc($results))

  {
    echo " <a href = 'comments.php?id={$row['id']}' id = 'comment'> <div id = 'post'>
  
    <i>  {$row['username']} </i>   
    <h2> {$row['title']} </h2>
    <hr>
    <p> {$row['description']} </p>
    
  </div>  </a>             
     <br><br>";    

  }
    }else{
        echo "you are not logged in , <a href = 'login.php'> Log In </a> to view this page";
    }
}
?>

</div>
<script>
function validateSearch() {
    var x = document.forms["search_form"]["search"].value;
    if (x == "" || x == NULL) {
      
        alert("Search Field must be filled out");

        event.preventDefault();
        
    }
  
}
</script>
</body>
</html>

