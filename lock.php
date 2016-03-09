<?php
include ("db.php");
session_start();
$user_check=$_SESSION['login_user'];

$sql=("SELECT username from admin where username='$user_check' ");

$result=$conn->query($sql);

if ($result->num_rows == 0) {
  header ("Location:login.php");
}
 ?>
