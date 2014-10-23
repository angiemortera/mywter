<?php
require('Alumno.php');

$n2=new Alumno();
//$n2->updateUsuario();
$n2->MostrarAlumnos();


if(isset($_POST['accion'])){
    switch($_POST['accion']){
        case "Asignar":
            $n2->AltaAlumnosGrupo($_POST['grupo'],$_POST['alm']);

            break;
        case 2:
            $n2->EliminaAlumnosGrupo();
            break;

    }

}

?>