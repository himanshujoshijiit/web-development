<?php
include("connect.php");
$id =$_POST['bid'];
 $query ="DELETE from books where `bid`=$id";
 $result = mysqli_query($set,$query);
 if($result)
 {
   echo'data deleted';

}
else{
    echo'data not  deleted';
}

?>