<?php
include "include/connection.php";
session_start();
if (isset($_SESSION['name'])) {
$query=mysql_query("delete from subject where id=".$_GET['id']."");
if($query){
//echo "Data is deleted";
header('location:subject_show.php');	
}
} else {
    header('Location:index.php');
}
?>