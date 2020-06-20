<?php
    echo "Registration Completed!!!";
    $set=mysqli_connect("localhost","root","","lms");

      if(isset($_POST['submit']))
      {
        $fname=$_POST['bid'];
        $x=$_POST['name'];
        $y=$_POST['authors'];
        $z=$_POST['edition'];
        $p=$_POST['quantity'];
        $q=$_POST['department'];
        $r=$_POST['status'];
            $qry = "INSERT INTO books VALUES('$fname','$x','$y','$z','$p','$q','$r')";
         mysqli_query($set, $qry ); 
         
     }

?>