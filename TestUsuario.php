<?php
include('Usuario.php');
require('bd.php');
require('header.php');
require('menum.php');

$val=0;
$n1=new Usuario();

if(isset($_POST['submit'])){
    switch($_POST['submit']){
        case"Alta":
            echo"<div class='alert alert-danger'>";
            echo"<br>Bot&oacute;n:".$_POST['submit'];
            echo"</div>";

            $n1->createUsuario("$_POST[cve]","$_POST[nombre]","$_POST[ap]","$_POST[am]","$_POST[tipou]");
            break;
        case"Borrar":
            $n1->deleteUsuario("$_POST[ide]");
            break;
        case "Modificar":
            $n1->updateUsuario("$_POST[idm]","$_POST[nombre],","$_POST[ap]","$_POST[am]");

            break;
        case "Buscar":
           // $n1->readUsuarioG();

             $val=2;
            break;



    }

}



echo"<form method='POST' action='TestUsuario.php'>
<table border='0' class='table table-striped'>
<tr>
    <td>Clave:</td><td colspan='2'><input type='text' name='cve'></td>
</tr><tr>
    <td>Nombre:</td><td colspan='2'><input type='text' name='nombre'></td>
</tr>
<tr>
    <td>Apellido paterno:</td><td colspan='2'><input type='text' name='ap'></td>
</tr><tr>
    <td>Apellido materno:</td><td colspan='2'><input type='text' name='am'></td>
</tr>
<tr>
    <td>Tipo:</td><td colspan='2'><select name='tipou'>
        <option name='1'>Administrador</option>
    </select></td>
</tr>
<tr><td colspan='3' align='right'><input type='submit' value='Alta' name='submit'></td></tr>
<tr>
    <td>ID:</td><td><input type='text' name='idm'></td>
    <td><input type='submit' name='submit' value='Modificar'></td>
</tr>
<tr>
     <td>ID:</td><td><input type='text' name='ide'></td>
    <td><input type='submit' name='submit' value='Borrar'></td>

</tr>
<tr>
     <td>Buscar:</td><td><input type='text'name='buscar'></td>
    <td><input type='submit' name='submit' value='Buscar' ></td>
</tr>
</table>
</form>
";

if($val==2){
    $n1->readUsuarioS("$_POST[buscar]");
}else{
$n1->readUsuarioG();
}

?>