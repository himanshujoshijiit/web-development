<?php
    
    $set=mysqli_connect("localhost","root","","lms");

      if(isset($_POST['submit']))
      {
        
        $count=0;
        $sql="SELECT username from `admin3`";
        $res=mysqli_query($set,$sql);
$count=mysqli_num_rows($res);
if($count)
{
  echo "User already registered";
}
else{
      
  
          
          $fname=$_POST['first'];
          $x=$_POST['last'];
          $y=$_POST['adminid'];
          $z=$_POST['email'];
          $p=$_POST['password'];
          $q=$_POST['username'];
          $r=$_POST['contact'];
          
        
          $qry = "INSERT INTO admin3 VALUES('$fname','$x', '$y', '$z', '$p', '$q',$r )";
          $run=mysqli_query($set, $qry); 
          if($run)
          {
            echo "Data saves successfully";
          }
         
         
          
        

      }
      }
    ?>