<?php
$user=$_POST['user'];
$psw=$_POST['pass'];

if ($user=="" or $psw=="")
{
$msg="Los campos deben estar llenos";
print "<meta http-equiv='refresh' content='0;
url=login.php?msg=$msg'>";
	  exit;
}
	
require('bd.php');
  

$sql="select * from usuario where Usuario='$user'";
$consulta=mysql_query($sql) or die ("Error en consulta");
$filas=mysql_num_rows($consulta);
  

if ($filas==0){

		$msg="El usuario no existe";
		print "<meta http-equiv='refresh' content='0;
		url=login.php?msg=$msg'>";
	  exit;
		
		}
		 else{
		$id=mysql_result($consulta,0,'Id');
		$pass=mysql_result($consulta,0,'Contrasena');
		$status=mysql_result($consulta,0,'Estatus');
		$nivel=mysql_result($consulta,0,'Nivel');

         }

	 if($psw != $pass)
	  {
        $msg="Contraseña incorrecta";
        print "<meta http-equiv='refresh' content='0;
		url=login.php?msg=$msg'>";
        exit;

      }else{

         if($status==1){

            print "<meta http-equiv='refresh' content='0;
		    url=accesos.php?idu=$id&nivel=$nivel'>";
            exit;


         }else{
             $msg="Usuario Desactivado";
             print "<meta http-equiv='refresh' content='0;
		     url=login.php?msg=$msg'>";
             exit;

         }

     }

	  
?>