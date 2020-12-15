<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'phpMAILER/Exception.php';
require 'phpMAILER/PHPMailer.php';
require 'phpMAILER/SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

include("php/config.php");
include("php/conexion.php");

    $Nombre= $_POST['nombre'];
    $Apellido= $_POST['apellidos'];
    $Correo= $_POST['email'];    
    $Escuela=$_POST['escuela'];
    $Grado=$_POST['os0'];
    $Talleres= array();
    $i=0;
    $clave='#';//AQUÍ VA LA CONTRASEÑA DEL CORREO
    $destino= "#";//AQUÍ VA EL CORREO
    //$nombre="BTExperience";
    $nom="BTExperience";
    //$correo= $_POST["correo"];
    $mensaje= "prueba";
    $contenido= "nombre de cliente potencial: ". $Nombre . "<br>Correo: " . $Correo . "<br>Mensaje: " . $mensaje;

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
            try {
                //Server settings
                //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
                $mail->isSMTP();                                            // Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                $mail->Username   = $destino;                             // SMTP username
                $mail->Password   = $clave;                               // SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
                $mail­->CharSet = "UTF­8";
                $mail­->Encoding = "quoted­printable"; 
                //Recipients
                $mail->setFrom($destino, $nom);
                $mail->addReplyTo($destino, $nom);
            
                $mail->addAddress($Correo, $Nombre);     // Add a recipient
                
            
                // Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Pedido especial';
                $mail->Body    = $contenido;
                $mail->AltBody = $contenido;
                //$mail->addAttachment("");
            
                $mail->send();
                echo 'Registrado correctamente';
                //header("Location:gracias.html");
            } catch (Exception $e) {
                echo "Error, no es posible enviar el registro, vuelve a intentar. Mailer Error: {$mail->ErrorInfo}";
                //header("Location:index.html");
            }
            header("Location: gracias.html");
        }
        else{
            echo "Error, no pudo completarse el registro, intente más tarde.";
            header("Location:index.html");
        }
    }

?>