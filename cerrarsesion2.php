<?php
$idu=$_GET['idu'];
setCookie('idu',$idu);
setCookie('acceso',1);
session_start();
session_unset();
session_destroy();	
print "<meta http-equiv='refresh' content='0;
url=login.php?msg=1'>";

?>