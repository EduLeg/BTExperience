<?php
include("config.php");
include("conexion.php");

    $id=$_REQUEST['ID'];

    $query= "DELETE FROM usuario WHERE ID='$id'";
    $resultado= $pdo->query($query);

    if($resultado){
        header("Location: usuarios.php");
        //header("Elemento modificado");
    }
    else{
        echo "Error, elemento NO eliminado";
    }

?>