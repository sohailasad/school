<?php
include "include/connection.php";
session_start();
$query=mysql_query("select * from marks where id=".$_GET['id']."");
$row=mysql_fetch_array($query);
if(isset($_POST['updtmark'])){
    $id=$_POST['maksid'];
	$rollno=$_POST['rollno'];
	$classid=$_POST['classid'];
	$totalmarks=$_POST['totalmarks'];
	$obtnmarks=$_POST['obtnmarks'];
$query=mysql_query("update marks set id='$id', roll_no='$rollno', class_id='$classid', total_marks='$totalmarks', obtain_marks='$obtnmarks' where id=".$_GET['id']."");
if($query){
header('location:marks_show.php');
exit;	
}
}
include "html/marks_update.html";
?>