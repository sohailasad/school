<?php
include "include/connection.php";
session_start();
$query=mysql_query("select * from marks_detail where id=".$_GET['id']."");
$row=mysql_fetch_array($query);
if(isset($_POST['marksdetail'])){
   echo $rollno=$_POST['rollno'];
	$classID=$_POST['classID'];
	$subjectid=$_POST['subjectid'];
	echo $totalmarks=$_POST['totalmarks'];
	$obtnmarks=$_POST['obtnmarks'];
	
 $query=mysql_query("update marks_detail set roll_no='$rollno', class_id='$classID', subject_id ='$subjectid', total_marks='$totalmarks', obtain_marks='$obtnmarks' where id=".$_GET['id']."");
if($query){
header('location:marksdetail_show.php');
exit;	
}
}
include "html/marksdetail_update.html";
?>
