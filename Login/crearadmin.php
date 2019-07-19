<?php

	include 'conn.php';

	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$checkEmail = "SELECT * FROM administradores WHERE Email = '$_POST[Email]'";
	$checkUsuario = "SELECT * FROM administradores WHERE Usuario ='$_POST[Usuario]'";
    

	$result1 = $conn-> query($checkEmail);
	$result = $conn-> query($checkUsuario);
    
	$count1 = mysqli_num_rows($result1);
    $count = mysqli_num_rows($result);
    

	if ($count == 1) {
	echo "<SCRIPT>
	alert('El correo electronico ya se encuentra registrado.');
	document.location=('registroadmin.html');
	</SCRIPT>";



    } 
    else if ($count1 == 1) {
		echo "<SCRIPT>
		alert('El usuario ya se encuentra registrado.');
		document.location=('registroadmin.html');
		</SCRIPT>"; 
    } else {	
	
	
	$nombre = $_POST['Nombre'];
	$email = $_POST['Email'];
	$edad = $_POST['Edad'];
    $genero = $_POST['Genero'];
	$barrio = $_POST['Barrio'];
	/* $foto= $_FILES['fotoperfil']['name'];
	$ruta = 'ImgUser/'.$foto;
	$archivo=$_FILES['fotoperfil']['tmp_name'];
	$subir=move_uploaded_file($archivo, $ruta); */
	$user = $_POST['Usuario'];
    $pass = $_POST['Contraseña'];
    $cod = $_POST['Codig'];
	
	
	$passHash = password_hash($pass, PASSWORD_DEFAULT);
	$codHash = password_hash($cod, PASSWORD_DEFAULT);
	
	$query = "INSERT INTO administradores (Nombre, Email, Edad, Genero, Barrio, Usuario, Contrasena, Codigo ) VALUES ('$nombre', '$email', '$edad', '$genero', '$barrio', '$user', '$passHash', '$codHash')";

	if (mysqli_query($conn, $query)) {
		echo "<SCRIPT>
		alert('Su registro como administrador fue exitoso, Ya puede inicia sesión');
		document.location=('index.html');
		</SCRIPT>";		
		} else {
			echo "Error: " . $query . "<br>" . mysqli_error($conn);
			return false;
		}	
	}	
	mysqli_close($conn);
	?>