<?php
  require_once('../connection.php');
  $sql = "DELETE FROM requestblood WHERE id = '".$_POST['value']."'";
  $res = mysqli_query($con, $sql);
?>
