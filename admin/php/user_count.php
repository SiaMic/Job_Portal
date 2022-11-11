<?php
session_start();
include("config.php");
$db = new dbObj();
$conn =  $db->getConnstring();

if(isset($_REQUEST['count_user'])){
 $sql="select count(*) as counter from users where type!='admin'";
}elseif(isset($_REQUEST['count_item'])){
 $sql="select count(*) as counter from jobs";
}elseif(isset($_REQUEST['count_order'])){
 $sql="select count(*) as counter from category";
}elseif(isset($_REQUEST['count_new_order'])){
 $sql="select count(*) as counter from applied";
}

$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
echo $row['counter'];
?>