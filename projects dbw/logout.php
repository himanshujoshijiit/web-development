<?php
session_start();
if(isset($_session['login_user']))
{
 unset($_session['login_user']);   
}
header("location:login.php");
?>