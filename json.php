<?php
include "db.php";
$data=array();
$q=mysqli_query($connection,"select * from `im_home`");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>
