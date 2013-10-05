<?php

session_start();
include "include/connection.php";
if (isset($_POST['login'])) {
    $email = $_POST['emaail'];
    $password = $_POST['password'];

    $query = mysql_query("select * from  user where email= '$email' && password= '$password' ");

    $row = mysql_fetch_array($query);

    if (is_array($row)) {
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['first_name'];
        if (isset($_SESSION['name'])) {
            header('Location:student_show.php');
        } else {
            $message = "Email or password is invalid";
        }
    }
 else {
        $message = "Email or password is invalid";
    }
}
if (isset($_SESSION['name'])) {
    header('Location:student_show.php');
}
include "layout/header.php";
include "html/index.html";
include "layout/rightside.php";
include "layout/footer.php";
?>
