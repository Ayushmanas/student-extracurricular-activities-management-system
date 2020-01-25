<?php
include_once("bg.php");
include_once("config.php");
ob_start();
session_start();
if((!isset($_SESSION['stduid2']))||(!isset($_SESSION['stdpwd2']))||(!isset($_SESSION['maspwd2'])))
{
header('Location: deladmin.php');
}

?>
<html>
<head></head>
<title></title>
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
    border:2px solid #365884;
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
<body>

<?php
$sql="SELECT * FROM last_entry WHERE id='1'";
$result=mysql_query($sql);
if($row=mysql_fetch_array($result))
{
echo '<b>Last Entry for Admission ';
echo "</br>";
echo "&nbsp";
echo $row['adm_no'];
}
else
{
echo "Last Entry not Found";
}
?>
<br><br><br><br>
<center>
<input type="button"  style="height:40px;width:200px" value="Go to Home" onclick="window.location ='dashboard.php'">
<br><br>
<table border="20" height="100" cellspacing="10" cellpadding="10" bordercolor='#21DBD9' bgcolor='#E5F4F4'>
<form method="GET" action="enroll_name_del_pro.php">
<TR>

<TD>
<b>ADMISSION NO.</b>
</TD>
<TD>
<input type="text" name="admno" style="width:100% border-co" required autofocus>
</TD>
</TR>
<TR>
<TD></TD>
<TD>
&nbsp;
<input type="submit" name="delete" value="Submit" style="width:100%">

&nbsp;&nbsp;
</form>
</table>
</center>
</body>