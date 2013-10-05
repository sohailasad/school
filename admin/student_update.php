<?php
include "include/connection.php";
session_start();
if (isset($_SESSION['name'])) {
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
} else {
    header('Location:index.php');
}
include "layout/header.php";
include "html/student_update.html";
include "layout/rightside.php";
include "layout/footer.php";
?>
