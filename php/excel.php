<?php  
include('config.php');
include('conexion.php');
    
    
    $query = "SELECT * FROM usuario";
    
    $connect=mysqli_connect(SERVIDOR,USUARIO,PASSWORD,BD);
    $result=mysqli_query($connect,$query);
    $output='';
  $output .= '
   <table class="table" bordered="1">   
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>APELLIDOS</th>
                        <th>CORREO</th>
                        <th>ESCUELA</th>
                        <th>GRADO</th>
                        <th>ETAPA</th>
                        <th>CATEGORIA</th>
                        <th>TALLER</th>
                        
                    </tr>
                    
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["ID"].'</td>  
                         <td>'.$row["nombre"].'</td>  
                         <td>'.$row["apellido"].'</td>
                         <td>'.$row["correo"].'</td>
                         <td>'.$row["escuela"].'</td>
                         <td>'.$row["grado"].'</td>
                         <td>'.$row["etapa"].'</td>
                         <td>'.$row["categoria"].'</td>
                         <td>'.$row["taller"].'</td>  
                         
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=registro.xls');
  echo $output;
 

?>