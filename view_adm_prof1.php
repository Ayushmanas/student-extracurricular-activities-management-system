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

<?php
if(isset($_GET['view']))
{
$admno=mysql_real_escape_string($_GET['admno']);
$result = mysql_query("SELECT * FROM stud_adm WHERE adm_no='$admno'");
$row = mysql_fetch_array($result);
?>
<body>
<center>
<?php
echo "<center><a href='images/student/".$row['img']."' target='_blank'><img style='border:8px solid grey' width='150' height='150' src=images/student/".$row['img'].">";
echo "</a><br>";
?>
<b>ADMISSION NO.</b>
<b><font color="red"><?php echo $row['adm_no'];?></font></b>
<table border="20" width="800" height="400" cellspacing="3" cellpadding="1">
<TR>
<TD><b><font color="white">1.NAME OF STUDENT</b></TD>
<TD><center><?php echo $row['name'];?></TD>
</TR>
<TR>
<center>
<TD>
<b><font color="white">2.ADMSSION YEAR</font></b>
</TD>
<TD><center>
<?php echo $row['year'];?>
</TD>
</TR>
<TD>
<b><font color='red'>3.EXTRACURRICULAR ACTIVITIES</b>
</TD>
<TD><center>
<?php echo $row['act_nam'];?>
</TD>
</TR>
<TR>
<TD>
<b><font color='red'>3.FACULTY ASSIGNED</b>
</TD>
<TD><center>
<?php echo $row['fac_name']; ?>
</TD>
</TR>
<TR>
<TD><b><font color='white'>4.NAME OF THE VILLAGE/TOWN</b></TD>
<TD><center><?php echo $row['twnvill'];?></TD>
</TR>
<TD><b><font color='white'>5.DATE OF BIRTH</b></TD>
<TD><center><?php echo $row['dob'];?></TD>
</TR>
<TR>
<TD><b><font color='white'>6.GENDER</b></TD>
<TD><center>
<?php echo $row['gen'];?>
</TD>
</TR>
<TR>
<TD><b><font color='white'>7.RELIGION</b></TD>
<TD><center><?php echo $row['religion'];?></TD>
</TR>
<TR>
<TD><b><font color='white'>8.CASTE</b></TD>
<TD><center><?php echo $row['caste'];?></TD>
</TR>
<TR>
<TD><b><font color='white'>9.COMMUNITY</b></TD>
<TD><center>
<?php echo $row['comunit'];?>
</TD>
</TR>
</table>
<br>
<table border="20" width="800" height="400" cellspacing="4" cellpadding="2">
<center><b>10.LIVING WITH PARENTS/GUARDIAN</center>
<TR>
<TD><i><font color='white'>(a)Name of the father/Guardian</i></TD>
<TD><center><?php echo $row['fname'];?></TD>
</TR>
<TR>
<TD><i><font color='white'>(b)Father/Guardian's Educational Qualification & Occupation</i></TD>
<TD><center><?php echo $row['f_ed_qua'];?></TD>
</TR>
<TR>
<TD><i><font color='white'>(c)Full Address with Pin Code</i></TD>
<TD><center><?php echo $row['f_add_pin'];?></TD>
</TR>
<TR>
<TD><i><font color='white'>(c)Contact No.</i></TD>
<TD><center><?php echo $row['ph_no'];?></TD>
</TR>
</TABLE>
<br>
<center><b>FOR OFFICE USE</b></center>
<table width="800" height="50" border="20" cellspacing="3" cellpadding="2">
<TR>
<TD><b>11.SEMESTER</b></TD>
<TD><center>
<?php echo $row['cls_adm'];?>&nbsp
'<?php echo $row['cls_sec'];?>'
</TD>
</TR>
<TR>
<TD><b><font color='white'>12.MEDIUM</b></TD>
<TD><center>
<?php echo $row['med_adm'];?>
</TD>
</TR>
<TR>    
<TD><b><font color='white'>13.BRANCH</b></TD>
<TD><center>
<?php echo $row['grop_adm'];?>
</TD>
</TR>
<TR>
<TD><b><font color='white'>14.DATE</b></TD>
<TD><center><?php echo $row['dat_adm'];?></TD>
</TR>
</table>
<hr class="vertical"/>
<STYLE>
    input[type=text] {
    width: 5%;
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
    border:2px solid #3f81db;
    color:white;
    background-color:#61a1f8;
    border-radius: 4px;
} 

table {
    background-color:#365884;
color:white;
border-radius:12px;     
border:8px solid #365884; 
}

input[type=button] {
    background-color: #365884;
    color: white;
    padding: 14px 20px;
    margin: 4px 0;
    border: none;
    cursor: pointer;
    width: 40%;
    opacity:1;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    font-size: 14px;
    border-radius:4px;
}

input[type=button]:hover {
    background-color:#61a1f8;
}

hr.vertical
{
   width: 0px;
   height: 5%;
}
</STYLE>
<center><input type="button" value="Go Home" style="width:10%" onclick="window.location ='dashboard.php'">
</form>

<?php
}
ob_end_flush();
?>