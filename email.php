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
         
        <!-- start php code -->
<?php
  $conn=mysqli_connect("localhost", "root", "") or die(mysqli_error($conn)); // Connect to database server(localhost) with username and password.
mysqli_select_db($conn,"login") or die(mysqli_error($conn)); // Select registrations database.
 
    if(isset($_POST['email']) && !empty($_POST['email'])){
       $email = $_POST['email'];
if(!filter_var($email,FILTER_VALIDATE_EMAIL))
{
echo '<div class ="stausmsg">email is not valid</div>';
}
else
{
$hash = md5( rand(0,1000) );
mysqli_query($conn,"UPDATE `info` SET `hash`='".$hash."' WHERE `email`='".$email."' AND `active`= 1 ") or die(mysqli_error($conn));
        
$to      = $email; // Send email to our user
$subject = 'Verification'; // Give the email a subject 
$message = '
 
you can login into your account by changing your password.
 
------------------------
 
To change the password click the below link:
http://localhost/511/verify.php?email='.$email.'&hash='.$hash.'
 
'; // Our message above including the link
                     
$headers = 'From:himabindhu1231@yourwebsite.com' . "\r\n"; // Set from headers
mail($to, $subject, $message, $headers); // Send our email
echo '<div class ="statusmsg">check your mail the link has been sent</div>';
}
}
             
?>


         
        <!-- stop php code -->
     
        <!-- title and description -->   
        <h3>Signup Form</h3>
        <p>Please enter your name and email</p>
         
        <!-- start sign up form -->  
        <form action="" method="post">
            <label for="email">Email:</label>
            <input type="text" name="email" value="" />
             
            <input type="submit" class="btn btn-success" value="submit" />
        </form>
        <!-- end sign up form -->
         
    </div>
    <!-- end wrap div -->
</body>
</html>
