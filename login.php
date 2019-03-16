<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>OUR > LJI</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel ="stylesheet" href="style.css" type="text/css">
    <style> 
body{
 background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('https://images.unsplash.com/photo-1526738549149-8e07eca6c147?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&dl=fabian-grohs-672016-unsplash.jpg=img.jpg');
background-size: cover;
background-position: center;
}
</style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">OUR > LJI </a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="login.php">Login</a></li>
      <li><a href="register.php">Sign up</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
  </div>
</nav>
 <div id="wrap">
  
<?php
session_start();
$conn =mysqli_connect("localhost","root","") or die("failed".mysqli_error($conn));
mysqli_select_db($conn,"login")or die("failed".mysqli_error($conn));
if(isset($_POST['username']) && !empty($_POST['username']) AND isset($_POST['password']) && !empty($_POST['password'])){
    $uname = $_POST['username']; // Turn our post into a local variable
    $pass = md5($_POST['password']); // Turn our post into a local variable
    $sql ="SELECT `username`, `password` FROM `info` WHERE `username`='".$uname."' AND `password`='".$pass."'";
$result=mysqli_query($conn,$sql);
$row =mysqli_fetch_array($result);
if($row['username']==$uname && $row['password']==$pass)
{
 $_SESSION['username']=$uname;
 $_SESSION['password']=$pass;
 header("location:home.php");
}
else
{
 echo '<div class ="statusmsg">invalid password.</div>';
}
}
?>
     
    <!-- start wrap div -->  
            
        <!-- start php code -->

         
        <!-- stop php code -->
     
        <!-- title and description -->   
        <h3>Login Here...!!</h3>
         
        <!-- start sign up form -->  
        <form action="" method="post">
           <div class ="loginbox">
            <input type="text" name="username" placeholder="username" /><br><br>
            <input type="password" name="password" placeholder="password" /><br><br>             
            <input type="submit" class="btn btn-success" value="Login" /><br><br>
            <a style= 'float:left' href ="email.php">Forget password?</a>
            <i style= 'float:right'>Don't have an account?<a href ="register.php">Sign up</a></i>
        </div>
        </form>
        <!-- end sign up form -->
         
    </div>
    <!-- end wrap div -->
</body>
</html>
