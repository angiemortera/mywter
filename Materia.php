<?php
require('bd.php');

class Materia{

    private $id;
    private $nombre;
    private $avatar;
    private $orden;
    private $estatus;



    public function SeleccionaMaestro(){

        echo"<div class='table-responsive'>";
        echo"<center>";
        echo"<table border='0'>";
        echo"<form method='POST' action='ajax.php'>";
        echo"<tr><td>Mestro:</td>";
        echo"<td><select name='idmaestro'>";
        echo"<option value='0'>--Selecciona--</option>";


        $sql1="Select * from usuario where Estatus=1";
        $exe=mysql_query($sql1)or die('Error en consulta'.mysql_erros());

        while($field=mysql_fetch_array($exe)){

            $id=utf8_decode($field['Id']);
            $nom=utf8_decode($field['Nombre']."  ".$field['ApellidoPaterno']);


            echo"<option value='$id'>$id - $nom</option>";
        }
        echo"</select></td></tr>";
        echo"<tr><td colspan='2' align='right'><input type='submit' name='submit' value='Seleccionar'></td></tr>";

        echo"</table>";
        echo"</form>";
        echo"</center>";
        echo"</div>";
        }

    public function DatosMaestro($iduser){

        $sql00="SELECT * FROM usuario WHERE Id=$iduser";
        $exe00=mysql_query($sql00)or die('Error en consulta datosMaestro');

        while($field=mysql_fetch_array($exe00)){

            $this->id=$field['Id'];
            $this->nombre=utf8_decode($field['Nombre']);

        }
        echo"<center>";
        echo"<table border='0'>";
        echo"<tr>
            <td>Selecciono al profesor(a): $this->nombre</td>
            </tr>
            </table>
            ";
    }

    public function MateriasAsignadas($iduser){

        $sql01="SELECT um.idmm,u.Nombre,m.nombre_materia FROM usuario_materia AS um,usuario AS u, materia AS m WHERE id_maestro=$iduser
        AND u.Id=um.id_maestro AND m.idmateria=um.id_materia order  by um.idmm ASC";
        $exe01=mysql_query($sql01)or die('Error en método MateriasAsig');
        echo"<hr width='50%' align='center' color='green' size='10'>";
        echo"<form action='ajax.php' method='POST'>";
        echo"<table border='0' class='table'>";
        echo"<tr>";
        echo"<td>Cve asignación</td>";
        echo"<td>Maestro</td>";
        echo"<td>Materia</td></tr>";
        //echo"<tr>";

        while($field=mysql_fetch_array($exe01)){

            $this->id=$field['idmm'];
            $this->maestr=utf8_decode($field['Nombre']);
            $this->materi=utf8_decode($field['nombre_materia']);

        echo"<tr>";
        echo"<td>$this->id</td>";
        echo"<td>$this->maestr</td>";
        echo"<td>$this->materi</td>";
        echo"</tr>";
        }
        echo"<tr><td colspan='3'><input type='submit' name='btn' value='Eliminar' class='btn-primary'></td></tr>";
        echo"</table>";
        echo"<input type='hidden' name='idmaestro' value='$iduser'>";
        echo"</form>";
    }

    public function AsignaturaMaestro($iduser){

        echo"<hr width='50%' align='center' color='green' size='10'>";
        echo"<form action='ajax.php' method='POST'>";
        echo"<table border='0'>";
        echo"<tr>";
        echo"<td>Seleccione materia:</td>";
        echo"<td><select name='asmateria'>";
        echo"<option value='0'>--Selecciona una opcion--</option>";

        $sql03="SELECT * FROM materia ORDER BY nombre_materia ASC";
        $exe03=mysql_query($sql03)or die('Error en método AsignaturaMaestro');

            while($field=mysql_fetch_array($exe03)){

                $this->id_m=$field['idmateria'];
                $this->nombre_mat=$field['nombre_materia'];

               echo"<option value='$this->id_m'>$this->nombre_mat</option>";
            }

            echo"</select></td></tr>";
            echo"<tr>";
            echo"<td colspan='2' align='right'><input type='submit' name='btn' value='Asignar' class='btn-primary'></td>";
            echo"</tr>";
            echo"</table>";
            echo"<input type='hidden' name='idmaestro' value='$iduser'>";
            echo"</form>";





    }

    public function AltaAsigMaestro($iduser,$idmat){

        $sql04="INSERT INTO usuario_materia VALUES('',$iduser,$idmat)";
        $exe04=mysql_query($sql04)or die('Error en método AltaAsigMaeMat');

    }

    public function EliminarMateriaAsig($iduser){

        $sql05="SELECT MAX(idmm) as idm FROM usuario_materia WHERE id_maestro=$iduser";
        $exe05=mysql_query($sql05)or die('Error en consulta MAX para eliminar');

        $idm=mysql_result($exe05,0,'idm');

        $sql06="DELETE FROM usuario_materia WHERE idmm=$idm";
        $exe06=mysql_query($sql06)or die('Error al eliminar Asignacion');


    }
}
?>