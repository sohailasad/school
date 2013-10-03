<?php

include "include/connection.php"; 
session_start();
if(isset($_POST['mrks'])){
$rollno=$_POST['rollno'];
$classID=$_POST['classID'];
$totalmarks=$_POST['totalmarks'];
$obtnmarks=$_POST['obtnmarks'];
$query="insert into marks(roll_no,class_id,total_marks,obtain_marks)values('$rollno','$classID','$totalmarks','$obtnmarks')";
 $result=mysql_query($query);
if($query){
	 header('location:marks_show.php');
	exit();
	}

 
}else{
$query=mysql_query('select * from class');
$class="";
while($row=mysql_fetch_array($query)){
	$class.="<option value=".$row['id'].">".$row['class']."</option>";	
}
}

/*$query="insert into marks(class_id)
select class from class
";
if(mysql_query($query)){
	echo "insert";
	}*/
include "layout/header.php";
include "html/marks_add.html";
include "layout/rightside.php";
include "layout/footer.php";
?>
