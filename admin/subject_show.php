<?php
include "include/connection.php";
session_start();
$query=mysql_query("select * from subject");
$data="";
while($row=mysql_fetch_array($query)){
	$data.="<tr><td>".$row['name']."</td><td>

 <a href='subject_update.php?id=".$row['id']."'>EDIT</a>|<a href='subject_delete.php?id=".$row['id']."'>Delete</a>";
 echo "</td></tr>";
	}
include "layout/header.php";
include "html/subject_show.html";
include "layout/rightside.php";
include "layout/footer.php";
?>
