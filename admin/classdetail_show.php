<?php

include "include/connection.php";
session_start();
if (isset($_SESSION['name'])) {
    $id = $_GET['id'];
    $query = mysql_query("SELECT class_detail.id,student.name, class.class,class_detail.roll_no
FROM class_detail
INNER JOIN class
ON class_detail.class_id=class.id
INNER JOIN student
ON student.id = class_detail.student_id
WHERE class_detail.class_id = $id");
    $data = "";
    while ($row = mysql_fetch_array($query)) {


        $data.= "<tr>
            <td>" . $row['name'] . "</td>
            <td>" . $row["class"] . "</td>
            <td>" . $row["roll_no"] . "</td>
            <td><a href='marks_show.php?class=" . $id . "&&roll_no=".$row['roll_no']."'>View</a></td>
            <td><a href='attendance_show.php?class=" . $id . "&&roll_no=".$row['roll_no']."'>View</a></td>
            <td><a href='classdetail_update.php?id=" . $row['id'] . "'>EDIT</a>|<a href='classdetail_delete.php?id=" . $row['id'] . "'>Delete</a></td>
	
 </tr>";
    }
} else {
    header('Location:index.php');
}
include "layout/header.php";
include "html/classDetail_show.html";
include "layout/rightside.php";
include "layout/footer.php";
?>