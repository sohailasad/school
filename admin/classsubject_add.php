<?php

include "include/connection.php"; 
session_start();
if(isset($_POST['classsubject'])){
$classID=$_POST['classID'];
$SubjectID=$_POST['SubjectID'];
$query=mysql_query("insert into class_subjects(class_id,subject_id)values('$classID','$SubjectID')");
if($query){
	//echo "yes";
	header('location:classsubject_show.php');
	exit();
	}

 
}
else{
		$query=mysql_query('select * from class');
		$class="";
		while($row=mysql_fetch_array($query)){
		
		$class .= "<option value=".$row['id']." >" .$row['class']."</option>";
		}
	$query=mysql_query('select * from subject');
	$subject="";
while($row=mysql_fetch_array($query)){
	$subject .= "<option value=".$row['id']." >" .$row['name']."</option>";
	}
	}


include "layout/header.php";
include "html/classsubject_add.html";
include "layout/rightside.php";
include "layout/footer.php";

?>
