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
if(isset($_POST['phupd']))
{
$admno=mysql_real_escape_string($_POST['admno']);
echo "Admno ".$admno;
$photo = $_FILES['image']['name'];
$random_digit=rand(0000,9999);
$random_digits=rand(0000,9999);
$new_file_name=$random_digit.$random_digits.urlencode($photo);
$target= "images/student/".$new_file_name;
$img=$new_file_name;
$sql="UPDATE stud_adm SET img='$img' WHERE adm_no='$admno'";
$result= mysql_query($sql);
$immo=move_uploaded_file($_FILES['image']['tmp_name'],$target);
echo "<br><br><br><br><br><center><h3>Photo Updated Successfully" ;
}
?>
<center>
<form action="edit_adm_prof_pro.php" method="GET">
<input type="text" name="admno" value="<?php echo $admno;?>" hidden>
<input type="submit" value="Click here to Proceed" name="edit" style="font-size:15px;background-color: #365884;color: white; padding: 14px 20px; margin: 8px 0; border: none; cursor: pointer; width: 20%;opacity:0.9;">
</form>
</center>