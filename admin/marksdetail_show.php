<?php
include "include/connection.php";
session_start();
$query=mysql_query("SELECT marks_detail.id,marks_detail.roll_no,class.class,subject.name,marks_detail.total_marks,marks_detail.obtain_marks
FROM marks_detail
INNER JOIN class
ON marks_detail.class_id=class.id
INNER JOIN SUBJECT
ON subject.id = marks_detail.subject_id");
$data="";
while($row=mysql_fetch_array($query)){
	 	 $data.= "<tr>
 <td>".$row['roll_no']."</td>
 <td>".$row['class']."</td>
 <td>".$row['name']."</td>
 <td>".$row['obtain_marks']."</td>
  <td>".$row['total_marks']."</td>
  
 <td><a href='marksdetail_update.php?id=".$row['id']."'>EDIT</a>|<a href='marksdetail_delete.php?id=".$row['id']."'>Delete</a></td>
	
 </tr>"; 
}
include "layout/header.php";
include "html/marksdetail_show.html";
include "layout/rightside.php";
include "layout/footer.php";

?>