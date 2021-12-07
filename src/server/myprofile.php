<!DOCTYPE html>
<html lang = "en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel = "stylesheet" href="../client/css/index.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src = "../client/js/index.js"></script>

</head>
<body>
<header id = "masthead">
<nav>
  <ul>
            <li class="left"><b><a href="index.php">MySpace</a></b></li>
            <li class="right "><a href="login.php"><button class = "btn btn-primary">
              
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
    if(isset($_SESSION['user']) AND isset($_SESSION['type'])){
      echo "Log out";
    } else{
      echo "Log in";
    }
    
  }
              ?>
            
          </button</a></li>
            <li class="right">
              
            <a href="#"><img src = "../client/img/search.png" id="search_image"></a>
            
            <form method="POST" id="search_form" name="search_form" onsubmit="validateSearch(); loaddata();" action="searchresults.php">
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
  <a href="myposts.php" class = "nav">My Posts</a>
  <a href="explore.php" class = "nav">Explore</a>
  <a href="myprofile.php" class = "nav active">My Profile</a>

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

  <form id = "editform" action = "myprofile.php?edit" method = "post" onsubmit = 'return validateForm();'>
  Choose a field to edit:
<select name="field" id="field" onchange = "var f =document.getElementById('field');var e = document.getElementById('fieldselect'); e.innerText = f.value ">
  <option value="username" id='user' selected="selected">username</option>
  <option value="email">email</option>
  <option value="password">password</option>
</select><br><br>
<div> <p id = "fieldselect" nowrap>Choose an option</p><input type="text" id = "newvalue" class = 'newvalue' name = 'newvalue' placeholder = "new value"></div><br><br>
<button class = 'btn'  id='editsubmit'  type = 'submit'> submit </button>
</form>

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

if(isset($_GET['edit'])){
if(!empty($_POST['field'])){
  $selected = $_POST['field'];
}

if(isset($_POST['newvalue'])){
  $newvalue = $_POST['newvalue'];
}

$sqll = "UPDATE users SET $selected = '$newvalue' WHERE username = '{$_SESSION['user']}'";

if ($connection->query($sqll) === TRUE) {

  echo "<script>window.alert('success! please log in again to view changes')</script>";
  header("Location: myprofile.php");
 
  

}else{
  echo "<script>window.alert('failure:(')</script>";
  header("Location: myprofile.php");
}
}
}
?>

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
  if(isset($_SESSION['user']) AND isset($_SESSION['type'])){
  $s ="SELECT COUNT(username) FROM posts WHERE username = '{$_SESSION['user']}';" ;
  
  $r = mysqli_query($connection, $s);
  while($row = mysqli_fetch_assoc($r))

  {
      $cnt = $row['COUNT(username)'];
  }
    
    echo "<h1 id='name'> {$_SESSION['user']} </h1>    
    <button class = 'btn edit' id='edit' onclick = 'hide()' style='margin-top:2%'>edit profile</button><br><br><br>";
    echo "<h4 id='name'> $cnt Posts</h4><br><br><br> ";

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

<div id = "sideright">

</div>
<script>
 
 function validateForm() {
    var x = document.forms["editform"]["newvalue"].value;
    if (x == "" || x == NULL) {
      
      document.forms["editform"]["newvalue"].style.border = '1px solid red';
          
        alert(" Field must be filled out");

        event.preventDefault();

        
    }
    return true;

}

function validateSearch() {
    var x = document.forms["search_form"]["search"].value;
    if (x == "" || x == NULL) {
      
        alert("Search Field must be filled out");

        event.preventDefault();
        
    }
  
}


function hide() {
  var x = document.getElementById("editform");
  var y = document.getElementById("edit")
  if (x.style.display === "none") {
    x.style.display = "block";
    y.innerText = "cancel";
  } else {
    x.style.display = "none";
    y.innerText = "edit profile";
  
  }
}


</script>
</body>
</html>