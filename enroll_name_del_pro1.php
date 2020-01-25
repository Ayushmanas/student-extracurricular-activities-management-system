<?php
include_once("bg.php");
include_once("config.php");
ob_start();
session_start();
if((!isset($_SESSION['stduid2']))||(!isset($_SESSION['stdpwd2']))||(!isset($_SESSION['maspwd2'])))
{
header('Location: default.php') ;
}
?>
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
<table border="20" height="100" cellpadding="10">
<form action="enroll_name_del_confirm.php" method="POST" autocomplete="off">
<TR>
<TD><b>User-Id</b></TD>
<TD>
<input type="email" name="uid" style="width:100%" required>
</TD>
</TR>

<TR>
<TD><b>Password</b></TD>
<TD>
<input type="password" name="pwd" style="width:100%" required>
</TD>
</TR>

<TR>
<TD><b></b></TD>
<TD>
&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="Log-In" name="loger" style="width:100%">
</form>
</table>
<?php
if(isset($_POST['loger']))
{
$uid = mysql_real_escape_string($_POST['uid']);
$pwd = mysql_real_escape_string($_POST['pwd']);
$result = mysql_query("SELECT * FROM principal WHERE uid='$uid' AND pwd='$pwd'");

if($row = mysql_fetch_array($result))
{
$_SESSION['stduid']=$row['uid'];//stores userid session
$_SESSION['stdpwd']=$row['pwd'];//stores password session
header('location:dashboard.php');
}
else
{
echo "<center>"."Invalid Username or Password"."</center>";
}
}
?>