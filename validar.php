<?php
require('bd.php');
$user=$_POST['user'];
$pass=$_POST['pass'];

$sql="SELECT * FROM usuario WHERE Usuario='$user' AND Contrasena='$pass'";
$exe=mysql_query($sql)or die('Erro en consulta login');
$cuantos=mysql_num_rows($exe);

if($cuantos==""){
    $msg="No existe usuario";
   print"<meta http-equiv='refresh' content='0; url=login.php?msg=$msg'>";
    exit;
}else{

    $band=1;
$Nivel=mysql_result($exe,0,'Nivel');
$Estatus=mysql_result($exe,0,'Estatus');

    if($Estatus==2){
        $msg="Usuario Desactivado";
        print"<meta http-equiv='refresh' content='0; url=login.php?msg=$msg'>";
        exit;
        $band=0;
    }

 if($band==1) {
   if($Nivel==3){
       print"<meta http-equiv='refresh' content='0; url=Index1.php'>";
       exit;
   }
    if($Nivel==2){
        print"<meta http-equiv='refresh' content='0; url=Index2.php'>";
        exit;

    }

 }
}
?>