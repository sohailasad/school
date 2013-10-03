<?php
include "include/connection.php";
session_start();
$query=mysql_query("delete from student where id=".$_GET['id']."");
if($query){
	header('location:student_show.php');
	exit();
	}else{
		echo "Some issu you are not deleted";
		}
?>