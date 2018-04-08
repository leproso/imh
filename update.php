<?php
include "db.php";

if(isset($_GET['update']))
{
$id=$_GET['id'];
$name=$_GET['name'];
$client=$_GET['client'];
$active=$_GET['active'];
  
$q=mysqli_query($connection,"UPDATE im_home SET name = '$name', client = '$client', active = '$active' WHERE id = $id");
if($q)
echo "success";
else
echo "error";
}
?>
