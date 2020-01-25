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
if(isset($_GET['edit']))
{
$admno=mysql_real_escape_string($_GET['admno']);
$result =mysql_query("SELECT * FROM stud_adm WHERE adm_no='$admno'");
$row = mysql_fetch_array($result);
?>
<body>
<?php
echo "<center><img style='border:8px solid grey' width='120' height='120' src=images/student/".$row['img'].">";
echo "</a>";
?>
<form action="ph_upload.php" method="POST" enctype="multipart/form-data">
Add/Change Photo<input type="file" name="image" required style="width:10%">
<input type="text" name="admno" value="<?php echo $row['adm_no'];?>" style="width:10%">
<input type="submit" value="Click to Update" name="phupd" style="width:10%">
</form>
<form action="edit_adm_prof_pro1.php" method="POST">
<b>ADMISSION NO.</b>
<b><input type="text" name="admno" value="<?php echo $row['adm_no'];?>" style="width:10%; color:red"></b>
<table border="10" width="800" height="400" cellspacing="3" cellpadding="1" >
<TR>
<TD><b>1.NAME OF STUDENT</b></TD>
<TD><center><?php echo $row['name'];?></TD>
</TR>
<TR>
<center>
<TD>
<b>2.ADMSSION YEAR</font></b>
</TD>
<TD><center>
<select name="year">
<option value="<?php echo $row['year'];?>"><?php echo $row['year'];?></option>
<option class="dropdownlist">----------</option>
<option class="dropdownlist">2000</option>
<option class="dropdownlist">2001</option>
<option class="dropdownlist">2002</option>
<option class="dropdownlist">2003</option>
<option class="dropdownlist">2004</option>
<option class="dropdownlist">2005</option>
<option class="dropdownlist">2006</option>
<option class="dropdownlist">2007</option>
<option class="dropdownlist">2008</option>
<option class="dropdownlist">2009</option>
<option class="dropdownlist">2010</option>
<option class="dropdownlist">2011</option>
<option class="dropdownlist">2012</option>
<option class="dropdownlist">2013</option>
<option class="dropdownlist">2014</option>
<option class="dropdownlist">2015</option>
<option class="dropdownlist">2016</option>
<option class="dropdownlist">2017</option>
<option class="dropdownlist">2018</option>
</select>
</TD>
</TR>
<TR>
<TD>
<b><font color='red'>3.EXTRACURRICULAR ACTIVITY</b>
</TD>
<TD><center>
<select name="act_nam">
<option value="<?php echo $row['act_nam']; ?>"><?php echo $row['act_nam']; ?></option>
<option class="dropdownlist">Sports</option>
<option class="dropdownlist">Drama</option>
<option class="dropdownlist">Arts</option>
<option class="dropdownlist">Dancing</option>
<option class="dropdownlist">Hackathons</option>
<option class="dropdownlist">Music</option>
</select>
</TD>
</TR>
<TR>
<TD>
<b><font color='red'>3.FACULTY ASSIGNED</b>
</TD>
<TD><center>
<select name="facname">
<option value="<?php echo $row['fac_name']; ?>"><?php echo $row['fac_name']; ?></option>
<option class="dropdownlist">Mr.A</option>
<option class="dropdownlist">Mr.R</option>
<option class="dropdownlist">Mrs.C</option>
<option class="dropdownlist">Mr.Q</option>
<option class="dropdownlist">Ms.P</option>
<option class="dropdownlist">Ms.S</option>
</select>
</TD>
</TR>
<TR>
<TD><b> 4.NAME OF THE CITY/TOWN/VILLAGE</b></TD>
<TD><center><input type="text" name="twnvill" value="<?php echo $row['twnvill'];?>" required maxlength="30"></TD>
</TR>
<TD><b> 5.DATE OF BIRTH</b></TD>
<TD><center><input type="date" name="dob" value="<?php echo $row['dob'];?>" required></TD>
</TR>
<TR  >
<TD><b> 6.GENDER</b></TD>
<TD><center>
<select name="gen" required>
<option value="<?php echo $row['gen'];?>"><?php echo $row['gen'];?></option>
<option class="dropdownlist">----------</option>
<option class="dropdownlist">Male</option>
<option class="dropdownlist">Female</option>
<option class="dropdownlist">Others</option>
</select>
</TD>
</TR>
<TR  >
<TD><b> 7.RELIGION</b></TD>
<TD><center><input type="text" name="religion" value="<?php echo $row['religion'];?>" required maxlength="15"></TD>
</TR>
<TR  >
<TD><b> 8.CASTE</b></TD>
<TD><center><input type="text" name="caste" value="<?php echo $row['caste'];?>" required maxlength="40"></TD>
</TR>
<TR  >
<TD><b> 9.COMMUNITY</b></TD>
<TD><center>
<select name="comunit" required>
<option value="<?php echo $row['comunit'];?>"><?php echo $row['comunit'];?></option>
<option class="dropdownlist">----------</option>
<option class="dropdownlist">GEN</option>
<option class="dropdownlist">OC</option>
<option class="dropdownlist">OBC</option>
<option class="dropdownlist">SC</option>
<option class="dropdownlist">ST</option>
</select>
</TD>
</TR>
</table>
<br>
<table border="20" width="800" height="400" cellspacing="3" cellpadding="1" bordercolor='#21DBD9'  >
<center><b>10.LIVING WITH PARENTS/GUARDIAN</center>
<TR  >
<TD><i> (a)Name of the father/Guardian</i></TD>
<TD><center><input type="text" name="fname" value="<?php echo $row['fname'];?>" required maxlength="50"></TD>
</TR>
<TR  >
<TD><i> (b)Father/Guardian's Educational Qualification & Occupation</i></TD>
<TD><center><textarea name="f_ed_qua" rows="4" cols="27" required maxlength="100"><?php echo $row['f_ed_qua'];?></textarea></TD>
</TR>
<TR  >
<TD><i> (c)Full Address with Pin Code</i></TD>
<TD><center><textarea name="f_add_pin" rows="4" cols="25" required><?php echo $row['f_add_pin'];?></textarea></TD>
</TR>
<TR  >
<TD><i> (d)Contact No.</i></TD>
<TD><center><input type="text" name="ph_no" value="<?php echo $row['ph_no'];?>" required maxlength="18">
</TD>
</TR>
</TABLE>
<br>
<center><b>FOR OFFICE USE</b></center>
<table border="20" height="100"  cellspacing="3" cellpadding="1" bordercolor='#21DBD9'  >
<TR  >
<TD><b> 11.SEMESTER</b></TD>
<TD><center>
<select name="cls_adm" required>
<option value="<?php echo $row['cls_adm'];?>"><?php echo $row['cls_adm'];?></option>
<option class="dropdownlist" style="width:40%">----------</option>
<option class="dropdownlist" style="width:40%">SEM-I</option>
<option class="dropdownlist" style="width:40%">SEM-II</option>
<option class="dropdownlist" style="width:40%">SEM-III</option>
<option class="dropdownlist" style="width:40%">SEM-IV</option>
<option class="dropdownlist" style="width:40%">SEM-V</option>
<option class="dropdownlist" style="width:40%">SEM-VI</option>
<option class="dropdownlist" style="width:40%">SEM-VII</option>
<option class="dropdownlist" style="width:40%">SEM-VIII</option>
</select>
<select name="cls_sec" required>
<option value="<?php echo $row['cls_sec'];?>"><?php echo $row['cls_sec'];?></option>
<option class="dropdownlist" style="width:40%">----------</option>
<option class="dropdownlist" style="width:40%">A</option>
<option class="dropdownlist" style="width:40%">B</option>
<option class="dropdownlist" style="width:40%">C</option>
<option class="dropdownlist" style="width:40%">D</option>
<option class="dropdownlist" style="width:40%">E</option>
<option class="dropdownlist" style="width:40%">F</option>
<option class="dropdownlist" style="width:40%">G</option>
<option class="dropdownlist" style="width:40%">H</option>
<option class="dropdownlist" style="width:40%">I</option>
</select>
</TD>
<TD><b> 12.MEDIUM</b></TD>
<TD><center>
<select name="med_adm" required>
<option value="<?php echo $row['med_adm'];?>"><?php echo $row['med_adm'];?></option>
<option class="dropdownlist">----------</option>
<option class="dropdownlist">English</option>
<option class="dropdownlist">Tamil</option>
</select>
</TD>

<TD><b> 13.BRANCH</b></TD>
<TD><center>
<select name="grop_adm" required>
<option value="<?php echo $row['grop_adm'];?>"><?php echo $row['grop_adm'];?></option>
<option class="dropdownlist">MECH</option>
<option class="dropdownlist">CSE</option>
<option class="dropdownlist">ISE</option>
<option class="dropdownlist">ECE</option>
</select>
</TD>
</TR>
<TR  >
<TD><b> 14.DATE OF ADMISSION</b></TD>
<TD><center><input type="date" name="dat_adm" value="<?php echo $row['dat_adm'];?>" required></TD>
</TR>
</table>
<hr class="vertical"/>
<STYLE>
   input[type=text] {
    width: 90%;
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

input[type=button], input[type=submit] {
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


hr.vertical
{
   width: 0px;
   height: 5%;
}
</STYLE>
<center><input type="submit" value="Confirm & Update" name="upd" style="width:15%">
<center><input type="button" value="Cancel" style="width:10%" onclick="window.location ='dashboard.php'">
</form>

<?php
}
ob_end_flush();
?>