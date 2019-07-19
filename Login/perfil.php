<?php
session_start();

include 'conn.php';	
?>

<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="cssB/estilo.css"> 
</head>
<body>
<?php
    if (isset($_SESSION['loggedin'])) {  
      
    }
    else {
        echo "<SCRIPT>
		alert('Acceso de negado');
		document.location=('index.html');
		</SCRIPT>";
        exit;
    }
  
    $now = time();           
    if ($now > $_SESSION['expire']) {
        session_destroy();
        echo "<SCRIPT>
		alert('Su sesión ha expirado');
		document.location=('index.html');
		</SCRIPT>";
        exit;
        }
    ?>
		<div id="perfil">
			
				
				<div class="header">
					
					<button class="mui-btn buttonportada ">
						<div class="text">cambiar portada</div>
						<i class="fa fa-picture-o" aria-hidden="true"></i>
					</button>
				</div>
			
				<!-- Foto perfil -->
				<div class="avatar" >

				<!-- <img src="images/'.$_SESSION['fotoperfil'].'"/> --> 
				</div>
				
				
			<nav>
				
				<div class="opperfil">
					<center>
						
						<button class="mui-btn buttonconfig mui-btn--primary">
							<div class="text">Cambiar foto de perfil</div>
						</button>
						
						<button  class="mui-btn buttonconfig mui-btn--primary" >
								<a  style='text-decoration:none;color:rgb(255, 255, 255)' href="#Config"><div class="text">&nbsp;Configuración de cuenta</div>
						</a></button>
					</center>
				</div>
			</nav>
			<div id="content" align="right"> <a href="../Login/index.html"><img HSPACE=25  class="cerrar" src="../Imagines/cerrarsesion.png"  width="50" height="50" alt="Cerrar sesión" ></a>
			</div>
			
				
				<div class="tituloperfil">
				
					 <h1 align="center"> <?php echo $_SESSION['Nombre']; ?></h1>
					<hr style="border-color:#4CAF50; width:27%;">
					<div class="bigbriefing">
				
						<p>
							<b>Usuario:</b> <?php echo $_SESSION['Usuario']; ?> <b class="efectos">|</b>
							<b>Edad:</b> <?php echo $_SESSION['Edad']; ?><b class="efectos">|</b>
							<b>Genero:</b> <?php echo $_SESSION['Genero']; ?> <b class="efectos">|</b>
							<br>
							<b>Correo:</b> <?php echo $_SESSION['Email']; ?> <b class="efectos">|</b>
							<b>Punto vive digital:</b class="efectos"> <?php echo $_SESSION['Barrio']; ?>
						</p>
					</div>
					
				</div><br/>
			
				<div class="infoAdministrador">
					<form class="mui-form">
			<center>
						<h1 class="title-2">Busqueda de registros actuales</h1>
						<hr style="border-color:#4CAF50; width:74%;">
			
						<section class="principal">

	

	<div class="formulario">
		<br>
		<input type="text" name="caja_busqueda" id="caja_busqueda"></input>

		
	</div>
<br>
	<div id="datos"></div>
	
	
