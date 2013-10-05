<?php

include "include/connection.php";
session_start();
if (isset($_SESSION['name'])) {
    if (isset($_POST['attendanc'])) {
        $rollno = $_POST['rollno'];
        $classID = $_POST['classID'];
        $hasDatepicker = $_POST['hasDatepicker'];
        $status = $_POST['status'];
        $query = mysql_query("insert into  attendance(roll_no,class_id,date,status)values('$rollno','$classID','$hasDatepicker','$status')");
        if ($query) {
            //echo "yes";
            header('location:attendance_show.php');
            exit();
        }
    } else {
        $query = mysql_query('select * from class');
        $class = "";
        while ($row = mysql_fetch_array($query)) {

            $class .= "<option value=" . $row['id'] . " >" . $row['class'] . "</option>";
        }
    }
} else {
    header('Location:index.php');
}
include "layout/header.php";
include "html/attandance_add.html";
include "layout/rightside.php";
include "layout/footer.php";
?>
