<?php
include_once("bg.php");
include_once("config.php");
ob_start();
session_start();
if((!isset($_SESSION['stduid2']))||(!isset($_SESSION['stdpwd2']))||(!isset($_SESSION['maspwd2'])))
{
header('Location:deladmin.php') ;
}
?>
<?php
if(isset($_GET['delete']))
{
$admno=mysql_real_escape_string($_GET['admno']);
$result=mysql_query("SELECT * FROM stud_adm WHERE adm_no='$admno'");
$row= mysql_fetch_array($result);
?>
<body>
<style>
 <style>
  input[type=text] {
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
    border:2px solid #61a1f8;
    color:white;
    background-color:#365884;
    border-radius: 4px;

} 

table {
    background-color:#365884;
color:white;
border-radius:12px;     
border:8px solid #365884; 
}

input[type=button], input[type=submit] {
    background-color: #365884;
    color: white;
    padding: 14px 20px;
    margin: 4px 0;
    border: 2px solid #61a1f8;
    cursor: pointer;
    width: 40%;
    opacity:1;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    font-size: 14px;
    border-radius:4px;
}

input[type=button]:hover, input[type=submit]:hover {
    background-color:#61a1f8;
}
.dropdownlist {
    width: 100%;
    padding: 12px 20px;
    margin: 6px 0;
    border: 1px solid #ccc;
    box-sizing: border-box;  
}
</style>   
</style>   
<br><br><br><br>
<center>
<form action="enroll_name_del_confirm.php" method="GET">
<table border="20" height="100" cellspacing="5" cellpadding="5" bordercolor='#21DBD9' bgcolor='#E5F4F4'>
<input type="text" name="admno" value="<?php echo $row['adm_no'];?>" hidden>
<TR>
<TD><b>ADMISSION NO.</b></TD>
<TD><center>
<?php echo $row['adm_no'];?>
</center>
<TR>
<TD><b>PHOTO</b></TD>
<TD>
<?php echo "<center><img width='120' height='120' src=images/student/".$row['img'].">";?>
</TD>
</TR>
<TR>
<TD>
<b>NAME OF STUDENT</b>
</TD>
<TD>
<center>
<?php echo $row['name'];?>
</center>
</TD>
</TR>
<TR>
<TR>
<TD><b>Class</b></TD>
<TD><center>
<?php echo $row['cls_adm'];?>
</center>
</TD>
</TR>
<TR>
<TD></TD>
<TD>
&nbsp;<input type="submit" value="Conform & Delete" name="deleteconfirm" style="width:100%">
&nbsp;
&nbsp;<input type="button" value="Cancel" style="width:100%;" onclick="window.location ='dashboard.php'">
</TD>
</table>
</form>
<?php
}
else
{
echo "<center><h3>"."No Such Admission found"."</h3></center>";
echo '<p><center><input type="button" style="height:30px/;width:200px" value="Retry" onclick="window.location =\'enroll_name_del.php\'" /></p>';
echo "</br></br>";
echo '<p><center><input type="button" style="height:30px/;width:200px" value="Goto Home" onclick="window.location =\'dashboard.php\'" /></p>';
}
ob_end_flush();
?>