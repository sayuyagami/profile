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
     
    <!-- start wrap div -->   
    <div id="wrap">
        <!-- start PHP code -->
        <?php
         
            $conn=mysqli_connect("localhost", "root", "") or die(mysqli_error($conn)); // Connect to database 
            mysqli_select_db($conn,"login") or die(mysqli_error($conn)); // Select registration database.
            if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
    // Verify data
    $email = $_GET['email']; // Set email variable
    $hash = $_GET['hash']; // Set hash variable
                 
    $search = mysqli_query($conn,"SELECT email, hash, active FROM info WHERE email='".$email."' AND hash='".$hash."' AND active='1'") or die(mysqli_error($conn)); 
    $match  = mysqli_num_rows($search);
    //echo $match;
    if($match>0)
    {
     if(isset($_POST['npass']) && !empty($_POST['npass']) AND isset($_POST['rpass']) && !empty($_POST['rpass']))
     {
      $npass=$_POST['npass'];
      $rpass=$_POST['rpass'];
      if($npass===$rpass)
      {
      $pass = md5($npass);
      mysqli_query($conn,"UPDATE `info` SET `password`='".$pass."' WHERE email='".$email."' AND hash='".$hash."' AND active='1'") or die("updating failed".mysqli_error($conn));
      header("location:login.php");
      echo '<div class ="statusmsg">password updated,Login now!!</div>';
     }
   }
}else{
          echo '<div class ="statusmsg">invalid approach!!</div>';
}
}       
 ?>
        <!-- stop PHP Code -->
    <h3>change your password</h3>
         
        <!-- start sign up form -->  
        <form action="" method="post">
           <div class ="loginbox">
            <input type="text" name="npass" placeholder="Enter new password" /><br><br>
            <input type="password" name="rpass" placeholder="Re-enter your password" /><br><br>             
            <input type="submit" class="btn btn-success" value="Update" /><br><br>
            </div>
        </form>
       
         
    </div>
    <!-- end wrap div --> 
</body>
</html>
