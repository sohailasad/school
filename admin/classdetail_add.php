<?php
include "include/connection.php"; 
session_start();
if (isset($_SESSION['name'])) {
if(isset($_POST['clsdetail'])){
$stdntID=$_POST['stdntID'];
$classID=$_POST['classID'];
$rollno=$_POST['rollno'];

$query="insert into class_detail(student_id,class_id,roll_no)values('$stdntID','$classID','$rollno')";
 $result=mysql_query($query);
if($query){
	//echo "yes";
	header('location:classdetail_show.php');
	exit();
	}

 
}else{
	$query=mysql_query("select * from  student");
	$student="";
while($row=mysql_fetch_array($query)){
	$student.="<option value=".$row['id'].">".$row['name']."</option>";
	}
	$query=mysql_query('select * from class');
		$class="";
		while($row=mysql_fetch_array($query)){
		
		$class .= "<option value=".$row['id']." >" .$row['class']."</option>";
		}
	
}
} else {
    header('Location:index.php');
}
include "layout/header.php";
include "html/classdetail_add.html";
include "layout/rightside.php";
include "layout/footer.php";
?>
