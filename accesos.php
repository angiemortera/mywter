<?php
$idu=$_GET['idu'];
$nivel=$_GET['nivel'];
if($idu=="")
{
print "<meta http-equiv='refresh' content='0;
url=login.php?msg=1'>";
exit;
}
else
{
if($nivel==2)
{
setCookie('idu',$idu);
setCookie('acceso',1);
session_start();
$_SESSION['idu']=$idu;
$_SESSION['acceso']=1;


print "<meta http-equiv='refresh' content='0;
url=Index2.php'>";
exit;
}
else
{
setCookie('idu',$idu);
setCookie('acceso',1);
session_start();
$_SESSION['idu']=$idu;
$_SESSION['acceso']=1;
print "<meta http-equiv='refresh' content='0;
url=Index1.php'>";
exit;
}
}

?>
