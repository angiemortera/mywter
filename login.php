<?php
require('header.php');
?>
<!DOCTYPE HTML>
<html>
<head></head>
<body>
<center>
    <fieldset>
        <legend>Login</legend>
<form action="valida.php" method="POST">
<table border="0">
<tr>
    <td>Usuario:</td>
    <td><input type="text" name="user" class="form-control"></td>
</tr>
<tr>
    <td>Contraseña:</td>
    <td><input type="password" name="pass" class="form-control"></td>
</tr>
<tr>
    <td colspan="2" align="right"><input type="submit" value="Enviar"></td>
</tr>
</table>
    <?php
    $msg=1;
    $msg=$_GET['msg'];
    if ($msg !=1)
    {
        echo "<font face=Arial color=red size=-1>$msg</font>";
    }
    ?>
</form>
    </fieldset>
</body>
</html>
