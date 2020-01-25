<?php
$conn=mysql_connect("localhost","Ayush","123456")or die("Connection to Server failed");
$db=mysql_select_db("student",$conn)or die("Connection to Database failed");
?>