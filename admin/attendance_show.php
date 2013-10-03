<?php
include "include/connection.php";
session_start();
$query=mysql_query(" SELECT attendance.id,attendance.roll_no,class.class,attendance.date,attendance.status
 FROM attendance
 INNER JOIN class
ON attendance.class_id = class.id");

$data="";
while($row=mysql_fetch_array($query)){
	
 $data.= "<tr>
 <td>".$row['roll_no']."</td>
  <td>".$row["class"]."</td>
   <td>".$row["date"]."</td>
   <td>".$row["status"]."</td>
    <td><a href='attendance_update.php?id=".$row['id']."'>EDIT</a>|<a href='attendance_delete.php?id=".$row['id']."'>Delete</a></td>
	
 </tr>";   
}

include "layout/header.php";
include "html/attandance_show.html";
include "layout/rightside.php";
include "layout/footer.php";
?>