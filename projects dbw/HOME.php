<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Online Library Management System
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      
<style type="text/css">
	nav
	{
		float: right;
		word-spacing: 30px;
		padding: 20px;
	}
	nav li 
	{
		display: inline-block;
		line-height: 80px;
	}
</style>
</head>


<body>
	 
	<div class="wrapper">
		<header>
		<div class="logo">
			 <h1 style="color: white;">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
        </div>
        <?php
          if($_session['login_user'])
          {?>
            <nav>
            <ul>
                <li><a href="HOME.html">HOME</a></li>
                <li><a href="login.php">BOOKS</a></li>
                <li><a href="99.php">REGISTRATION</a></li>
                <li><a href="login.php">LOGOUT</a></li>
                <li><a href="admin_login.php">ADMIN_LOGIN</a></li>
                <li><a href="">FEEDBACK</a></li>
            </ul>
        </nav>
        <?php
          }
          else
          {
              ?>
              	<nav>
				<ul>
					<li><a href="HOME.html">HOME</a></li>
					<li><a href="login.php">BOOKS</a></li>
					<li><a href="99.php">REGISTRATION</a></li>
					<li><a href="login.php">STUDENT_LOGIN</a></li>
					<li><a href="admin_login.php">ADMIN_LOGIN</a></li>
					<li><a href="">FEEDBACK</a></li>
				</ul>
			</nav>

          }

        ?>

			 
		</header>
		<section>
			<div class="sec_img">
	
			<div class="w3-content w3-section" style="width: 100%; height: 400px">
				<img class="mySlides w3-animate-left" src=""style="width: 100%">
				 
			</div>
				 
	
<script type="text/javascript">
	var a=0;
	carousel();

	function carousel()
	{
		var i;
		var x= document.getElementsByClassName("mySlides");

		for(i=0; i<x.length; i++)
		{
			x[i].style.display="none";
		}

		a++;  
		if(a > x.length) {a = 1}
			x[a-1].style.display = "block";
			setTimeout(carousel, 5000);
	}
</script>

			 
			<div class="box">
				 <h1 style="text-align: center; font-size: 35px;">Welcome to Library</h1>
				<h1 style="text-align: center;font-size: 25px;">Opens at: 09:00 am </h1>
				<h1 style="text-align: center;font-size: 25px;">Closes at: 09:00 pm</h1>
			</div>

		</div>
		</section>
		<footer>
			
			<p style="color:white;text-align: center;">
				<br>
				Email:&nbsp Online.library@gmail.com <br><br>
				Mobile:&nbsp &nbsp +919834573679
				
			</p>

		</footer>

	</div>
</body>
</html>