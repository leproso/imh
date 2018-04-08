<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];
 $name=$_POST['name'];
 $client=$_POST['client'];
 $active=$_POST['active'];
 $q=mysqli_query($con,"INSERT INTO `im_home` (`name`,`client`,`active`) VALUES ('$name','$client','$active' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>
