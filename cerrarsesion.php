<?php
$idu=$_COOKIE['idu'];
$acceso=$_COOKIE['acceso'];

if ($idu=="" or $acceso=="")
{
print "<meta http-equiv='refresh' content='0;
url=login.php?msg=1'>";


exit;
}
session_start();
$idu2=$_SESSION['idu'];
$acceso2=$_SESSION['acceso'];
if($idu2=="" or $acceso2=="")
{
print "<meta http-equiv='refresh' content='0;
url=login.php?msg=1'>";

exit;
}


		print "<meta http-equiv='refresh' content='0;
	    url=cerrarsesion2.php?idu=$idu'>";


	  exit;
	  
	  
	  
?>