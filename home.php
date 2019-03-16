<html>
<head>
<!--<link rel="stylesheet" type="text/css" href="style.css">-->
    <title>OUR >LJI</title>
<style> 
body{
 background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('https://images.unsplash.com/photo-1485988412941-77a35537dae4?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&dl=bram-naus-200967-unsplash.jpg=img.jpg');
background-size: cover;
background-position: center;
}
   
#header{
    height: 100px; /* Set header height */
    background: #464646; /* Set header background color */
}
 
#header h3{
    margin-left:40px;
    margin-top:-100px;
    font-family:Times New Roman;
    font-style:oblique;
    font-size:70px;
    color: #FFFFF3; /* Set header heading(top left title ) color */
    padding:10px;/* Set padding, to center it within the header */
    font-weight: normal; /* Set font weight to normal, default it was set to bold */
}
#header i{
 margin-left:210px;  
 font-size:20px;
 color:#FFF;
}
</style>
<body>
    <link rel="stylesheet" href="menu.css" type="text/css">
    <!-- start header div -->
    <div class ="container-fluid"><div id="main"><div id="header">
        <span style="font-size:30px;cursor:pointer" onclick="openNav()" open>&#9776;</span>
        <i style='margin-left:180px'> LIFE </i><br>                                                                                           
        <i>JOURNEY</i><br>
        <i>IDEAS</i><br>
<h3><b style='color:red'>O</b><b style='color:yellow'>U</b><b style='color:lightgreen'>R</b></h3>                                                                                                  
<br><br>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a class="active" href="home.php">Home</a>
  <a href="profile.php">Myprofile</a>
  <a href="settings.php">Settings</a>
  <a href="photos.php">photos</a>
  <a href="login.php">Logout</a>
</div>
  <h1 style ='color:white'> Welcome to the Home Page</h1>
     <p style='color:#C0C0C0;font-size:30px'> "Find a best path and have a journey which will lead your life to your dreams with your ideas" </p>
</div>
</div>
</div>
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
</head>
</body>
</html> 
