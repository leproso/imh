<?php
 include "db.php";
 echo 'hello';
 if(isset($_GET['update']))
 {
 $id=$_GET['id'];
 $name=$_GET['name'];
 $client=$_GET['client'];
 $active=$_GET['active'];
  
 echo $id + ' // ' + $name + ' // ' + $client + ' // ' + $active + ' // ' + $_GET['update'] + ' </br> ';
 $q=mysqli_query($connection,"INSERT INTO `im_home` (`name`,`client`,`active`) VALUES ('$name','$client','$active' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>
