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
    width: 60%;
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

.header {
font-family:fantasy;
color:black;
width:30%;
height:45%;
font-size:16px;
}

.dropdownlist {
    width: 100%;
    padding: 12px 20px;
    margin: 6px 0;
    border: 1px solid #ccc;
    box-sizing: border-box;  
}

button, input[type=submit], input[type=reset] {
    background-color: #365884;
    color: white;
    padding: 12px 18px;
    margin: 6px 0;
    border: none;
    cursor: pointer;
    width: 20%;
    opacity:0.9;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    font-size: 14px;
    border-radius:4px;
}

button:hover, input[type=submit]:hover, input[type=reset]:hover {
    opacity: 1;
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
<button onclick="window.location ='dashboard.php'">Go to Home</button>
<br><br><br>
<form method="POST" action="enrollpro.php">   
<fieldset class="header">
<legend>Enrollment Details:</legend><br>
<br>
ADMISSION NO.:
<input type="text" name="admno" required autofocus>
<br>
STUDENT NAME : 
<input type="text" name="name" required>
<br>
EXTRACURRICULAR ACTIVITY : 
<select name="act_nam">
<option class="dropdownlist">Sports</option>
<option class="dropdownlist">Drama</option>
<option class="dropdownlist">Arts</option>
<option class="dropdownlist">Dancing</option>
<option class="dropdownlist">Hackathons</option>
<option class="dropdownlist">Music</option>
</select>
<br><br>
<input type="submit" name="enroll" value="Enroll">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" value="Clear">
</fieldset>
</form>
</center>
</body>