<?php
require('bd.php');
require('Materia.php');
require('header.php');
require('menum.php');

$materia=new Materia();
$id_maestro=$_POST['idmaestro'];

if(isset($_POST['btn'])){
    switch($_POST['btn']){
        case"Asignar":
            $materia->AltaAsigMaestro("$_POST[idmaestro]","$_POST[asmateria]");
            break;
        case"Eliminar":

            $materia->EliminarMateriaAsig("$_POST[idmaestro]");
            break;

    }

}

$materia->DatosMaestro($id_maestro);
$materia->MateriasAsignadas($id_maestro);
$materia->AsignaturaMaestro($id_maestro);


?>