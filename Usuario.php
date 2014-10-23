<?php
require('db.php');
require('header.php');
require('footer.php');
class Usuario {

    private $Id;
    private $Nombre;
    private $ApellidoPaterno;
    private $ApellidoMaterno;
    private $Telefono;
    private $Calle;
    private $NumeroExterior;
    private $NumeroInterior;
    private $Colonia;
    private $Municipio;
    private $Estado;
    private $CP;
    private $Correo;
    private $Usuario;
    private $Contrasena;
    private $Nivel;
    private $Estatus;

    public function createUsuario($id,$nom,$ap,$am,$estat){
        $sql="insert into usuario values($id,'$nom','$ap','$am','','','','','','','','','','','','','$estat')";
        $ex=mysql_query($sql);
        echo"<h1>createUsuario</h1>";
        if($ex){
            echo"<h3>Usuario $nom creado!</h3>";
        }else{
            echo"<h3>Error al insertar!</h3>";
        }

    }
    public function readUsuarioG(){
        echo"<h1 align='center'>Búsqueda</h1>";
        $sql01="select * from usuario order by ApellidoPaterno asc";
        $result01=mysql_query($sql01)or die('Error read');

        echo"<table border='0' class='table table-hover'>";
        echo"<tr>";
        echo"<td>ID</td>";
        echo"<td>NOMBRE</td>";
        echo"<td>APELLIDO PATERNO</td>";
        echo"</tr>";

        while($field=mysql_fetch_array($result01))
        {
            $this->Id=$field['Id'];
            $this->Nombre=utf8_decode($field['Nombre']);
            $this->ApellidoPaterno=$field['ApellidoPaterno'];
            // $this->ApellidoMaterno=$field['ApellidoMaterno'];
            //$this->Telefono=$field['Telefono'];
            //$this->Calle=$field['Calle'];
            //$this->NumeroExterior=$field['NumeroExterior'];
            //$this->NumeroInterior=$field=['NumeroInterior'];
            //$this->Colonia=$field=['Colonia'];
            //$this->Municipio=$field=['Municipio'];
           // $this->Estado=$field=['Estado'];
            //$this->CP=$field=['CP'];
            //$this->Correo=$field=['Correo'];
            //$this->Usuario=$field=['Usuario'];
           // $this->Contrasena=$field=['Contrasena'];
            //$this->Nivel=$field=['Nivel'];
           // $this->Estatus=$field=['Estatus'];



            echo"<tr>";
            echo"<td>$this->Id</td>";
            echo"<td>$this->Nombre</td>";
            echo"<td>$this->ApellidoPaterno</td>";

        }
            echo"</tr></table>";
    }
    public function readUsuarioS($id){
        echo"<h1>Búsqueda</h1>";
        $sql02="select * from usuario where id=$id";
        $result02=mysql_query($sql02)or die('Error en readS');

        echo"<table border='1'>";
        echo"<tr>
            <td>ID</td>
            <td>NOMBRE</td>
            <td>APELLIDO PATERNO</td>
        </tr>";
        while($field02=mysql_fetch_array($result02)){
            $this->Id=utf8_decode($field02['Id']);
            $this->Nombre=utf8_decode($field02['Nombre']);
            $this->ApellidoPaterno=utf8_decode($field02['ApellidoPaterno']);

            echo"<tr>
            <td>$this->Id</td>
            <td>$this->Nombre</td>
            <td>$this->ApellidoPaterno</td>
            ";
        }
        echo"</tr></table>";
    }
    public function updateUsuario($id,$nom,$ap,$am){
       // echo"<h1>updateUsuario</h1>";
        $sql04="update usuario set Nombre='$nom',ApellidoPaterno='$ap',ApellidoMaterno='$am' where Id=$id";
        $exc=mysql_query($sql04)or die('Error update!!'.mysql_error());
    }
    public function deleteUsuario($id){
        echo"<h1>deleteUsuario</h1>";
        $sql04="delete from usuario where Id=$id";
        $result04=mysql_query($sql04);
        if($result04){
            echo"<h3>Usuario con ID $id eliminado!</h3>";
        }else{
            echo"<h3>No se pudo eliminar el usuario!</h3>";
        }
    }

}

?>