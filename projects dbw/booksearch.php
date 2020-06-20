 
<!DOCTYPE html>
<html>
<head>

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
   
   
   <div class="di2">
            <a class="a1">ONLINE LIBRARY MANAGEMENT SYSTEM</a>
          </div>
      <div class="di1">
          
           
          <ul class="di3">
            <li class="li1"><a href="HOME.html">HOME</a></li>
            <li class="li1"><a href="booksearch.php">BOOKS</a></li>
            <li class="li1"><a href="feedback.php">FEEDBACK</a></li>

            <li class="li1"><a href=""><span class="glyphicon glyphicon-log-in"> LOGIN</span></a></li>
            <li class="li1"><a href=""><span class="glyphicon glyphicon-log-out"> LOGOUT</span></a></li>
            <li class="li1"><a href="99.php"><span class="glyphicon glyphicon-user"> SIGN UP</span></a></li>
          </ul>

      </div>
      <br>
<section>
  <div class="reg_img"><meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
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
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div style="color:white">
   
  
  <a href="author.php">Author Search</a>
  <a href="issue_info.php">Issue information</a>
</div>

 </div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
   

    <div class="box2">
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;"> Library Management System</h1>
        <h1 style="text-align: center; font-size: 25px;">Book Search</h1>
      <form name="Registration" action="book1.php" method="POST">
        
        
          <input class="form-control" type="text" name="name" placeholder="book Name" required=""> <br>
        <input class="btn btn-default" type="submit" name="search" value="search" style="color: black; width: 70px; height: 30px" align="center"> 
        <div class="srch">
         </form>
        

  </div>
  
</section>

</body>
</html>