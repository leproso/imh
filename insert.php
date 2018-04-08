<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
$name=$_POST['name'];
$client=$_POST['client'];
$active=$_POST['active'];
$q=mysqli_query($con,"INSERT INTO `course_details` (`name`,`client`,`active`) VALUES ('$name','$client','$active')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>
