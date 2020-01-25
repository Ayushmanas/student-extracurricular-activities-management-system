if(($row = mysql_fetch_array($result))&&($utype=="FACULTY"))
{
$_SESSION['stduid2']=$row['eid'];//stores userid session
$_SESSION['stdpwd2']=$row['pwd'];//stores password session
//$_SESSION['stdutype2']=$row['utype'];//stores usertype session
echo "<h3>Faculty</h3>";
header('location: dashboard1.php');
}
else if(($row = mysql_fetch_array($result))&&($utype=="STUDENT"))
{
$_SESSION['stduid2']=$row['eid'];//stores userid session
$_SESSION['stdpwd2']=$row['pwd'];//stores password session
//$_SESSION['stdutype2']=$row['utype'];//stores usertype session
echo "<h3>Student</h3>";
header('location:dashboard2.php');
}