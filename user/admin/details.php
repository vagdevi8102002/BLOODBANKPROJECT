<?php

  require_once('../connection.php');
  //echo $_POST['value'];
  $sql = "SELECT * FROM requestblood WHERE id = '".$_POST['value']."'";
  $res = mysqli_query($con, $sql);
  $row=mysqli_fetch_assoc($res);
  echo json_encode($row);
?>
