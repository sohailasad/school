<?php

include "include/connection.php";
session_start();
if (isset($_SESSION['name'])) {
    if (isset($_POST['subjct'])) {
        $subjname = $_POST['subjct_name'];
        if (empty($subjname)) {
            die('Enter the name of student');
        }



        $query = "insert into  subject(name)values('$subjname')";
        $result = mysql_query($query);
        if (!empty($result)) {
            header('location:subject_show.php');
            //echo "you have insert the subject name";
        } else {
            echo "you are not inserted";
            exit();
        }
    }
} else {
    header('Location:index.php');
}
include "layout/header.php";
include "html/subject_add.html";
include "layout/rightside.php";
include "layout/footer.php";
?>

