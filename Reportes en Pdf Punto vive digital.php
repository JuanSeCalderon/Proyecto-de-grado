<?php

require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
	$this->Ln(20);
    // Logo
    $this->Image('Imagines\logo.png',20,15,50);
    // Arial bold 15
    $this->SetFont('Arial','B',18);
    // Movernos a la derecha
    $this->Cell(100);
    // Título
    $this->Cell(70,10,'Punto vive digital',0,0,'C');
    // Salto de línea
    $this->Ln(35);

    $this->Cell(55,10, 'Fecha' ,1,0,'C',0);
	$this->Cell(40,10, 'Barrio',1,0,'C',0);
	$this->Cell(60,10, 'Nombre',1,0,'C',0);
    $this->Cell(60,10, 'Apellido',1,0,'C',0);
    $this->Cell(60,10, 'Servicio solicitado',1,1,'C',0);
}


function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(30,20,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'R',0);
    $this->Cell(0,5,utf8_decode('Calle 40 No. 33-64 Centro edificio Alcaldía Piso 8 NIT. 892.009.324-3 Teléfono: 6702060 Código Postal: 500001 www.villavicencio.gov.co Twitter: @villavoalcaldia. Villavicencio, Meta'));
    
}
}
$Enero="";
$Febrero="";
$Marzo="";
$Abril="";
$Mayo="";
$Junio="";
$Julio="";
$Agosto="";
$Septiembre="";
$Octubre="";
$Noviembre="";
$Diciembre="";

if(isset($_POST['Enero']))$Enero=$_POST['Enero'];
if(isset($_POST['Febrero']))$Febrero=$_POST['Febrero'];
if(isset($_POST['Marzo']))$Marzo=$_POST['Marzo'];
if(isset($_POST['Abril']))$Abril=$_POST['Abril'];
if(isset($_POST['Mayo']))$Mayo=$_POST['Mayo'];
if(isset($_POST['Junio']))$Junio=$_POST['Junio'];
if(isset($_POST['Julio']))$Julio=$_POST['Julio'];
if(isset($_POST['Agosto']))$Agosto=$_POST['Agosto'];
if(isset($_POST['Septiembre']))$Septiembre=$_POST['Septiembre'];
if(isset($_POST['Octubre']))$Octubre=$_POST['Octubre'];
if(isset($_POST['Noviembre']))$Noviembre=$_POST['Noviembre'];
if(isset($_POST['Diciembre']))$Diciembre=$_POST['Diciembre'];

if($Enero){
    require 'conexion.php';
    $consulta = "SELECT Fecha,Barrio,Nombre,Apellido,Servicio_solicitar FROM registros where Fecha LIKE '%-01-%'";
    $resultado = $mysqli->query($consulta);
    
    $pdf = new PDF('L','mm','A4');
    $pdf ->AliasNbPages();
    $pdf ->AddPage();
    $pdf ->SetFont('Arial','',16);
    
    while($row = $resultado->fetch_assoc()){
        $pdf->Cell(55,10, $row['Fecha'],1,0,'C',0);
        $pdf->Cell(40,10, $row['Barrio'],1,0,'C',0);
        $pdf->Cell(60,10, $row['Nombre'],1,0,'C',0);
        $pdf->Cell(60,10, $row['Apellido'],1,0,'C',0);
        $pdf->Cell(60,10, $row['Servicio_solicitar'],1,1,'C',0);
    }
    
    $pdf ->output();
    }
if($Febrero){
require 'conexion.php';
$consulta = "SELECT Fecha,Barrio,Nombre,Apellido,Servicio_solicitar FROM registros where Fecha LIKE '%-02-%'";
$resultado = $mysqli->query($consulta);

$pdf = new PDF('L','mm','A4');
$pdf ->AliasNbPages();
$pdf ->AddPage();
$pdf ->SetFont('Arial','',16);

while($row = $resultado->fetch_assoc()){
	$pdf->Cell(55,10, $row['Fecha'],1,0,'C',0);
	$pdf->Cell(40,10, $row['Barrio'],1,0,'C',0);
	$pdf->Cell(60,10, $row['Nombre'],1,0,'C',0);
    $pdf->Cell(60,10, $row['Apellido'],1,0,'C',0);
    $pdf->Cell(60,10, $row['Servicio_solicitar'],1,1,'C',0);
}

$pdf ->output();
}

