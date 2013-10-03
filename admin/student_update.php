<?php
include "include/connection.php";
session_start();
$query=mysql_query("select * from student where id=".$_GET['id']."");
$row=mysql_fetch_array($query);

if(isset($_POST['updt'])){
$sname=$_POST['std_name'];
$sfname=$_POST['std_fname'];
$date=$_POST['hasDatepicker'];

$query=mysql_query("update student set name='$sname', father_name='$sfname', admission_date='$date' where id=".$_GET['id']."");
if($query){
	header('location:student_show.php');
	exit();
	}else{
		echo "some error not update recored";
		}
}

include "html/student_update.html";
?>
