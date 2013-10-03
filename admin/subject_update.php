<?php
include "include/connection.php";
session_start();
$query=mysql_query("select * from subject where id=".$_GET["id"]."");
$row=mysql_fetch_array($query);
if(isset($_POST['subjt'])){
$name=$_POST['subjname'];
$query=mysql_query("update subject set name='$name' where id=".$_GET['id']."");
if($query){
	//echo "updae";
	header('location:subject_show.php');
	exit();
	}
}
include "html/subject_update.html";
?>