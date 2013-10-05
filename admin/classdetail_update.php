<?php
include "include/connection.php";
session_start();
if (isset($_SESSION['name'])) {
$query=mysql_query("select * from class_detail where id=".$_GET['id']."");
$row=mysql_fetch_array($query);
if(isset($_POST['upclassdetail'])){
    $id=$_POST['classid'];
	$stdID=$_POST['stdID'];
	$classID=$_POST['classID'];
	$rollno=$_POST['rollno'];
	
$query=mysql_query("update class_detail set id='$id', student_id='$stdID', class_id='$classID', class_id='$rollno' where id=".$_GET['id']."");
if($query){
header('location:classdetail_show.php');
exit;	
}
}
} else {
    header('Location:index.php');
}
include "layout/header.php";
include "html/classdetail_update.html";
include "layout/rightside.php";
include "layout/footer.php";
?>
