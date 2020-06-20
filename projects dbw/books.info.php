<?php
 include("connect.php");
  

 if(isset($_POST['button']))
 {
    

     $id=$_POST['name'];
     $query=mysqli_query($set,"SELECT * from approve where name like '%$id%' ");
    


     while($row=mysqli_fetch_assoc($query))
     {
         echo $row['bid']." ";
         echo $row['name']." ";
         echo $row['authors']." ";
         echo $row['edition']." ";
         echo $row['quantity']." ";
         echo $row['department']." ";
         echo $row['status']." ";

     }
 } 
 ?>
 