<?php
    session_start();
     $conn=mysqli_connect("localhost", "root", "") or die(mysqli_error($conn));
     mysqli_select_db($conn,"login") or die(mysqli_error($conn)); 
    $pathToImage = "/new/file/path/unique/345908.png";
   /* move_uploaded_files($_FILES['file']['tmp_name'], $pathToImage);*/
    $uname=$_SESSION['username'];
    mysqli_query($conn,"INSERT info SET image WHERE username='".$uname."'");
?>
