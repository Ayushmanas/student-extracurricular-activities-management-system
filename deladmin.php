<?php
include_once("bg.php");
include_once("config.php");
session_start();
ob_start();

?>
<style>    
input[type=text] {
    width: 100%;
    padding: 14px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    height:50%;
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

input[type=submit]:hover, input[type=reset]:hover, input[type=button]:hover {
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
</br></br></br></br></br>
</br></br></br><center>
<input type="button"  style="height:40px;width:200px" value="Go to Home" onclick="window.location ='dashboard.php'">   
<br>
<br>
<table border="10" height="150" cellpadding="5" bordercolor='#21DBD9' bgcolor='#E5F4F4'>
<form action="deladmin.php" method="POST" autocomplete="off">
<TR>
<TD><b>Master-Password : </b></TD>
<TD>
<input type="password" name="mpwd" style="width:100%;height:100%;" required autofocus>
</TD>
</TR>
<TR>
<TD></TD>
<TD>
&nbsp;&nbsp;
<input type="submit" value="Continue" name="master" style="width:41%">
&nbsp;
&nbsp;<input type="button" value="Cancel" style="width:41%" onclick="window.location ='dashboard.php'">
</form>
</table>
<?php
if(isset($_POST['master']))
{
$s=$_SESSION['stduid2'];
$mpwd = mysql_real_escape_string($_POST['mpwd']);
$result = mysql_query("SELECT * FROM user WHERE eid='$s' AND mpwd='$mpwd'");

if($row = mysql_fetch_array($result))
{
$_SESSION['maspwd2']=$row['mpwd'];//stores password session
header('location:enroll_name_del.php');
}
else
{
echo '<script type="text/javascript">alert("Invalid Master-Password!");</script>';
}
}
?>
</center>