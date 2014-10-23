<?php
require('bd.php');
require('header.php');
require('menum.php');
require('Materia.php');

$maestro=new Materia();

$maestro->SeleccionaMaestro();

if(isset($_REQUEST['accion'])){
    $accion=$_REQUEST['accion'];
}else{
    $accion=0;
}
if(isset($_REQUEST['maestro'])){
    $id=$_REQUEST['idmaestro'];
}else{
    $accion=0;
}