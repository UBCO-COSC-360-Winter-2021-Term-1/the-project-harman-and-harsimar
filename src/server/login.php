<html>

<head>
    <title>
        LOGIN PAGE
    </title>
    <link rel="stylesheet" type="text/css" href="../client/css/login.css" media="screen" />
</head>

<body>


    <div class="box-form">
        <div class="left">
            <h2>

                Welcome to Login Page

            </h2>
            <br> <br> <br>
            <div class="inputs">
                 <form action="login.php" method="POST" id='login' onsubmit = 'validateForm()'>
                <label>
                    Username :
                </label>
                <input type="text" placeholder="user name" id="user" name="user" class="user">
                <br>
                <br>
                <label>
                    Password :
                </label>
                <input type="password" placeholder="password" id="pass" name="pass" class="pass">
                <br>
                <a href="../client/recoverpasss.html">
                    <p>forget password?</p>
                </a>
                <br>
                <br>
                <button type = "submit">Login</button>
               </form>
                <br>
                <br>
                <p>Don't have an account? <a href="../client/register.html">Create Your Account</a> it takes less than a minute
                </p>
                <p>Go Back <a href="index.php">Home</a>
                </p>

                <script>
           
        <?php
        
  session_start();
  if(isset($_GET['logout'])) {
    unset($_SESSION['user']);
    unset($_SESSION['type']);
    }
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
  
  
    if(isset($_POST['user'])){
      $user = $_POST['user'];
    }
    if(isset($_POST['pass'])){
      $pass = $_POST['pass'];
    }
  
    $sql = "SELECT username,password,usertype from users where username = '$user' AND password = '$pass'";
  
    $results = mysqli_query($connection, $sql);
  
    if(mysqli_num_rows($results) > 0 )
  { 
  
    $_SESSION['user'] = $user;
    while($row = mysqli_fetch_assoc($results)){
      $_SESSION['type'] = $row['usertype'] ;
    }   
    header("Location: index.php");
   
    
  }else{
      echo "window.alert('wrong credentials');";
  }
  }
  ?>
           
  </script>

            </div>

        </div>
        <div class="right">
            <img src="..\client\img\cakeshop.png" id="right">
        </div>
        
   
</div>
</body>
<script>
    function validateForm() {
        var x = document.forms["login"]["user"].value;
        if (x == "" || x == NULL) {

            document.forms["login"]["user"].style.border = '1px solid red';
            event.preventDefault();


        }
        var y = document.forms["login"]["pass"].value;
        if (y == "" || y == NULL) {

            document.forms["login"]["pass"].style.border = '1px solid red';
            event.preventDefault();


        }
        
        return true;

    }

</script>

</html>