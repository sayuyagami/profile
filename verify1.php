<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>NETTUTS > Sign up</title>
    <link href="style.css" type="text/css" rel="stylesheet" />
     <style> 
body{
 background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('https://images.unsplash.com/photo-1526738549149-8e07eca6c147?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&dl=fabian-grohs-672016-unsplash.jpg=img.jpg');
background-size: cover;
background-position: center;
}
</style>
</head>
<body>
    <!-- start header div --> 
    <div id="header">
        <h3>NETTUTS > Sign up</h3>
    </div>
    <!-- end header div -->   
     
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
                 
    $search = mysqli_query($conn,"SELECT email, hash, active FROM info WHERE email='".$email."' AND hash='".$hash."' AND active='0'") or die(mysqli_error($conn)); 
    $match  = mysqli_num_rows($search);
                 
    if($match > 0){
        // We have a match, activate the account
        mysqli_query($conn,"UPDATE info SET active='1' WHERE email='".$email."' AND hash='".$hash."' AND active='0'") or die(mysqli_error($conn));
        echo '<div class="statusmsg">Your account has been activated, you can now login</div>';
    }else{
        // No match -> invalid url or account has already been activated.
        echo '<div class="statusmsg">The url is either invalid or you already have activated your account.</div>';
    }
                 
}else{
    // Invalid approach
    echo '<div class="statusmsg">Invalid approach, please use the link that has been send to your email.</div>';
}
             
        ?>
        <!-- stop PHP Code -->
 
   <a style='float:right;padding:10px' href ="login.php">login here</a>      
    </div>
    <!-- end wrap div --> 
</body>
</html>
