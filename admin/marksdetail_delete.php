<?php

include "include/connection.php";
session_start();
if (isset($_SESSION['name'])) {
    $query = mysql_query("delete from marks_detail where id=" . $_GET['id'] . "");
    if ($query) {
//echo "Data is deleted";
        header('location:marksdetail_show.php');
    } else {
        header('Location:index.php');
    }
}
?>