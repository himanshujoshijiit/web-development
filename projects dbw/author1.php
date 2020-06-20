<?php
 include("connect.php");
  

 if(isset($_POST['search']))
 {
    

     $id=$_POST['authors'];
     $query=mysqli_query($set,"SELECT * from books where name like '%$id%' ");
    


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
 <br>
 <html>
 <body>
 <form name="Registration" action="approval.php" method="POST">
        
        <div class="login">
          <input class="form-control" type="text" name="bid" placeholder="bid" required=""> <br>
           
          <input class="btn btn-default" type="submit" name="submit" value="Sign Up" style="color: black; width: 70px; height: 30px"> </div>
      </form>
 </body>
</html>
