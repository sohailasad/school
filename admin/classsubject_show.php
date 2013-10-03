<?php
include "include/connection.php";
session_start();
$query=mysql_query("SELECT class_subjects.id,class.class,subject.name
FROM class_subjects
INNER JOIN class
ON class_subjects.class_id=class.id
INNER JOIN SUBJECT
ON subject.id = class_subjects.subject_id");
$data="";
while($row=mysql_fetch_array($query)){
	
    $data.= "<tr>
 <td>".$row['class']."</td>
 <td>".$row['name']."</td>

  
 <td><a href='classsubject_update.php?id=".$row['id']."'>EDIT</a>|<a href='classsubject_delete.php?id=".$row['id']."'>Delete</a></td>
	
 </tr>"; 
}
include "layout/header.php";
include "html/classsubject_show.html";
include "layout/rightside.php";
include "layout/footer.php";

?>