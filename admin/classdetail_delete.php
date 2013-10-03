<?php
include "../include/connection.php";
session_start();
$query=mysql_query("delete from class_detail where id=".$_GET['id']."");
header('location:classdetail_show.php');
?>