<?php
include "include/connection.php";
session_start();

if (isset($_SESSION['name'])) {
    
    $query = "select * from student";
    $result = mysql_query($query);
    $data = "";
    while ($row = mysql_fetch_array($result)) {

        $data.= "<tr>
 <td>" . $row['name'] . "</td>
 <td>" . $row['father_name'] . "</td>
 <td>" . $row['admission_date'] . "</td>
 
  
 <td><a href='student_update.php?id=" . $row['id'] . "'>EDIT</a>|<a href='student_delete.php?id=" . $row['id'] . "'>Delete</a></td>
	
 </tr>";
    }
    include "layout/header.php";
    include "html/student_show.html";
    include "layout/rightside.php";
    include "layout/footer.php";
} else {
    header("Location:index.php");
}
?>