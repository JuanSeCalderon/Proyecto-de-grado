<?php

$usuario = "root";
$password = "";
$servidor = "localhost";
$basededatos ="formulario";


date_default_timezone_set('America/Bogota');


$date = date('m/d/Y h:i:sa', time());


$conexion = mysqli_connect  ($servidor,$usuario,"") or die ("No se ha podido conectar con el servidor de Base de datos");
$conexion -> set_charset("utf8");

$db = mysqli_select_db($conexion, $basededatos) or die ("Upps! No se ha podido conectar a la Base de datos");



$date = date('Y-m-d H:i:s');
$nombreBarrio = $_POST['opcBarrio'];
$nombreCompleto = $_POST['nombre'];
$apellidoCompleto = $_POST['apellido'];
$tipoIdentificacion = $_POST['TipoId'];
$noIdentificacion = $_POST['numeroId'];
$genero = $_POST['genero'];
$orisex = $_POST['OriSex'];
$situapobla = $_POST['SituPobla'];
$grupoEtnico = $_POST['GrupoEtnico'];
$victiarma = $_POST['Victima'];
$fechaNacimiento = $_POST['fecha'];
$Edad = $_POST['Edad'];
$Telefono = $_POST['numerotel'];
$servicios = $_POST['Servicios'];
$capaR = $_POST['ServiciosCap'];

 


$sql = "INSERT INTO registros (Fecha,Barrio,Nombre,Apellido,Tipo_identificacion,Numero_identificacion,Genero,Orientacion_sexual,Situacion_problacion,Grupo_etnico,Victima_conflicto,Fecha_nacimiento,Rango_edad,Telefono,Servicio_solicitar,CapacitacionRealizada)
VALUES ('$date','$nombreBarrio','$nombreCompleto','$apellidoCompleto','$tipoIdentificacion','$noIdentificacion','$genero',
'$orisex','$situapobla','$grupoEtnico','$victiarma','$fechaNacimiento','$Edad','$Telefono','$servicios','$capaR')";

$ejecutar=mysqli_query($conexion, $sql);

if(!$ejecutar){
 echo '<script>alert("Hubo un error")</script>';
} else{
 echo "<SCRIPT>
 alert('¡Bien hecho!, El registro fue exitoso');
 document.location=('formulario.html');
 </SCRIPT>";

}

?>
