<?php
include("../connection.php");
if(isset($_POST["submit"]))
{
  $username	 = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
//$cpassword = $_POST["cpassword"];
  $sql1 = "SELECT * FROM signup WHERE (username='$username' OR email='$email')";
  $r1 = mysqli_query($con,$sql1);
  if(mysqli_num_rows($r1)>0)
  {
    $row = mysqli_fetch_assoc($r1);
    if($email==isset($row['email']))
    {
      echo "<script>alert('Email already exists');</script>";
      echo "<script> window.location.assign('login.php'); </script>";
    }
    else if($username==isset($row['username']))
    {
      echo "<script>alert('Username already exists');</script>";
      echo "<script> window.location.assign('login.php'); </script>";
    }
  }
  else
  {
    $sql = "INSERT INTO signup(username,email,password) VALUES ('$username', '$email','$password')";
    $result=mysqli_query($con,$sql);

    if($result)
    {
      echo "Data inserted";
    }
    else {
      echo "dni";
    }
  }
}
?>
