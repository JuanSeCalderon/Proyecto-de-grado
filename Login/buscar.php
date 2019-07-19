<?php
	$servername = "localhost";
    $username = "root";
  	$password = "";
  	$dbname = "formulario";

	$conn = new mysqli($servername, $username, $password, $dbname);
      if($conn->connect_error){
        die("Conexión fallida: ".$conn->connect_error);
      }

    $salida = "";

    $query = "SELECT * FROM registros WHERE Name NOT LIKE '' ORDER By Id LIMIT 30";

    if (isset($_POST['consulta'])) {
    	$q = $conn->real_escape_string($_POST['consulta']);
    	$query = "SELECT * FROM registros WHERE Barrio LIKE '%$q%' OR Nombre LIKE '%$q%' OR Servicio_solicitar LIKE '%$q%' OR Tipo_identificacion LIKE '%$q%' OR Genero LIKE '%$q%' OR CapacitacionRealizada LIKE '%$q%'  ";
    }

    $resultado = $conn->query($query);

    if (!empty($resultado) && $resultado->num_rows>0) {
    	$salida.="<table border=1 class='tabla_datos'>
    			<thead>
					<tr id='titulo'>
					<td>&nbsp;Fecha&nbsp;</td>
					<td>&nbsp;Barrio&nbsp;</td>
					<td>&nbsp;Nombre&nbsp;</td>
					<td>&nbsp;Apellido&nbsp;</td>
					<td>&nbsp;Genero&nbsp;</td>
					<td>&nbsp;Tipo de identificación&nbsp;</td>
					<td>&nbsp;Numero de identificación&nbsp;</td>
					<td>&nbsp;Servicio solicitado&nbsp;</td>
					<td>&nbsp;Capacitación realizada&nbsp;</td>
    				</tr>

    			</thead>
    			

    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) {
			$salida.="<tr>
			<td>&nbsp;".utf8_encode($fila['Fecha'])."&nbsp;</td>
			<td>&nbsp;".utf8_encode($fila['Barrio'])."&nbsp;</td>
			<td>&nbsp;".utf8_encode($fila['Nombre'])."&nbsp;</td>
			<td>&nbsp;".utf8_encode($fila['Apellido'])."&nbsp;</td>
			<td>&nbsp;".utf8_encode($fila['Genero'])."&nbsp;</td>
			<td>&nbsp;".utf8_encode($fila['Tipo_identificacion'])."&nbsp;</td>
			<td>&nbsp;".utf8_encode($fila['Numero_identificacion'])."&nbsp;</td>
			<td>&nbsp;".utf8_encode($fila['Servicio_solicitar'])."&nbsp;</td>
			<td>&nbsp;".utf8_encode($fila['CapacitacionRealizada'])."&nbsp;</td>
    				</tr>";

    	}
    	$salida.="</tbody></table>";
    }else{
    	$salida.="Busqueda sin resultados";
    }


    echo $salida;

    $conn->close();



?>