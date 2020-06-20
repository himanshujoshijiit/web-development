<?php

include("connect.php");

if(isset($_POST['submit']))
{
  $x=$_POST['username'];
  $y=$_POST['password'];
  

  $count=0;
  $res=mysqli_query($set,"SELECT * from `admin3` where username='$x' && password='$y';");
  $count=mysqli_num_rows($res);
  if($count==0)
  {
      ?>
      <script type="text/javascript">
      alert("the username or password doesnot match");
      </script>
      <?php
  }
  else
  ?>
  <script type="text/javascript">
  window.location="booksearch_admin.php"
  </script>
  <?php
  }


?>