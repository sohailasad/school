<?php
include "include/connection.php";
session_start();
if (isset($_SESSION['name'])) {
    
$query=mysql_query("select * from class");
$data="";
while($row=mysql_fetch_array($query)){
	
 $data.= "<tr>
 <td><a href='classdetail_show.php?id=".$row['id']."' title='View detail'>".$row['class']."</a></td>
  <td>".$row['strength']."</td>
      <td><a href='classsubject_show.php?classID=".$row['id']."' title='View subjects'>View</a></td>
    <td><a href='class_update.php?id=".$row['id']."'>EDIT</a>|<a href='class_delete.php?id=".$row['id']."'>Delete</a></td>
	
 </tr>";   
}
} else {
    header('Location:index.php');
}
include "layout/header.php";
include "html/class_show.html";
include "layout/rightside.php";
include "layout/footer.php";
?>