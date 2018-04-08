<?php
 include "db.php";
 echo 'hello';

 $id=$_POST['id'];
 $name=$_POST['name'];
 $client=$_POST['client'];
 $active=$_POST['active'];
  
 echo $id + ' // ' + $name + ' // ' + $client + ' // ' + $active;
 $q=mysqli_query($connection,"INSERT INTO `im_home` (`name`,`client`,`active`) VALUES ('$name','$client','$active' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";

 ?>
