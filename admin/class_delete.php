<?php
include "../include/connection.php";
session_start();
if (isset($_SESSION['name'])) {
$query=mysql_query("delete from class where id=".$_GET['id']."");
header('location:class_show.php');
} else {
    header('Location:index.php');
}
?>