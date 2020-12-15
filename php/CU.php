<?php
    include('config.php');
    include('conexion.php');

    if(isset($_POST['login'])){
        $u= $_POST['Usuario'];
        $c= $_POST['CLAVE'];
            
        
            $clave=md5($c);
            $usuario=md5($u);
            //echo($clave);
            //echo("-----");
            //echo($usuario);
            $query= "SELECT * FROM tblU WHERE clave='$clave' AND UTE='$usuario'";

            $resultado= $pdo->query($query);
            $row=$resultado->fetch($fetch_style=PDO::FETCH_ASSOC);
            if($row['UTE']==$usuario AND $row['clave']==$clave){
                
                header('location: usuarios.php');
            }else{
                
                header('location: inicio.php');
            }
            
        

    }

?>