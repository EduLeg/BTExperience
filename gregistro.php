<?php
include("php/config.php");
include("php/conexion.php");

    $Nombre= $_POST['nombre'];
    $Apellido= $_POST['apellidos'];
    $Correo= $_POST['email'];    
    $Escuela=$_POST['escuela'];
    $Grado=$_POST['os0'];
    $Talleres= array();
    $i=0;

    if(!empty($_POST['lista'])){
        foreach($_POST['lista'] as $taller){
            $Talleres[]=$taller;
            $talleres[]=',';
            //print_r($Talleres);
            $i=$i+1;
            
        }
        //echo($Talleres);
        $T = implode(",", $Talleres);
        //echo($T);
        $query= "INSERT INTO usuario(nombre,apellido,correo,escuela,grado,taller) VALUES('$Nombre','$Apellido','$Correo','$Escuela','$Grado','$T')";
        $resultado= $pdo->query($query);

        if($resultado){
            
            header("Location: send.php");
        }
        else{
            echo "Error, no pudo completarse el registro, intente más tarde.";
        }
    }

?>
