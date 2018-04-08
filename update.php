<?php
 include "db.php";
 echo 'hello';
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];
 $name=$_POST['name'];
 $client=$_POST['client'];
 $active=$_POST['active'];
  
 echo $id + ' // ' + $name + ' // ' + $client + ' // ' + $active + ' // ' + $_POST['update'] + ' </br> ';
 $q=mysqli_query($connection,"INSERT INTO `im_home` (`name`,`client`,`active`) VALUES ('$name','$client','$active' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>
