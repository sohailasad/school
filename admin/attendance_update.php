<?php
include "include/connection.php";
session_start();
if (isset($_SESSION['name'])) {
$query=mysql_query("select * from attendance where id=".$_GET['id']."");
$row=mysql_fetch_array($query);
if(isset($_POST['attandance'])){
    $roll_no=$_POST['roll_no'];
	$class_id=$_POST['class_id'];
	$date=$_POST['hasDatepicker'];
	$status=$_POST['status'];
	
$query=mysql_query("update attendance set roll_no='$roll_no', class_id='$class_id', date='$date', status='$status' where id=".$_GET['id']."");
if($query){
header('location:attendance_show.php');
exit;	
}
}
} else {
    header('Location:index.php');
}
include "layout/header.php";
include "html/attandance_update.html";
include "layout/rightside.php";
include "layout/footer.php";
?>
