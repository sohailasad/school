<?php
include "include/connection.php";
session_start();
$query=mysql_query("delete from marks where id=".$_GET['id']."");
header('location:marks_show.php');
?>