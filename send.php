<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'phpMAILER/Exception.php';
require 'phpMAILER/PHPMailer.php';
require 'phpMAILER/SMTP.php';
include("php/config.php");
include("php/conexion.php");
// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);



    $Nombre= $_POST['nombre'];
    $Apellido= $_POST['apellidos'];
    $Correo= $_POST['email'];    
    $Escuela=$_POST['escuela'];
    $Grado=$_POST['os0'];
    $Etapa=$_POST['os1'];
    $Categoria=$_POST['os2'];
    $Taller=$_POST['os3'];
    mb_http_output('UTF-8');
    $Nombre = mb_substr($Nombre,0,15);
    $query= "INSERT INTO usuario(nombre,apellido,correo,escuela,grado,etapa,categoria,taller) VALUES('$Nombre','$Apellido','$Correo','$Escuela','$Grado','$Etapa','$Categoria','$Taller')";

    $resultado= $pdo->query($query);

    $clave='Rayoemprendedor28022020';//AQUÍ VA LA CONTRASEÑA DEL CORREO
    $emisor= "bteexperience@gmail.com";//AQUÍ VA EL CORREO
    //$nombre="BTExperience";
    $nom="BTExperience";
    
    //$correo= $_POST["correo"];
    //$mensaje= "prueba";
    header('Content-Type: text/html; charset=UTF-8');
    $contenido="<!doctype html>";
    $contenido.="<html>";
    $contenido.="  <head>";
    $contenido.="    <meta name='viewport'content='width=device-width'/>";
    $contenido.="    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />";
    $contenido.="    <title>Simple Transactional Email</title>";
    $contenido.="    <style>
        /* -------------------------------------
            GLOBAL RESETS
        ------------------------------------- */
        b.disc{
            color: blueviolet;
        }
        b.ins{
            color: #4c68d7;  
        }
        h2.middle{
            text-align: center;
        }
        img {
            border: none;
            -ms-interpolation-mode: bicubic; 
            margin-left: auto;
            margin-right: auto;
            display: block;
            width: 30%;        
            }
        body {
            background-color: #f6f6f6;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0; 
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%; }
        table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%; }
            table td {
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top; }
        /* -------------------------------------
            BODY & CONTAINER
        ------------------------------------- */
        .body {
            background-color: #f6f6f6;
            width: 100%; }
        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block;
            Margin: 0 auto !important;
            /* makes it centered */
            max-width: 580px;
            padding: 10px;
            width: 580px; }
        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            box-sizing: border-box;
            display: block;
            Margin: 0 auto;
            max-width: 580px;
            padding: 10px; }
        /* -------------------------------------
            HEADER, FOOTER, MAIN
        ------------------------------------- */
        .main {
            background: #fff;
            border-radius: 3px;
            width: 100%; }
        .wrapper {
            box-sizing: border-box;
            padding: 20px; }
        .footer {
            clear: both;
            padding-top: 10px;
            text-align: center;
            width: 100%; }
            .footer td,
            .footer p,
            .footer span,
            .footer a {
            color: #999999;
            font-size: 12px;
            text-align: center; }
        /* -------------------------------------
            TYPOGRAPHY
        ------------------------------------- */
        h1,
        h2,
        h3,
        h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            Margin-bottom: 30px; }
        h1 {
            font-size: 30px;
            font-weight: 300;
            text-align: center;
            text-transform: capitalize;
            }
        p,
        ul,
        ol {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            Margin-bottom: 15px; }
            p li,
            ul li,
            ol li {
            list-style-position: inside;
            margin-left: 5px; }
        a {
            color: #3498db;
            text-decoration: underline; }
        
        /* -------------------------------------
            RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width: 620px) {
            table[class=body] h1 {
            font-size: 28px !important;
            margin-bottom: 10px !important; }
            table[class=body] p,
            table[class=body] ul,
            table[class=body] ol,
            table[class=body] td,
            table[class=body] span,
            table[class=body] a {
            font-size: 16px !important; }
            table[class=body] .wrapper,
            table[class=body] .article {
            padding: 10px !important; }
            table[class=body] .content {
            padding: 0 !important; }
            table[class=body] .container {
            padding: 0 !important;
            width: 100% !important; }
            table[class=body] .main {
            border-left-width: 0 !important;
            border-radius: 0 !important;
            border-right-width: 0 !important; }
            table[class=body] .btn table {
            width: 100% !important; }
            table[class=body] .btn a {
            width: 100% !important; }
            table[class=body] .img-responsive {
            height: auto !important;
            max-width: 100% !important;
            width: auto !important; }}
        @media all {
            .ExternalClass {
            width: 100%; }
            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
            line-height: 100%; }
            .apple-link a {
            color: inherit !important;
            font-family: inherit !important;
            font-size: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
            text-decoration: none !important; } 
            .btn-primary table td:hover {
            background-color: #34495e !important; }
            .btn-primary a:hover {
            background-color: #34495e !important;
            border-color: #34495e !important; } }
        </style>";
    $contenido.="  </head>";
    $contenido.="  <body class=''>";
    $contenido.="    <table border='0' cellpadding='0' cellspacing='0' class='body'>";
    $contenido.="      <tr>";
    $contenido.="        <td>&nbsp;</td>";
    $contenido.="        <td class='container'>";
    $contenido.="          <div class='content'>";
    $contenido.="            <table class='main'>

                <!-- START MAIN CONTENT AREA -->
                <tr>
                    <td class='wrapper'>
                    <table border='0' cellpadding='0' cellspacing='0'>
                        <tr>
                        <td>
                            <img src='/images/BTExperience-logo-dark.png'>
                            <h1>&iexcl;Bienvenid@ $Nombre&#33;</h1>
                            <h2>Gracias por inscribirte a esta grandiosa experiencia emprendedora</h2>
                            <p>Estamos a unos d&iacute;as de iniciar BTExperience 2021. Recuerda que este evento se realizar&aacute; de manera digital en nuestro servidor <b class='b disc'>Discord</b>. Utiliza el siguiente <a href='https://discord.gg/FfBugyfUuP'>enlace</a> para acceder.</p>
                            <p>Mientras tanto puedes disfrutar de nuestro contenido emprendedor, actualizaciones y noticias del evento en nuestra p&aacute;gina de <a rel='stylesheet' href='https://www.instagram.com/btexperience_/'>
                                <b class='ins'>Instagram</b></a>.
                            </p>
                            <h2 class='middle'>&iexcl;Te esperamos el d&iacute;a 27 y 28 de Febrero &#33;</h2>
                        </td>
                        </tr>
                    </table>
                    </td>
                </tr>

                <!-- END MAIN CONTENT AREA -->
                </table>";

    $contenido.="            <!-- START FOOTER -->";
    $contenido.="            <div class='footer'>
                <table border='0' cellpadding='0' cellspacing='0'>
                    <tr>
                    <td class='content-block'>
                        <span class='apple-link'><a href='http://btexperience.com.mx/'>BTExperience.com.mx</a> | Crea | Explora | Emprende</span>
                        
                    </tr>
                </table>
                </div>";
    $contenido.="            <!-- END FOOTER -->";
                
    $contenido.="          <!-- END CENTERED WHITE CONTAINER -->";
    $contenido.="          </div>";
    $contenido.="        </td>";
    $contenido.="        <td>&nbsp;</td>";
    $contenido.="      </tr>";
    $contenido.="    </table>";
    $contenido.="  </body>";
    $contenido.="</html>";

    #$contenido= "nombre de cliente potencial: ". $Nombre . "<br>Correo: " . $Correo . "<br>Mensaje: " . $mensaje
        //echo($query);
        
        if($resultado){
            try {
                //Server settings
                //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
                $mail->isSMTP();                                            // Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                $mail->Username   = $emisor;                             // SMTP username
                $mail->Password   = $clave;                               // SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
                $mail­->CharSet = "UTF­-8";
                $mail­->Encoding = "quoted­printable"; 
                //Recipients
                $mail->setFrom($emisor, $nom);
                $mail->addReplyTo($emisor, $nom);
            
                $mail->addAddress($Correo, $Nombre);     // Add a recipient
                $mail->addCC($emisor);
                
            
                // Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Registro confirmado';
                $mail->Body    = $contenido;
                //$mail->AltBody = $contenido;
                //$mail->addAttachment("");
            
                $mail->send();
                echo 'Registrado correctamente';
                header("Location:gracias.html");
            } catch (Exception $e) {
                echo "Error, no es posible enviar el registro, vuelve a intentar. Mailer Error: {$mail->ErrorInfo}";
                //header("Location:index.html");
            }
            header("Location: gracias.html");
            die();
        }
        else{
            //echo "Error, no es posible enviar el registro, vuelve a intentar. Mailer Error: {$mail->ErrorInfo}";

            echo "Error, no pudo completarse el registro, intente más tarde.";
            header("Location:index.html");
            die();
        }

?>