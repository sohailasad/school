<?php
include "../include/connection.php";
session_start();
$query=mysql_query("delete from  class_subjects where id=".$_GET['id']."");
header('location:classsubject_show.php');
?>