</section>
</center>	
				
						<br/>
			
						<h1 class="title-2">Exportar registros</h1>
						<hr style="border-color:#4CAF50; width:44%;">
						<br/>
					
						<table align="center"><tr>
                     <td align="center">         
                        <div class="contenedor">
                                    <article>
                                        <input type="button" id="btn-abrir-popup" class="button2" value="Exportar Pdf" alt="imagen" style="vertical-align: middle">
                                    </article></div></td></tr></table>
                    <div class="overlay12" id="overlay">
                        <div class="popup" id="popup">
                            <a id="btn-cerrar-popup" class="btn-cerrar-popup"><i></i>X</a>
                            
                                <table style="text-align:center;width:100%">
									<h3>Elige el mes</h3>
									<hr style="border-color:#4CAF50; width:40%;">
                                    <tr>
                                        <td><form action="../Reportes en Pdf Punto vive digital.php" target="_blank" method="POST"> <input target="_blank" type="submit" name="Enero" value="Enero" class="button2" alt="imagen" width="32" height="32" style="vertical-align: middle" ></form></td>
                                        <td><form action="../Reportes en Pdf Punto vive digital.php" target="_blank" method="POST"> <input type="submit" name="Febrero" value="Febrero" class="button2" alt="imagen" width="32" height="32" style="vertical-align: middle"></form></td>
                                        <td><form action="../Reportes en Pdf Punto vive digital.php" target="_blank" method="POST"> <input type="submit" name="Marzo" value="Marzo" class="button2" alt="imagen" width="32" height="32" style="vertical-align: middle"></form></td></tr>
                                            
                                        <tr>
                                        <td><form action="../Reportes en Pdf Punto vive digital.php" target="_blank" method="POST"> <input type="submit" name="Abril" value=" Abril" class="button2" alt="imagen" width="32" height="32" style="vertical-align: middle"></form></td>
                                        <td><form action="../Reportes en Pdf Punto vive digital.php" target="_blank" method="POST"> <input type="submit" name="Mayo" value=" Mayo" class="button2" alt="imagen" width="32" height="32" style="vertical-align: middle"></form></td>
                                        <td><form action="../Reportes en Pdf Punto vive digital.php" target="_blank" method="POST"> <input type="submit" name="Junio" value=" Junio" class="button2" alt="imagen" width="32" height="32" style="vertical-align: middle"></form></td></tr>

                                        <tr>
                                        <td><form action="../Reportes en Pdf Punto vive digital.php" target="_blank" method="POST"> <input type="submit" name="Julio" value=" Julio" class="button2" alt="imagen" width="32" height="32" style="vertical-align: middle"></form></td>
                                        <td><form action="../Reportes en Pdf Punto vive digital.php" target="_blank" method="POST"> <input type="submit" name="Agosto" value=" Agosto" class="button2" alt="imagen" width="32" height="32" style="vertical-align: middle"></form></td>
                                        <td><form action="../Reportes en Pdf Punto vive digital.php" target="_blank" method="POST"> <input type="submit" name="Septiembre" value=" Septiembre" class="button2" alt="imagen" width="32" height="32" style="vertical-align: middle"></form></td></tr>

                                        <tr>
                                        <td><form action="Reportes en Pdf Punto vive digital.php" target="_blank" method="POST"> <input type="submit" name="Octubre" value="Octubre" class="button2" alt="imagen" width="32" height="32" style="vertical-align: middle"></form></td>
                                        <td><form action="Reportes en Pdf Punto vive digital.php" target="_blank" method="POST"> <input type="submit" name="Noviembre" value="Noviembre" class="button2" alt="imagen" width="32" height="32" style="vertical-align: middle"></form></td>
                                        <td><form action="Reportes en Pdf Punto vive digital.php" target="_blank" method="POST"> <input type="submit" name="Diciembre" value="Diciembre" class="button2" alt="imagen" width="32" height="32" style="vertical-align: middle"></form></td></tr>
													</table></div></div>
													<form align="center" action="../reporte.php" method="POST"> 
														<input type="submit" value="Exportar Excel" class="button2" alt="imagen" width="32" height="32" style="vertical-align: middle">
													  </form>
	<script src="../popup.js"></script>
	
							<center>
							<main>	

								<section id="Config" class="about-section">
								<h1 class="title-2">Configuración de cuenta</h1>
								<hr style="border-color:#4CAF50; width:55%;">
								</section>
								<center>
								<form method="POST" >
								<table>
									<tr>
								<td><h3>Nombre: &nbsp; </h3></td><td><input type="text" class="efect"  value = "<?php echo $_SESSION['Nombre']; ?>" name="nombreact"></td>
								</tr>
								<tr>
								<td><h3>Email: </h3></td><td><input type="text" class="efect" value = "<?php echo $_SESSION['Email']; ?>" name="emailact"></td>
								</tr>
								<tr>
								<td><h3>Usuario: </h3></td><td><input type="text" class="efect" value = "<?php echo $_SESSION['Usuario']; ?>" name="usuarioact" ></td>
								</tr>
								<tr>
								<td><h3>Edad: </h3></td><td><input type="text" class="efect" value = "<?php echo $_SESSION['Edad']; ?>" name="edadact" ></td>
								</tr>
								<tr>
								<td><h3>Barrio: </h3></td><td><input type="text" class="efect" value = "<?php echo $_SESSION['Barrio']; ?>" name="barrioact" ></td>
								</tr>
															
								</table>
								<input type="submit" name="btn1" value="Actualizar">
								</form>
								</center>


		



							</main>
						</center>


						
				<br/><br/>
			
			
				<script type="text/javascript" src="jsB/jquery.min.js"></script>
