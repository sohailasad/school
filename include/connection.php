<?php
$servername="localhost";
$username="root";
$password="";
$database="school";
$conn=mysql_connect($servername,$username,$password);
$result=mysql_select_db($database,$conn);

?>