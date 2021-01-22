<?php
include("php/config.php");
include("php/conexion.php");

    $Nombre= $_POST['nombre'];
    $Apellido= $_POST['apellidos'];
    $Correo= $_POST['email'];    
    $Escuela=$_POST['escuela'];
    $Grado=$_POST['os0'];
    $Etapa=$_POST['os1'];
    $Categoria=$_POST['os2'];
    $Taller=$_POST['os3'];
    
    
    $query= "INSERT INTO usuario(nombre,apellido,correo,escuela,grado,etapa,categoria,taller) VALUES('$Nombre','$Apellido','$Correo','$Escuela','$Grado','$Etapa','$Categoria','$Taller)";
        $resultado= $pdo->query($query);

        if($resultado){
            
            header("Location: send.php");
        }
        else{
            echo "Error, no pudo completarse el registro, intente más tarde.";
        }

?>
