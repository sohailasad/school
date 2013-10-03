<?php
include "include/connection.php";
session_start();
$query=mysql_query("select * from class where id=".$_GET['id']."");
$row=mysql_fetch_array($query);
if(isset($_POST['upclass'])){
    $id=$_POST['classid'];
	$class=$_POST['class'];
	
$query=mysql_query("update class set id='$id', class='$class' where id=".$_GET['id']."");
if($query){
header('location:class_show.php');
exit;	
}
}
include "html/class_update.html";
?>