if($Marzo){
    require 'conexion.php';
    $consulta = "SELECT Fecha,Barrio,Nombre,Apellido,Servicio_solicitar FROM registros where Fecha LIKE '%-03-%'";
    $resultado = $mysqli->query($consulta);
    
    $pdf = new PDF('L','mm','A4');
    $pdf ->AliasNbPages();
    $pdf ->AddPage();
    $pdf ->SetFont('Arial','',16);
    
    while($row = $resultado->fetch_assoc()){
        $pdf->Cell(55,10, $row['Fecha'],1,0,'C',0);
        $pdf->Cell(40,10, $row['Barrio'],1,0,'C',0);
        $pdf->Cell(60,10, $row['Nombre'],1,0,'C',0);
        $pdf->Cell(60,10, $row['Apellido'],1,0,'C',0);
        $pdf->Cell(60,10, $row['Servicio_solicitar'],1,1,'C',0);
    }
    
    $pdf ->output();
    }

if($Abril){
        require 'conexion.php';
        $consulta = "SELECT Fecha,Barrio,Nombre,Apellido,Servicio_solicitar FROM registros where Fecha LIKE '%-04-%'";
        $resultado = $mysqli->query($consulta);
        
        $pdf = new PDF('L','mm','A4');
        $pdf ->AliasNbPages();
        $pdf ->AddPage();
        $pdf ->SetFont('Arial','',16);
        
        while($row = $resultado->fetch_assoc()){
            $pdf->Cell(55,10, $row['Fecha'],1,0,'C',0);
            $pdf->Cell(40,10, $row['Barrio'],1,0,'C',0);
            $pdf->Cell(60,10, $row['Nombre'],1,0,'C',0);
            $pdf->Cell(60,10, $row['Apellido'],1,0,'C',0);
            $pdf->Cell(60,10, $row['Servicio_solicitar'],1,1,'C',0);
        }
        
        $pdf ->output();
        }

        if($Mayo){
            require 'conexion.php';
            $consulta = "SELECT Fecha,Barrio,Nombre,Apellido,Servicio_solicitar FROM registros where Fecha LIKE '%-05-%'";
            $resultado = $mysqli->query($consulta);
            
            $pdf = new PDF('L','mm','A4');
            $pdf ->AliasNbPages();
            $pdf ->AddPage();
            $pdf ->SetFont('Arial','',16);
            
            while($row = $resultado->fetch_assoc()){
                $pdf->Cell(55,10, $row['Fecha'],1,0,'C',0);
                $pdf->Cell(40,10, $row['Barrio'],1,0,'C',0);
                $pdf->Cell(60,10, $row['Nombre'],1,0,'C',0);
                $pdf->Cell(60,10, $row['Apellido'],1,0,'C',0);
                $pdf->Cell(60,10, $row['Servicio_solicitar'],1,1,'C',0);
            }
            
            $pdf ->output();
            }
        if($Junio){
        require 'conexion.php';
        $consulta = "SELECT Fecha,Barrio,Nombre,Apellido,Servicio_solicitar FROM registros where Fecha LIKE '%-06-%'";
        $resultado = $mysqli->query($consulta);
        
        $pdf = new PDF('L','mm','A4');
        $pdf ->AliasNbPages();
        $pdf ->AddPage();
        $pdf ->SetFont('Arial','',16);
        
        while($row = $resultado->fetch_assoc()){
            $pdf->Cell(55,10, $row['Fecha'],1,0,'C',0);
            $pdf->Cell(40,10, $row['Barrio'],1,0,'C',0);
            $pdf->Cell(60,10, $row['Nombre'],1,0,'C',0);
            $pdf->Cell(60,10, $row['Apellido'],1,0,'C',0);
            $pdf->Cell(60,10, $row['Servicio_solicitar'],1,1,'C',0);
        }
        
        $pdf ->output();
        }
        
        if($Julio){
            require 'conexion.php';
            $consulta = "SELECT Fecha,Barrio,Nombre,Apellido,Servicio_solicitar FROM registros where Fecha LIKE '%-07-%'";
            $resultado = $mysqli->query($consulta);
            
            $pdf = new PDF('L','mm','A4');
            $pdf ->AliasNbPages();
            $pdf ->AddPage();
            $pdf ->SetFont('Arial','',16);
            
            while($row = $resultado->fetch_assoc()){
                $pdf->Cell(55,10, $row['Fecha'],1,0,'C',0);
                $pdf->Cell(40,10, $row['Barrio'],1,0,'C',0);
                $pdf->Cell(60,10, $row['Nombre'],1,0,'C',0);
                $pdf->Cell(60,10, $row['Apellido'],1,0,'C',0);
                $pdf->Cell(60,10, $row['Servicio_solicitar'],1,1,'C',0);
            }
            
            $pdf ->output();
            }
        
        if($Agosto){
                require 'conexion.php';
                $consulta = "SELECT Fecha,Barrio,Nombre,Apellido,Servicio_solicitar FROM registros where Fecha LIKE '%-08-%'";
                $resultado = $mysqli->query($consulta);
                
                $pdf = new PDF('L','mm','A4');
                $pdf ->AliasNbPages();
                $pdf ->AddPage();
                $pdf ->SetFont('Arial','',16);
                
                while($row = $resultado->fetch_assoc()){
                    $pdf->Cell(55,10, $row['Fecha'],1,0,'C',0);
                    $pdf->Cell(40,10, $row['Barrio'],1,0,'C',0);
                    $pdf->Cell(60,10, $row['Nombre'],1,0,'C',0);
                    $pdf->Cell(60,10, $row['Apellido'],1,0,'C',0);
                    $pdf->Cell(60,10, $row['Servicio_solicitar'],1,1,'C',0);
                }
                
                $pdf ->output();
                }

                if($Septiembre){
                    require 'conexion.php';
                    $consulta = "SELECT Fecha,Barrio,Nombre,Apellido,Servicio_solicitar FROM registros where Fecha LIKE '%-09%-'";
                    $resultado = $mysqli->query($consulta);
                    
                    $pdf = new PDF('L','mm','A4');
                    $pdf ->AliasNbPages();
                    $pdf ->AddPage();
                    $pdf ->SetFont('Arial','',16);
                    
                    while($row = $resultado->fetch_assoc()){
                        $pdf->Cell(55,10, $row['Fecha'],1,0,'C',0);
                        $pdf->Cell(40,10, $row['Barrio'],1,0,'C',0);
                        $pdf->Cell(60,10, $row['Nombre'],1,0,'C',0);
                        $pdf->Cell(60,10, $row['Apellido'],1,0,'C',0);
                        $pdf->Cell(60,10, $row['Servicio_solicitar'],1,1,'C',0);
                    }
                    
                    $pdf ->output();
                    }
                if($Octubre){
                require 'conexion.php';
                $consulta = "SELECT Fecha,Barrio,Nombre,Apellido,Servicio_solicitar FROM registros where Fecha LIKE '%-10-%'";
                $resultado = $mysqli->query($consulta);
                
                $pdf = new PDF('L','mm','A4');
                $pdf ->AliasNbPages();
                $pdf ->AddPage();
                $pdf ->SetFont('Arial','',16);
                
                while($row = $resultado->fetch_assoc()){
                    $pdf->Cell(55,10, $row['Fecha'],1,0,'C',0);
                    $pdf->Cell(40,10, $row['Barrio'],1,0,'C',0);
                    $pdf->Cell(60,10, $row['Nombre'],1,0,'C',0);
                    $pdf->Cell(60,10, $row['Apellido'],1,0,'C',0);
                    $pdf->Cell(60,10, $row['Servicio_solicitar'],1,1,'C',0);
                }
                
                $pdf ->output();
                }
                
                if($Noviembre){
                    require 'conexion.php';
                    $consulta = "SELECT Fecha,Barrio,Nombre,Apellido,Servicio_solicitar FROM registros where Fecha LIKE '%-11-%'";
                    $resultado = $mysqli->query($consulta);
                    
                    $pdf = new PDF('L','mm','A4');
                    $pdf ->AliasNbPages();
                    $pdf ->AddPage();
                    $pdf ->SetFont('Arial','',16);
                    
                    while($row = $resultado->fetch_assoc()){
                        $pdf->Cell(55,10, $row['Fecha'],1,0,'C',0);
                        $pdf->Cell(40,10, $row['Barrio'],1,0,'C',0);
                        $pdf->Cell(60,10, $row['Nombre'],1,0,'C',0);
                        $pdf->Cell(60,10, $row['Apellido'],1,0,'C',0);
                        $pdf->Cell(60,10, $row['Servicio_solicitar'],1,1,'C',0);
                    }
                    
                    $pdf ->output();
                    }
                
                if($Diciembre){
                        require 'conexion.php';
                        $consulta = "SELECT Fecha,Barrio,Nombre,Apellido,Servicio_solicitar FROM registros where Fecha LIKE '%-12-%'";
                        $resultado = $mysqli->query($consulta);
                        
                        $pdf = new PDF('L','mm','A4');
                        $pdf ->AliasNbPages();
                        $pdf ->AddPage();
                        $pdf ->SetFont('Arial','',16);
                        
                        while($row = $resultado->fetch_assoc()){
                            $pdf->Cell(55,10, $row['Fecha'],1,0,'C',0);
                            $pdf->Cell(40,10, $row['Barrio'],1,0,'C',0);
                            $pdf->Cell(60,10, $row['Nombre'],1,0,'C',0);
                            $pdf->Cell(60,10, $row['Apellido'],1,0,'C',0);
                            $pdf->Cell(60,10, $row['Servicio_solicitar'],1,1,'C',0);
                        }
                        
                        $pdf ->output();
                        }
                ?>
