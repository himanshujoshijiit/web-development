<!DOCTYPE html>
<html>
<head>
</head>
  <title>Student Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

  <style type="text/css">
    section
    {
      margin-top: -20px;
    }
  </style>   
   
   
 <body>

    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand active">ONLINE LIBRARY MANAGEMENT SYSTEM</a>
          </div>
          <?php
          echo $_session['login_user'];
          ?>
          <ul class="nav navbar-nav">
            <li><a href="index.html">HOME</a></li>
            <li><a href="">BOOKS</a></li>
            <li><a href="">FEEDBACK</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">

            <li><a href="student_login.html"><span class="glyphicon glyphicon-log-in"> LOGIN</span></a></li>
            <li><a href="student_login.html"><span class="glyphicon glyphicon-log-out"> LOGOUT</span></a></li>
            <li><a href="registration.html"><span class="glyphicon glyphicon-user"> SIGN UP</span></a></li>
          </ul>

      </div>
    </nav>
<section>
  <div class="reg_img"><meta name="viewport" content="width=device-width, initial-scale=1"></div>
<style type="text/css">
body {
    background-color: white;
  font-family: "Lato", sans-serif;
   
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
 

 

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div style="color:white">
  <?php
  echo "<img class=img-circle profile_img' height=300 width=300 src='https://images.pexels.com/photos/67636/rose-blue-flower-rose-blooms-67636.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500".$_session['pic']." '>";
  echo " ".$_session['login_user'];
  ?>
  <a href="#">add books</a>
  <a href="#">delete books</a>
  <a href="#">Book Request</a>
  <a href="#">Issue information</a>
</div>

 </div>
<span style="font-size:30px;cursor:pointer color=black" onclick="openNav()">&#9776; open</span>
<?php
if(isset($_Post['login_user']))
{
    if(isset($_session['login_user']))
    {
        mysqli_query($set,"insert into books values('$_Post[bid]','$_Post[name]','$_Post[authors]','$_Post[edition]','$_Post[quantity]','$_Post[department]')")
        ?>
        <script type="text/javascript">
        alert("book added sucessfully.");
        </script>
        <?php
    }
    else
    {
        ?>
        <script type="text/javascript">
        alert("you need to login first.");
        </script>
    }
}

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
</body>
</html>