<script type="text/javascript" src="jsB/main.js"></script>
			
</body>
</head>
</html>




<style>

.odd {
	background: #DDE0FC;	
}
.old{
   border-bottom: 1px solid #999;
   width: 100%;
}


.efect {
    
    max-width: 100%;
    border-radius: 5px;
    margin: 8px 0;
    outline: none;
    padding: 8px;
    box-sizing: border-box;
}
.efectos{
	color: #4CAF50;
  font: bold 200% monospace;

}
	@import url('https://fonts.googleapis.com/css?family=Cabin:500,700|Quicksand:400,500,700');
@import url('https://fonts.googleapis.com/css?family=Montserrat:500,900');

body{margin:0;padding:0;width:100%;}

.title-2{
	text-align:center;
	font-size: 25px;
	font-weight: 400;
	color: #333;
	font-family: 'Quicksand', sans-serif;
}

.bimenu{
	display: none;
}

.bimenu button{
	position:fixed;
	width:50px;
	height:50px;
	margin-right:15px;
	border-radius: 100%;
	padding:4px 15px 0px 15px;
	bottom: 15px;
	right: 5px;
	transition:0.2s;
	-webkit-box-shadow:0 0 2px rgba(0,0,0,.12),0 2px 2px rgba(0,0,0,.2);
	box-shadow:0 0 2px rgba(0,0,0,.12),0 2px 2px rgba(0,0,0,.2);
}

.bimenu i{
	color: #333;
	font-size:18px;
}

.header{
	position:relative;
	width:100%;
	height:200px;
	border-bottom: 3px solid #fff;
	background-color: #ffffff;
	background-position:center;
	background-color: #ffffff;
	background-image: url("https://i.ytimg.com/vi/TN2fJ24pKXs/maxresdefault.jpg");
	background-size:cover;
}

.header button{
	position:relative;
	float: right;
	width:50px;
	height:50px;
	margin-right:15px;
	border-radius: 100%;
	padding:0px 15px 0px 15px;
	top: 130px;
	right: 5px;
	transition:0.2s;
	-webkit-box-shadow:0 0 2px rgba(0,0,0,.12),0 2px 2px rgba(0,0,0,.2);
	box-shadow:0 0 2px rgba(0,0,0,.12),0 2px 2px rgba(0,0,0,.2);
}

.header button:hover{
	width:180px;
	height:50px;
	margin-right:15px;
	border-radius: 1000px;
	padding:0px 15px 0px 15px;
	bottom: 5px;
	right: 5px;
	transition:0.2s;
}

.header button i{
	float:right;
	color: #333;
	font-size:18px;
}

.header button:hover i{
	display:none;
	transition: 1s;
}

.header button .text{
	display:none;
	font-family: 'Quicksand', sans-serif;
	font-size:15px;
	font-weight: 600;
	transition: 1s;
}

.header button:hover .text{
	display:inline-block;
	transition: 1s;
}

.avatar{
	z-index:1;
	position: relative;
   margin: auto;
	margin-top: -80px;
	width: 150px;
	height: 150px;
	border-radius: 100%;
	border: 4px solid rgba(255, 255, 255, 1);
	/* background: url("http://meredithcnn.images.worldnow.com/images/10389401_G.jpg");*/  
	background-size: cover;
	background-position: center;
}

.content{
	position:relative;
}

.opperfil{
	position: absolute;
	width:100%;
	margin-top: -77px;
}

.opperfil button{
	z-index:0;
	position: relative;
   margin: auto;
	margin-left:0px;
	width:200px;
	height:40px;
	border-radius: 1000px;
	padding:0px 35px 0px 5px;
	-webkit-box-shadow:0 0 2px rgba(0,0,0,.12),0 2px 2px rgba(0,0,0,.2);
	box-shadow:0 0 2px rgba(0,0,0,.12),0 2px 2px rgba(0,0,0,.2);
}

