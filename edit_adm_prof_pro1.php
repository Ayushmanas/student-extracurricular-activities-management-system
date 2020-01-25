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
if(isset($_POST['upd']))
{
$adm_no=mysql_real_escape_string($_POST['admno']);
$act_nam=mysql_real_escape_string($_POST['act_nam']);
$year=mysql_real_escape_string($_POST['year']);
$twnvill=mysql_real_escape_string($_POST['twnvill']);
$dob=mysql_real_escape_string($_POST['dob']);
$gen=mysql_real_escape_string($_POST['gen']);
$religion=mysql_real_escape_string($_POST['religion']);
$caste=mysql_real_escape_string($_POST['caste']);
$comunit=mysql_real_escape_string($_POST['comunit']);
$fname=mysql_real_escape_string($_POST['fname']);
$f_ed_qua=mysql_real_escape_string($_POST['f_ed_qua']);
$f_add_pin=mysql_real_escape_string($_POST['f_add_pin']);
$ph_no=mysql_real_escape_string($_POST['ph_no']);
$cls_adm=mysql_real_escape_string($_POST['cls_adm']);
$cls_sec=mysql_real_escape_string($_POST['cls_sec']);
$grop_adm=mysql_real_escape_string($_POST['grop_adm']);
$med_adm=mysql_real_escape_string($_POST['med_adm']);
$dat_adm=mysql_real_escape_string($_POST['dat_adm']);
$facname=mysql_real_escape_string($_POST['facname']);

$sql="UPDATE stud_adm SET fac_name='$facname',year='$year',twnvill='$twnvill',dob='$dob',gen='$gen',religion='$religion',caste='$caste',comunit='$comunit',fname='$fname',f_ed_qua='$f_ed_qua',
f_add_pin='$f_add_pin',ph_no='$ph_no',cls_adm='$cls_adm',cls_sec='$cls_sec',grop_adm='$grop_adm',med_adm='$med_adm',dat_adm='$dat_adm',act_nam='$act_nam' WHERE adm_no='$adm_no'";


$result= mysql_query($sql);
if($result)
{
echo "<br><br><br><br><br><center><h3>Updated Successfully" ;
}
else
{
echo "Failed to Update";
}
}
?>
<br><br>
<center>
<STYLE>
    input[type=button] {
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

input[type=button]:hover {
    opacity: 1;
}
</STYLE>    
<input type="button" value="Go to Home" onclick="window.location ='dashboard.php'">