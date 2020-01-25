<?php
include_once("bg.php");
include_once("config.php");
ob_start();
session_start();
if((!isset($_SESSION['stduid2']))&&(!isset($_SESSION['stdpwd2'])))
{
header('Location: default.php') ;
}
?>
<html>
<head></head>
<title></title>
<style>    
input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
input[type=text]:focus {
    background-color: #ddd;
    outline: none;   
}
 
TD {
    border:none;
} 

table {
    background-color:#365884;
color:white;
border-radius:12px;     
border:8px solid #365884; 
}

input[type=button], input[type=submit], input[type=reset] {
    background-color: #365884;
    color: white;
    padding: 12px 18px;
    margin: 6px 0;
    border: none;
    cursor: pointer;
    width: 20%;
    opacity:0.9;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    font-size: 14px;
    border-radius:4px;
}

input[type=button]:hover {
    opacity: 1;
}
input[type=submit]:hover, input[type=reset]:hover {
   background-color:#61a1f8;
}

</style>
<body>
<center>
<input type="button" value="Go to Home" onclick="window.location ='dashboard.php'">
<h3>Edit by Admission number</h3>
<table border="10" height="100" cellspacing="10" cellpadding="10" bordercolor='#365884' bgcolor='#61a1f8' >
<form method="GET" action="edit_adm_prof_pro.php">
<TR>
<TD>
<b>ADMISSION NO.</b>
</TD>
<TD>
<input type="text" name="admno" autofocus placeholder="ADMISSION NO." required autofocus>
</TD>
<TD>
<input type="submit" name="edit" value="Search" style="width:100%">
</form>
</table>
<h3>Edit by Student Name</h3>
<table border="10" height="100" cellspacing="10" cellpadding="10" bordercolor='#365884' bgcolor='#61a1f8'>
<form method="GET" action="edit_adm_prof.php">
<TR>
<TD>
<b>STUDENT NAME:</b>
</TD>
<TD>
<input type="text" name="name" autofocus placeholder="STUDENT NAME" required>
</TD>
<TD>
<input type="submit" name="editbyname" value="Search" style="width:100%">
</form>
</table>
<br>
<?php
if(isset($_GET['editbyname']))
{
$name=mysql_real_escape_string($_GET['name']);
$sql = mysql_query("SELECT * FROM stud_adm WHERE name LIKE '%$name%'");
echo mysql_num_rows($sql);
echo "<b>"." result found";
echo "<center>";
echo "<table border='20' height='100' width='900' cellspacing='3' cellpadding='3' bordercolor='#21DBD9'>
<tr>
<th>Photo</th>
<th>Admission No.</th>
<th>Name</th>
<th>More Details</th></tr>";
//And we display the results
while($row = mysql_fetch_assoc($sql))
{
echo "<tr bgcolor='#E5F4F4'>";
$admno=$row['adm_no'];
echo "<td width='3%'>"."<center><img width='120' height='120' src=images/student/".$row['img'].">";
echo "<td width='3%'>"."<center>".$row['adm_no']."</td>";
echo "<td width='3%'>"."<center>".$row['name']."</td>";
echo "<td width='3%'>";
echo "<center><a href='edit_adm_prof_pro.php?admno=$admno&edit=Search'>Edit details</a>";
echo "</td>";
echo "</tr>";
}
echo "</table></center>";
}
?>
</center>
</body>