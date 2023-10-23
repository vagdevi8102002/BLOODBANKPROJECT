<?php
require_once("connection.php");

if(isset($_POST['submit']))
{
  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql="select * from signup where username='".$username."' AND password='".$password."'";
  $result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)==1)
{
  $sql0 = "UPDATE `signup` SET adm_status= '0'";
  $r0 = mysqli_query($con,$sql0);
  $sql1 = "UPDATE `signup` SET adm_status= '1' WHERE username='$username' ";
  $r1=mysqli_query($con, $sql1);
  echo "<script> window.location.assign('admin/index.php?page=0'); </script>";
  exit();
}
else {
  echo "<script>alert('Your credentials are Wrong');</script>";
  echo "<script> window.location.assign('login.php'); </script>";
  exit();
}
}
 ?>
