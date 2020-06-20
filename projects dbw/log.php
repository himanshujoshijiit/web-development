<?php

if(isset($_post['submit']))
{
    $x=$_post['username'];
    $y=$_post['password'];
  $count=0;
  $res=mysqli_query($set,"select * from `student2` where username=$x AND password=$y;");
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
  window.location="booksearch.php"
  </script>
  <?php
  }


?>