<?php 
include "include/connection.php"; 
session_start();
if (isset($_SESSION['name'])) {
    $class = $_GET['class'];
    $rollNO = $_GET['roll_no'];
$query=mysql_query("SELECT marks.id, marks.roll_no,class.class,marks.total_marks,marks.obtain_marks
FROM marks
INNER JOIN class
ON marks.class_id = class.id
WHERE marks.roll_no = $rollNO AND marks.class_id = $class");
$data="";
while($row=mysql_fetch_array($query)){
 
 	
 $data.= "<tr>
 <td>".$row['roll_no']."</td>
 <td>".$row['class']."</td>
 <td>".$row['total_marks']."</td>
 <td>".$row['obtain_marks']."</td>
  <td><a href='marksdetail_show.php?class=" . $class . "&&roll_no=".$row['roll_no']."'>View</a></td>
 <td><a href='marks_update.php?id=".$row['id']."'>EDIT</a>|<a href='marks_delete.php?id=".$row['id']."'>Delete</a></td>
	
 </tr>"; 
}
} else {
    header('Location:index.php');
}
include "layout/header.php";
include "html/marks_show.html";
include "layout/rightside.php";
include "layout/footer.php";

?>