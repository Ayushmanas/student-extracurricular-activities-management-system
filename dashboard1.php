<?php
session_start();
if((!isset($_SESSION['stduid2']))&&(!isset($_SESSION['stdpwd2'])))
{
header('Location: default.php') ;
}
include_once("bg.php");
ob_start();

$wel="You are Logged in as ";
echo $wel.$_SESSION['stduid2'];
echo "&nbsp"."&nbsp";
echo '<input type="button" style="font-size:12px;background-color: #365884;color: white; padding: 12px 16px; margin: 6px 0; border: none; cursor: pointer; width: 10%;opacity:0.9;"  value="Click here to Logout" onclick="window.location =\'logout.php\'" />';
?>

<html>
<head></head>
<title>Student page</title>
<style>
 button {
    display: inline-block;
    border-radius: 4px;
    background-color: #f4511e;
    color: #FFFFFF;
    padding: 20px;
    margin: 5px;
    border: none;
    cursor: pointer;
    width: 20%;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    font-size: 20px;
}

button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

button:hover span {
  padding-right: 25px;
}

button:hover span:after {
  opacity: 1;
  right: 0;
}

</style>
<body>
<br><br><br><br><br><br><br><br>
<center>
<button style="vertical-align:middle" onclick="window.location ='enroll.php'"><span>Enroll Student</span></button>
<button style="vertical-align:middle" onclick="window.location ='edit_adm_prof.php'"><span>Edit Student Details</span></button><br><br>
<button style="vertical-align:middle" onclick="window.location ='view_adm_prof.php'"><span>View Student Details</span></button>
<br>
</center>
</body>
<?php
ob_end_flush();
?>
<?php
unset($_SESSION['maspwd2']);
?>