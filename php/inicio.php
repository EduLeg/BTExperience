<?php
include 'CU.php';
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <center><br/><br/></br>
        <form action="CU.php" method="POST">

            <input type="text"  name="Usuario" placeholder="usuario..." required/><br/></br>
            <input type="password"  name="CLAVE" placeholder="CLAVE..."required/><br/></br>
            <input type="submit" value="Aceptar" name="login"><br/></br>
        </form>
    </center>
</body>
</html>