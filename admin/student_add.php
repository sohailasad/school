<?php
include "include/connection.php";
session_start();
if(isset($_POST['std'])){
	$sname=$_POST['std_name'];
	$sfname=$_POST['std_fname'];
	$date=$_POST['hasDatepicker'];
	if(empty($sfname)){
		die('Enter the name of student');
		}
	if(empty($sname)){
		die('Enter the Father name of student');
		}
	if(empty($date)){
		die('Enter the date');
		}
	
	
	echo $query="insert into student(name,father_name,admission_date)values('$sname','$sfname','$date')";
	$result=mysql_query($query);
	if(!empty($result)){
		header('location:student_show.php');
		}else{
		  echo "you are not inserted";
		  exit();
		}
	
	}
include "layout/header.php";
include "html/student_add.html";
include "layout/rightside.php";
include "layout/footer.php";
?>