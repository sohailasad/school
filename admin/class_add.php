<?php
include "include/connection.php";
session_start();
if(isset($_POST['cls'])){
	$class=$_POST['class'];
	
	if(empty($class)){
		die('Enter the name of class');
		}
	
	
	
	 $query="insert into class(class)values('$class')";
	$result=mysql_query($query);
	if(!empty($result)){
		header('location:class_show.php');
		//echo "you have successfully enter the class";
		exit;
		}else{
		  echo "you are not inserted";
		  exit();
		}
	
	}
include "layout/header.php";
include "html/class_add.html";
include "layout/rightside.php";
include "layout/footer.php";
?>