.opperfil button:nth-child(2){
	margin-left: 70px;
	padding:0px 5px 0px 35px;
}

.opperfil button .text{
	font-family: 'Quicksand', sans-serif;
	font-size:13px;
	font-weight: 600;
}

.tituloperfil h1{
	font-family: 'Cabin', sans-serif;
	text-transform: uppercase;
	font-weight: 700;
	color:#444;
	font-size:35px;
	text-align:center;
	margin-top:20px;
}

.tituloperfil p{
	font-family: 'Quicksand', sans-serif;
	font-size: 13px;
	text-align: center;
	text-transform: uppercase;
	color: #777;
}

.smallbriefing{
	display:none;
}

.expsoftware{
	display: table-cell;
	margin: auto;
	width: 440px;
	height: auto;
}

.software{
	position: relative;
	display: inline-block;
	margin: auto;
	float: left;
	width:120px;
	height:120px;
	line-height:1.2;
	margin: 20px 0px 0px 0px;
	border-radius: 100%;
	background-color: dodgerblue;
}

.software:nth-child(2){
	margin: 20px 40px 0px 40px;
}

.software img{
	width:50px;
	margin-top: -20px ;
	margin-bottom: 7px;
}

.software span{
	font-size: 10px;
	font-weight: 500;
	color: #ccc;
	font-family: 'Montserrat', sans-serif;
}

.software span b{
	font-size: 17px;
	font-weight: 900;
	color: #fff;
	font-family: 'Montserrat', sans-serif;
}

.software i{
	margin-top: 8px;
	color: #fff;
}

.software .exp{
	width:60%;
	padding: 2px 5px 1px 5px;
	background-color: #fff;
	border: 2px solid dodgerblue;
	border-radius: 100px;
	font-family: 'Quicksand', sans-serif;
	font-size:10px;
	font-weight: 400;
}

.software .exp b{
	font-family: 'Quicksand', sans-serif;
	font-size:11px;
	font-weight: 700;
}

.infoAdministrador{
	width:500px;
	margin: auto;
}

.infoAdministrador textarea{
	font-family: 'Quicksand', sans-serif;
	font-size:16px;
	font-weight: 500;
	color: #444;
}

.infoAdministrador input{
	font-family: 'Quicksand', sans-serif;
	font-size:16px;
	font-weight: 500;
	color: #444;
}

.infoAdministrador select{
	font-family: 'Quicksand', sans-serif;
	font-size:16px;
	font-weight: 500;
	color: #444;
}

.infoAdministrador button{
	font-family: 'Cabin', sans-serif;
	font-size:15px;
	font-weight: 800;
}

.infoAdministrador label{
	font-family: 'Quicksand', sans-serif;
	font-size:12px;
	font-weight: 800;
}

/* Estilo para dispositivos móveis */
@media screen and (max-width: 1000px) {
	.bimenu{
		display: block;
	}
}

/* Estilo para dispositivos móveis */
@media screen and (max-width: 550px) {
	
   .header button:hover{
		position:relative;
		float: right;
		width:50px;
		height:50px;
		margin-right:15px;
		border-radius: 100%;
		padding:0px 15px 0px 15px;
		top: 130px;
		right: 5px;
		transition:0.2s;
		-webkit-box-shadow:0 0 2px rgba(0,0,0,.12),0 2px 2px rgba(0,0,0,.2);
		box-shadow:0 0 2px rgba(0,0,0,.12),0 2px 2px rgba(0,0,0,.2);
	}

	.header button:hover i{
		display: inline-block;
		float:right;
		color: #333;
		font-size:18px;
	}
	
	.header button:hover .text{
		display:none;
		font-family: 'Quicksand', sans-serif;
		font-size:15px;
		font-weight: 600;
		transition: 1s;
	}
	
	.opperfil button{
		z-index:0;
		position: relative;
		margin: auto;
		margin-left:0px;
		width:140px;
		height:40px;
		border-radius: 1000px;
		padding:0px 35px 0px 10px;
		-webkit-box-shadow:0 0 2px rgba(0,0,0,.12),0 2px 2px rgba(0,0,0,.2);
		box-shadow:0 0 2px rgba(0,0,0,.12),0 2px 2px rgba(0,0,0,.2);
	}

	.opperfil button:nth-child(2){
		margin-left: 100px;
		padding:0px 15px 0px 35px;
	}

	.opperfil button .text{
		font-family: 'Quicksand', sans-serif;
		font-size:12px;
		font-weight: 600;
	}
	
	.tituloperfil h1{
		font-family: 'Cabin', sans-serif;
		color:#444;
		font-size:30px;
		text-align:center;
		margin-top:20px;
	}

	.tituloperfil p{
		font-family: 'Quicksand', sans-serif;
		font-size: 12px;
		text-align: center;
		text-transform: uppercase;
		color: #777;
	}
}

