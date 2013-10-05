<?php
include "include/connection.php"; 
session_start();
if (isset($_SESSION['name'])) {
if(isset($_POST['marksdetail'])){
$rollno=$_POST['rollno'];
$classID=$_POST['classID'];
$subjectID=$_POST['subjectID'];
$totalmarks=$_POST['totalmarks'];
$obtainmarks=$_POST['obtainmarks'];
$query=mysql_query("insert into  marks_detail(roll_no,class_id,subject_id,total_marks,obtain_marks)values('$rollno','$classID','$subjectID','$totalmarks','obtainmarks')");
if($query){
	//echo "yes";
	header('location:marksdetail_show.php');
	exit();
	}

 
}else{
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
} else {
    header('Location:index.php');
}
include "layout/header.php";
include "html/marksdetail_add.html";
include "layout/rightside.php";
include "layout/footer.php";
?>


