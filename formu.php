<form method="POST" action="TestUsuario.php">
<table border="1">
<tr>
    <td>Nombre:</td><td colspan="2"><input type="text" name="nombre"></td>
</tr>
<tr>
    <td>Apellido paterno:</td><td colspan="2"><input type="text" name="ap"></td>
</tr><tr>
    <td>Apellido materno:</td><td colspan="2"><input type="text" name="am"></td>
</tr>
<tr>
    <td>Tipo:</td><td colspan="2"><select name="tipou">
        <option name="1">Administrador</option>
    </select></td>
</tr>
<tr><td colspan="3" align="right"><input type="submit" value="Alta" name="submit"></td></tr>
<tr>
    <td>ID:</td><td><input type="text" name="idm"></td>
    <td><input type="submit" name="submit" value="Modificar"></td>
</tr>
<tr>
     <td>ID:</td><td><input type="text" name="ide"></td>
    <td><input type="submit" name="submit" value="Borrar"></td>

</tr>
<tr>
     <td>Buscar:</td><td><input type="text" name="buscar"></td>
    <td><input type="submit" name="submit" value="Buscar" ></td>
</tr>
</table>
</form>
<?php

?>