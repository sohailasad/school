<?php
include "include/connection.php";
session_start();
$query=mysql_query("select * from class");
$data="";
while($row=mysql_fetch_array($query)){
	
 $data.= "<tr>
 <td>".$row['class']."</td>
  
    <td><a href='class_update.php?id=".$row['id']."'>EDIT</a>|<a href='class_delete.php?id=".$row['id']."'>Delete</a></td>
	
 </tr>";   
}
include "layout/header.php";
include "html/class_show.html";
include "layout/rightside.php";
include "layout/footer.php";
?>