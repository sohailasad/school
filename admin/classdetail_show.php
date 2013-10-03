<?php
include "include/connection.php";
session_start();
$query=mysql_query("SELECT class_detail.id,student.name, class.class,class_detail.roll_no
FROM class_detail
INNER JOIN class
ON class_detail.class_id=class.id
INNER JOIN student
ON student.id = class_detail.student_id");
$data ="";
while($row=mysql_fetch_array($query)){


 $data.= "<tr>
 <td>".$row['name']."</td>
  <td>".$row["class"]."</td>
   <td>".$row["roll_no"]."</td>
    <td><a href='classdetail_update.php?id=".$row['id']."'>EDIT</a>|<a href='classdetail_delete.php?id=".$row['id']."'>Delete</a></td>
	
 </tr>";   
}

include "layout/header.php";
include "html/classDetail_show.html";
include "layout/rightside.php";
include "layout/footer.php";
?>