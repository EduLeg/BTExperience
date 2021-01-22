<!DOCTYPE html>
<html>
    <head>
        <title>Contenido</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body>
        <br>
        <center>
            <table class="table table-hover" border="4">
                <thead class="thead-light">
                    <br>
                    
                    <tr>
                    <th colspan="10">
                        <TABLE FRAME="void" RULES="cols" align="center">
	                        <tr>
		                        <td align="center"><a href="excel.php" class="btn btn-success">Convertir a excel</td>
                            </tr>
                        </TABLE>
                        
                    </tr>
                    <tr>
                        <th># DE PERSONAS REGISTRADAS</th>
                        <th>NOMBRE</th>
                        <th>APELLIDO</th>
                        <th>CORREO</th>
                        <th>ESCUELA</th>
                        <th>GRADO ESCOLAR</th>
                        <th>ETAPA DE EMPRENDIMIENTO</th>
                        <th>CATEGORÍA DE EMPRENDIMIENTO</th>
                        <th>TALLER</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("config.php");
                    include("conexion.php");
                    
                    $query="SELECT * FROM usuario";
                    $resultado=$pdo->query($query);
                    while($row=$resultado->fetch($fetch_style=PDO::FETCH_ASSOC)){
                    ?>
                    <tr>
                    <td><?php echo $row['ID'];?></td>
                        <td><?php echo $row['nombre'];?></td>
                        <td><?php echo $row['apellido'];?></td>
                        <td><?php echo $row['correo'];?></td>
                        <td><?php echo $row['escuela'];?></td>
                        <td><?php echo $row['grado'];?></td>
                        <td><?php echo $row['etapa'];?></td>
                        <td><?php echo $row['categoria'];?></td>
                        <td><?php echo $row['taller'];?></td>

                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </center>
    </body>
</html>