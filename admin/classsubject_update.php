<?php
include "include/connection.php";
session_start();
$query=mysql_query("select * from  class_subjects where id=".$_GET['id']."");
$row=mysql_fetch_array($query);
if(isset($_POST['upclass_subject'])){
    $id=$_POST['subjid'];
	$classid=$_POST['classid'];
	$subectid=$_POST['subectid'];
	
	
$query=mysql_query("update  class_subjects set id='$id', class_id='$classid', subject_id='$subectid' where id=".$_GET['id']."");
if($query){
header('location:classsubject_show.php');
exit;	
}
}
include "html/classsubject_update.html";
?>