/* Estilo para dispositivos móveis */
@media screen and (max-width: 450px) {
	
	.header{
		position:relative;
		width:100%;
		height:120px;
		border-bottom: 3px solid #fff;
		background-color: #ffffff;
		background-position:center;
		background-color: #ffffff;
		background-image: url("https://i.ytimg.com/vi/TN2fJ24pKXs/maxresdefault.jpg");
		background-size:cover;
	}
	
   .header button, button:hover{
		position:relative;
		float: right;
		width:50px;
		height:50px;
		margin-right:15px;
		border-radius: 100%;
		padding:0px 15px 0px 15px;
		top: 50px;
		right: 5px;
		transition:0.2s;
		-webkit-box-shadow:0 0 2px rgba(0,0,0,.12),0 2px 2px rgba(0,0,0,.2);
		box-shadow:0 0 2px rgba(0,0,0,.12),0 2px 2px rgba(0,0,0,.2);
	}

	.header button:hover i{
		display: inline-block;
		float:right;
		color: #333;
		font-size:18px;
	}
	
	.header button:hover .text{
		display:none;
		font-family: 'Quicksand', sans-serif;
		font-size:15px;
		font-weight: 600;
		transition: 1s;
	}
	
	.avatar{
		z-index:1;
		position: relative;
		margin: auto;
		margin-top: -50px;
		width: 120px;
		height: 120px;
		border-radius: 100%;
		border: 4px solid rgba(255, 255, 255, 1);
		background: url("http://meredithcnn.images.worldnow.com/images/10389401_G.jpg");
		background-size: cover;
		background-position: center;
	}
	
	.opperfil button{
		z-index:0;
		position: relative;
		margin: auto;
		margin-left:0px;
		width:140px;
		height:40px;
		border-radius: 1000px;
		padding:0px 35px 0px 10px;
		-webkit-box-shadow:0 0 2px rgba(0,0,0,.12),0 2px 2px rgba(0,0,0,.2);
		box-shadow:0 0 2px rgba(0,0,0,.12),0 2px 2px rgba(0,0,0,.2);
	}

	.opperfil button:nth-child(2){
		margin-left: 50px;
		padding:0px 15px 0px 35px;
	}

	.opperfil button .text{
		font-family: 'Quicksand', sans-serif;
		font-size:11px;
		font-weight: 600;
	}
	
	.tituloperfil h1{
		font-family: 'Cabin', sans-serif;
		color:#444;
		font-size:25px;
		text-align:center;
		margin-top:20px;
	}

	.tituloperfil p{
		font-family: 'Quicksand', sans-serif;
		font-size: 12px;
		text-align: center;
		text-transform: uppercase;
		color: #777;
	}
	
	.bigbriefing{
		display: none;
	}
	
	.smallbriefing{
		display: block;
	}
	
}

/* Estilo para dispositivos móveis */
@media screen and (max-width: 350px) {
	
	.avatar{
		z-index:1;
		position: relative;
		margin: auto;
		margin-top: -50px;
		width: 90px;
		height: 90px;
		border-radius: 100%;
		border: 4px solid rgba(255, 255, 255, 1);
		background: url("http://meredithcnn.images.worldnow.com/images/10389401_G.jpg");
		background-size: cover;
		background-position: center;
	}
	
}

