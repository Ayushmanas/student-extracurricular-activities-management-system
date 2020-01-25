<?php

include_once("config.php");
include_once("bg.php");
ob_start();
session_start();
if((!isset($_SESSION['stduid2']))&&(!isset($_SESSION['stdpwd2'])))
{
header('Location: default.php') ;
}

if(isset($_POST['enroll']))
{
$admno=mysql_real_escape_string($_POST['admno']);
$name=mysql_real_escape_string($_POST['name']);
$actnam=mysql_real_escape_string($_POST['act_nam']);
$sql1="INSERT INTO stud_id(adm_no) VALUES('$admno')";
echo "msg".$admno.$name.$actnam;
$result1 = mysql_query($sql1);
if($result1)
{
//Admission entry
$sql2="INSERT INTO stud_adm(adm_no,act_nam,name) 
VALUES('$admno','$actnam','$name')";
$result2 = mysql_query($sql2);

//Last Entry
$sql5="UPDATE last_entry SET adm_no='$admno',name='$name' WHERE id='1'";
$result5 = mysql_query($sql5);

//extra1 entry
$sql6="INSERT INTO extra1(adm_no,name) 
VALUES('$admno','$name')";
$result6 = mysql_query($sql6);

//extra2 entry
$sql7="INSERT INTO extra2(adm_no,name) 
VALUES('$admno','$name')";
$result7 = mysql_query($sql7);

//extra3 entry
$sql8="INSERT INTO extra3(adm_no,name) 
VALUES('$admno','$name')";
$result8 = mysql_query($sql8);

//extra_cirr entry
$sql9="INSERT INTO extra_cirr(adm_no,act_nam) 
VALUES('$admno','$actnam')";
$result9 = mysql_query($sql9);

echo "</br></br></br></br></br></br></br></br>";
echo "<center><h3>"."Enrolled Successfully"."</h3></center>";
echo '<center><input type="button" style="background-color: #365884;color: white;padding: 12px 18px;margin: 6px 0; border: none;cursor: pointer;width: 20%;font-size: 14px;border-radius:4px;" value="Go Home" onclick="window.location =\'dashboard.php\'" />';
}
else 
{//$sql10="UPDATE stud_adm SET act_nam='$actnam' WHERE adm_no='$admno'";
   //$result10= mysql_query($sql10);
echo "</br></br></br></br></br></br></br></br>";
echo "<center><h3>"."Admission Number already Exists/ Invalid details"."</h3></center>";
echo '<p><center><input type="button" style="background-color: #365884;color: white;padding: 12px 18px;margin: 6px 0; border: none;cursor: pointer;width: 20%;font-size: 14px;border-radius:4px;" value="Retry" onclick="window.location =\'enroll.php\'" /></p>';
echo '<p><center><input type="button" style="width:100%;background-color: #365884;color: white;padding: 12px 18px;margin: 6px 0; border: none;cursor: pointer;width: 20%;font-size: 14px;border-radius:4px;" value="Goto Home" onclick="window.location =\'dashboard.php\'" /></p>';
}
}
else
{
echo "</br></br></br></br></br></br></br></br>";
echo "<center><h3>"."Unauthorized Entry"."</h3></center>";
echo '<p><center><input type="button" style="background-color: #365884;color: white;padding: 12px 18px;margin: 6px 0; border: none;cursor: pointer;width: 20%;font-size: 14px;border-radius:4px;width:100%;" value="Goto Main Page" onclick="window.location =\'dashboard.php\'" /></p>';

}
ob_end_flush();

?>