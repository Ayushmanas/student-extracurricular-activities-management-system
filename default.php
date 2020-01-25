<?php
include_once("bg.php");
include_once("config.php");
session_start();
ob_start();

?>
<style>
    body{
        font-family:sans-serif;
    }
.table{
    border:"20";
     height:"100";
      cellpadding:"10";
     bordercolor:'#21DBD9';
     bgcolor:'#E5F4F4';
     border-radius:4px;
}
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}
button {
    background-color: #365884;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity:0.9;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    border-radius:4px;
}

button:hover {
    opacity: 1;
}
.container {
    padding: 16px;
}
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}
.dropdownlist {
    width: 40%;
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
</style>
<center><img draggable='false' width='300' src=images/background/logo.png>
<center>
<h2 style="background-color:orange; width:30%; border-radius:16px; color:white">PESIT South Campus Bangalore<h2>
<h2><font color='black'>(afflicated by VTU)</font><h2>
<h3 style="background-color:orange; width:40%; border-radius:16px; color:white">Student Extracirrucular Activities Management System</h3>
<table>
<form class="container" action="default.php" method="POST" autocomplete="off">
<TR>
<TD style="font-size:1.25em;"><b>User-Id</b></TD>
<TD>
<input type="text" name="uid" autofocus placeholder="Your UID" required>
</TD>
</TR>

<TR>
<TD style="font-size:1.25em;"><b>Password</b></TD>
<TD>
<input type="password" name="pwd" autofocus placeholder="Password" required>
</TD>
</TR>

<TR>
<TD style="font-size:1.25em;"><b>Usertype</b></TD>
<TD>
<select name="utype" required>
<option class="dropdownlist">STUDENT</option>
<option class="dropdownlist">ADMINISTRATOR</option>
</select>
</TD>
</TR>

<TR>
<TD><b></b></TD>
<TD>
&nbsp;&nbsp;&nbsp;&nbsp;
<button type="submit" name="loger"><b  style="height:30px;width:80px">Log-In</b></button>
</form>
</table>
<?php
if(isset($_POST['loger']))
{    
$uid = mysql_real_escape_string($_POST['uid']);
$pwd = mysql_real_escape_string($_POST['pwd']);
$utype = mysql_real_escape_string($_POST['utype']);
$result = mysql_query("SELECT * FROM user WHERE eid='$uid' AND pwd='$pwd' AND utype='$utype'");
echo"msg".$utype;
$row = mysql_fetch_array($result);
var_dump($row);
if(($utype=="ADMINISTRATOR")&&$row['eid']==$uid&&$row['pwd']==$pwd)
{
$_SESSION['stduid2']=$row['eid'];//stores userid session
$_SESSION['stdpwd2']=$row['pwd'];//stores password session
$_SESSION['stdutype2']=$row['utype'];//stores usertype session
echo "<h3>Admin</h3>";
header('location:dashboard.php');
}
else
if(($utype=="FACULTY")&&$row['eid']==$uid&&$row['pwd']==$pwd)
{
$_SESSION['stduid2']=$row['eid'];//stores userid session
$_SESSION['stdpwd2']=$row['pwd'];//stores password session
$_SESSION['stdutype2']=$row['utype'];//stores usertype session
echo "<h3>Admin</h3>";
header('location:dashboard1.php');
}
else
if(($utype=="STUDENT")&&$row['eid']==$uid&&$row['pwd']==$pwd)
{
$_SESSION['stduid2']=$row['eid'];//stores userid session
$_SESSION['stdpwd2']=$row['pwd'];//stores password session
$_SESSION['stdutype2']=$row['utype'];//stores usertype session
echo "<h3>Admin</h3>";
header('location:dashboard2.php');
}
else
{
echo '<script type="text/javascript">alert("Invalid Username or Password!");</script>';
}
}
?>
</center>