.buttonconfig {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.buttonportada {
  cursor: pointer;
  background: #9152f8;
  background: -webkit-linear-gradient(bottom, #7579ff, #b224ef);
  background: -o-linear-gradient(bottom, #7579ff, #b224ef);
  background: -moz-linear-gradient(bottom, #7579ff, #b224ef);
  background: linear-gradient(bottom, #7579ff, #b224ef);
}




.contenedor {
	width: 90%;
	max-width: 1000px;
	margin: 20px auto;
}

.contenedor article {
	line-height: 28px;
}

.contenedor article h1 {
	font-size: 30px;
	text-align: left;
	padding: 50px 0;
}

.contenedor article p {
	margin-bottom: 20px;
}

.contenedor article .btn-abrir-popup {
	padding: 0 20px;
	margin-bottom: 20px;
	height: 40px;
	line-height: 40px;
	border: none;
	color: #fff;
	background: #5E7DE3;
	border-radius: 3px;
	font-family: 'Montserrat', sans-serif;
	font-size: 16px;
	cursor: pointer;
	transition: .3s ease all;
	cursor: pointer;
}

.contenedor article .btn-abrir-popup:hover {
	background: rgba(94,125,227, .9);
}



.overlay12 {
	background: rgba(0,0,0,.3);
	position: fixed;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	align-items: center;
	justify-content: center;
	display: flex;
	visibility: hidden;
}

.overlay12.active {
	visibility: visible;
}

.popup {
	background: #F8F8F8;
	box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.3);
	border-radius: 3px;
	font-family: 'Montserrat', sans-serif;
	padding: 20px;
	text-align: center;
	width: 600px;
	
	transition: .3s ease all;
	transform: scale(0.7);
	opacity: 0;
}

.popup .btn-cerrar-popup {
	font-size: 16px;
	line-height: 16px;
	display: block;
	text-align: right;
	transition: .3s ease all;
	color: rgb(173, 55, 55);
	cursor: pointer;
}

.popup .btn-cerrar-popup:hover {
	color: #000;
}

.popup h3 {
	font-size: 36px;
	font-weight: 100;
	margin-bottom: 10px;
	opacity: 0;
}


.popup h4 {
	font-size: 26px;
	font-weight: 300;
	margin-bottom: 40px;
	opacity: 0;
}

.popup form .contenedor-inputs {
	opacity: 0;
}

.popup form .contenedor-inputs input {
	width: 100%;
	margin-bottom: 20px;
	height: 52px;
	font-size: 18px;
	line-height: 52px;
	text-align: center;
	border: 1px solid #BBBBBB;
}

.popup form .btn-submit {
	padding: 0 20px;
	height: 40px;
	line-height: 40px;
	border: none;
	color: #fff;
	background: #5E7DE3;
	border-radius: 3px;
	font-family: 'Montserrat', sans-serif;
	font-size: 16px;
	cursor: pointer;
	transition: .3s ease all;
}

.popup form .btn-submit:hover {
	background: rgba(94,125,227, .9);
}

.popup.active {	transform: scale(1); opacity: 1; }
.popup.active h3 { animation: entradaTitulo .8s ease .5s forwards; }
.popup.active h4 { animation: entradaSubtitulo .8s ease .5s forwards; }
.popup.active .contenedor-inputs { animation: entradaInputs 1s linear 1s forwards; }

@keyframes entradaTitulo {
	from {
		opacity: 0;
		transform: translateY(-25px);
	}

	to {
		transform: translateY(0);
		opacity: 1;
	}
}

@keyframes entradaSubtitulo {
	from {
		opacity: 0;
		transform: translateY(25px);
	}
}
@keyframes entradaInputs {
	from { opacity: 0; }
	to { opacity: 1; }
}

.highlight {
  background: #4D98EF;
  border-radius: 50%;
  height: 12px;
  left: 14px;
  pointer-events: none;
  position: absolute;
  top: 14px;
  transition: transform 400ms cubic-bezier(0.175, 0.885, 0.32, 1.2);
  transform: translateY(-50px);
  width: 12px;
}




input[type="submit"],input[type="button"]{
    border-radius: 5px;
    margin: 10px 0;
    background: #0088B2;
    color: #fff;
    padding: 8px 14px;
    font-weight: bold;
    border: none;
    cursor: pointer;
}

input[type="submit"]:hover, input[type="button"]:hover, button:hover {
    background: rgb(107, 36, 165);
}

.button1, .button2 .btn-abrir-popup{
    
    font-weight: 600p;
    font-size: 15px;
    border-radius: 6px;
    
  }


</style>
