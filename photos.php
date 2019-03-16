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
 background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('https://images.unsplash.com/photo-1485988412941-77a35537dae4?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&dl=bram-naus-200967-unsplash.jpg=img.jpg');
background-size: cover;
background-position: center;
}
#header{
    height: 40px; /* Set header height */
    background: #464646; /* Set header background color */
}

#header h3{
    margin-left:40px;
    margin-top:-45px;
    padding:10px;
}
</style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script> 
<body>
<link rel="stylesheet" href="menu.css" type="text/css">
<div class ="container-fluid"><div id="main"><div id="header">
        <span style="font-size:30px;cursor:pointer" onclick="openNav()" open>&#9776;</span>
        <h3><b style='color:red'>O</b><b style='color:yellow'>U</b><b style='color:lightgreen'>R</b><i style='color:#C0C0C0'> > LJI</i></h3>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a class="active" href="home.php">Home</a>
  <a href="profile.php">Myprofile</a>
  <a href="settings.php">Settings</a>
  <a href="photos.php">photos</a>
  <a href="login.php">Logout</a>
</div>
<form action="upload.php" method="post">
<button style ='margin-left:50px' type="image" id="file" class="btn btn-primary" id="add">Add photos</button><br><br>
<img style ='margin-left:30px;width:200px;height:200px' class="btn" src="https://cdn4.iconfinder.com/data/icons/vectory-bonus-3/40/button_add-512.png" ></img>
</form>
</div></div></div>
</head>
</body>
</html>
