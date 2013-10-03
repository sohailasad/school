<?php
include "../include/connection.php";
session_start();
$query=mysql_query("delete from class where id=".$_GET['id']."");
header('location:class_show.php');
?>