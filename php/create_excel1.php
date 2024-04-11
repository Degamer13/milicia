<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=documento_exportado_" . date('Y:m:d:m:s').".xls");
	header("Pragma: no-cache"); 
	header("Expires: 0");

    require"conexion.php";
	
	$output = "";
	
	if(ISSET($_POST['export'])){
		$output .="
			<table>
				<thead>
					<tr>
                    <th >NOMBRE Y APELLIDO</th>
                    <th >CEDULA</th>
                    <th >GENERO</th>
                    <th >CORREO ELECTRONICO</th>
                    <th >JERARQUIA</th>
                    <th >REGION</th>
                    <th >ADI</th>
                    <th >ZODI</th>

					</tr>
				<tbody>
		";
		
        
		$query = mysqli_query($conexion, "SELECT * FROM persona p  LEFT JOIN datos_militar d  ON d.id_mili=p.id_p LEFT JOIN adi_datos a ON d.adi=a.id_a LEFT JOIN region_tabla r ON a.id_adi=r.id_b LEFT JOIN zodi_tabla z ON r.id_region=z.id_c WHERE genero='MUJER'") or die(mysqli_errno());
		while($fetch = mysqli_fetch_array($query)){
			
		$output .= "
					<tr>
                    <td >".$fetch['nombre1']." ".$fetch['apellido1']."</td>
                    <td >".$fetch['cedula']."</td>
                    <td >".$fetch['genero']."</td>
                      <td >". $fetch['correo']."</td>
                     <td >".$fetch['jerarquia']."</td>
                     <td >". $fetch['descripcion1']."</td>
                     <td >".$fetch['descripcion']."</td>
                     <td >".$fetch['descripcion2']."</td>
					</tr>

                    ";
                }
                
                $output .="
                        </tbody>
                        
                    </table>
                ";
                
                echo $output;
            }
            
        ?>