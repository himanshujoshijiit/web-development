<?php
    // echo "Registration Completed!!!";
    $set=mysqli_connect("localhost","root","","lms");

      if(isset($_POST['submit']))
      {
        $count=0;
        $sql="SELECT username from student2";
        $res=mysqli_query($set,$sql);

        while($row=mysqli_fetch_assoc($res))
        {
             
          if($row['username']==$_POST['username'])
          {
            $count=$count+1;
          }
        }
        
        if($count==0)
        {
          
          $fname=$_POST['first'];
          $x=$_POST['last'];
          $y=$_POST['username'];
          $z=$_POST['roll'];
          $p=$_POST['email'];
          $q=$_POST['password'];
          $r=$_POST['contact'];
           
          $qry = "INSERT INTO student2 VALUES('$fname','$x', '$y', $z, '$p', '$q','$r' )";
         mysqli_query($set, $qry ); 
         
         
          
        }

      }

    ?>