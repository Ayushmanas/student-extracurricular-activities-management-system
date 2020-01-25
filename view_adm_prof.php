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
    padding: 14px 20px;
    margin: 4px 0;
    border: none;
    cursor: pointer;
    width: 40%;
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
.dropdownlist {
    width: 100%;
    padding: 12px 16px;
    margin: 8px 0;
    border: 1px solid #ccc;
    box-sizing: border-box;  
    height: 50%; 
}
.dropdownlist:focus {
    background-color: #ddd;
    outline: none;   
}
}
</style>
<body>
<center>
<input type="button"  style="height:40px;width:200px" value="Go to Home" onclick="window.location ='dashboard.php'">
<h3>Search by Admission number</h3>
<table border="10" height="100" cellspacing="10" cellpadding="10" bordercolor='#21DBD9' bgcolor='#E5F4F4'>
<form method="GET" action="view_adm_prof1.php">
<TR>
<TD>
<b>ADMISSION NO.</b>
</TD>
<TD>
<input type="text" name="admno" autofocus placeholder="ADMISSION NO." required autofocus>
</TD>
<TD>
<input type="submit" name="view" value="Search" style="width:100%">
</form>
</table>
<br>
<h3>Search by Student Name</h3>
<table border="10" height="100" cellspacing="10" cellpadding="10" bordercolor='#21DBD9' bgcolor='#E5F4F4'>
<form method="GET" action="view_adm_prof.php">
<TR>
<TD>
<b>STUDENT NAME:</b>
</TD>
<TD>
<input type="text" name="name" autofocus placeholder="STUDENT NAME" required>
</TD>
<TD>    
<select class="dropdownlist" name="cls_adm" required>
<option class="dropdownlist">SEM-I</option>
<option class="dropdownlist">SEM-II</option>
<option class="dropdownlist">SEM-III</option>
<option class="dropdownlist">SEM-IV</option>
<option class="dropdownlist">SEM-V</option>
<option class="dropdownlist">SEM-VI</option>
<option class="dropdownlist">SEM-VII</option>
<option class="dropdownlist">SEM-VIII</option>
</select>
</TD>
<TD>
<input type="submit" name="view" value="Search" style="width:100%">
</form>
</table>
<br>
<?php
if(isset($_GET['view']))
{
$name=mysql_real_escape_string($_GET['name']);
$cls_adm=mysql_real_escape_string($_GET['cls_adm']);
$sql = mysql_query("SELECT * FROM stud_adm WHERE name LIKE '%$name%' AND cls_adm='$cls_adm'");
echo mysql_num_rows($sql);
echo "<b>"." result found";
echo "<center>";
echo "<table border='20' height='100' width='900' cellspacing='3' cellpadding='3' bordercolor='#21DBD9'>
<tr>
<th>Photo</th>
<th>Admission No.</th>
<th>Name</th>
<th>Class</th>
<th>More Details</th></tr>";
//And we display the results
while($row = mysql_fetch_assoc($sql))
{
echo "<tr bgcolor='#E5F4F4'>";
$admno=$row['adm_no'];
echo "<td width='3%'>"."<center><img width='120' height='120' src=images/student/".$row['img'].">";
echo "<td width='3%'>"."<center>".$row['adm_no']."</td>";
echo "<td width='3%'>"."<center>".$row['name']."</td>";
echo "<td width='3%'>"."<center>".$row['cls_adm']."&nbsp'".$row['cls_sec']."'</td>";
echo "<td width='3%'>";
echo "<center><a href='view_adm_prof1.php?admno=$admno&view=view'>View More</a>";
echo "</td>";
echo "</tr>";
}
echo "</table></center>";
}
?>
</center>
</body>