 
 <?php
  
include("connect.php");

 if(isset($_POST['search']))
 {
      $query=mysqli_query($set,"SELECT * from books where name like '%$_POST[name]%' ");
     $query_run=mysqli_query($set,$query);
    

     while($row=mysqli_fetch_assoc($query_run))
     {
         echo $rows['bid']."<br>";
         echo $rows['name']."<br>";
         echo $rows['author']."<br>";
         echo $rows['edition']."<br>";
         echo $rows['quantity']."<br>";
         echo $rows['department']."<br>";
         echo $rows['status']."<br>";

     }
 }
 ?>