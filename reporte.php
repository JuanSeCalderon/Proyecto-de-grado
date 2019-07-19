<?php

	require 'Classes/PHPExcel.php';
	require 'conexion.php';
	


	
	$sql = "SELECT Fecha,Barrio,Nombre,Apellido,Tipo_identificacion,Numero_identificacion,Genero,Orientacion_sexual,Situacion_problacion,Grupo_etnico,Victima_conflicto,Fecha_nacimiento,Rango_edad,Telefono,Servicio_solicitar,CapacitacionRealizada FROM registros";
	$resultado = $mysqli->query($sql);
	$fila = 7;
	


	$gdImage = imagecreatefrompng('Imagines\logoExcel.png');
	

	$objPHPExcel  = new PHPExcel();
	

	$objPHPExcel->getProperties()->setCreator("Alcaldía de Villavicencio")->setDescription("Registros de punto vive digital");
	
	
	$objPHPExcel->setActiveSheetIndex(0);
	$objPHPExcel->getActiveSheet()->setTitle("Registros");
	
	$objDrawing = new PHPExcel_Worksheet_MemoryDrawing();
	$objDrawing->setName('Logotipo');
	$objDrawing->setDescription('Logotipo');
	$objDrawing->setImageResource($gdImage);
	$objDrawing->setRenderingFunction(PHPExcel_Worksheet_MemoryDrawing::RENDERING_PNG);
	$objDrawing->setMimeType(PHPExcel_Worksheet_MemoryDrawing::MIMETYPE_DEFAULT);
	$objDrawing->setHeight(1022);
	$objDrawing->setWidth(325);
	$objDrawing->setCoordinates('A1');
	$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());
	
	$estiloTituloReporte = array(
    'font' => array(
	'name'      => 'Arial',
	'bold'      => true,
	'italic'    => false,
	'strike'    => false,
	'size' =>18,

    ),
    'fill' => array(
	'type'  => PHPExcel_Style_Fill::FILL_SOLID
	),
    'borders' => array(
	'allborders' => array(
	'style' => PHPExcel_Style_Border::BORDER_NONE
	)
    ),
    'alignment' => array(
	'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
	'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER
    )
	);
	
	$estiloTituloColumnas = array(
    'font' => array(
	'name'  => 'Arial',
	'bold'  => true,
	'size' =>10,
	'color' => array(
	'rgb' => 'FFFFFF'
	)
    ),
    'fill' => array(
	'type' => PHPExcel_Style_Fill::FILL_SOLID,
	'color' => array('rgb' => '538DD5')
    ),
    'borders' => array(
	'allborders' => array(
	'style' => PHPExcel_Style_Border::BORDER_THIN
	)
    ),
    'alignment' =>  array(
	'horizontal'=> PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
	'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER
    )
	);
	
	$estiloInformacion = new PHPExcel_Style();
	$estiloInformacion->applyFromArray( array(
    'font' => array(
	'name'  => 'Arial',
	'color' => array(
	'rgb' => '000000'
	)
    ),
    'fill' => array(
	'type'  => PHPExcel_Style_Fill::FILL_SOLID
	),
    'borders' => array(
	'allborders' => array(
	'style' => PHPExcel_Style_Border::BORDER_THIN
	)
    ),
	'alignment' =>  array(
	'horizontal'=> PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
	'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER
    )
	));
	
	$objPHPExcel->getActiveSheet()->getStyle('A1:P5')->applyFromArray($estiloTituloReporte);
	$objPHPExcel->getActiveSheet()->getStyle('A6:P6')->applyFromArray($estiloTituloColumnas);
	
	$objPHPExcel->getActiveSheet()->setCellValue('C3', 'REGISTROS DEL PUNTO VIVE DIGITAL');
	$objPHPExcel->getActiveSheet()->mergeCells('C3:O3');
	
	$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('A6', 'FECHA');
	$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('B6', 'BARRIO');
	$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(50);
	$objPHPExcel->getActiveSheet()->setCellValue('C6', 'NOMBRE');
	$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(50);
	$objPHPExcel->getActiveSheet()->setCellValue('D6', 'APELLIDO');
	$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(50);
	$objPHPExcel->getActiveSheet()->setCellValue('E6', 'TIPO DE IDENTIFICACIÓN');

	$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(50);
	$objPHPExcel->getActiveSheet()->setCellValue('F6', 'NUMERO IDENTIFICACIÓN');
	$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('G6', 'GENERO');
	$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(50);
	$objPHPExcel->getActiveSheet()->setCellValue('H6', 'ORIENTACIÓN SEXUAL');
	$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(50);
	$objPHPExcel->getActiveSheet()->setCellValue('I6', 'SITUACIÓN POBLACIÓN');
	$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(50);
	$objPHPExcel->getActiveSheet()->setCellValue('J6', 'GRUPO ÉTNICO');

	$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(50);
	$objPHPExcel->getActiveSheet()->setCellValue('K6', 'VICTIMA DE CONFLICTO');
	$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(50);
	$objPHPExcel->getActiveSheet()->setCellValue('L6', 'FECHA DE NACIMIENTO');
	$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(50);
	$objPHPExcel->getActiveSheet()->setCellValue('M6', 'RANGO DE EDAD');
	$objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(50);
	$objPHPExcel->getActiveSheet()->setCellValue('N6', 'TELEFONO');
	$objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(50);
	$objPHPExcel->getActiveSheet()->setCellValue('O6', 'SERVICIO SOLICITADO');
	$objPHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth(50);
	$objPHPExcel->getActiveSheet()->setCellValue('P6', 'CAPACITACIÓN REALIZADA');


	while($rows = $resultado->fetch_assoc()){
		
		$objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, utf8_encode($rows['Fecha']));
		$objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, utf8_encode($rows['Barrio']));
		$objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, utf8_encode($rows['Nombre']));
		$objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, utf8_encode($rows['Apellido']));
		$objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, utf8_encode($rows['Tipo_identificacion']));

		$objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, utf8_encode($rows['Numero_identificacion']));
		$objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, utf8_encode($rows['Genero']));
		$objPHPExcel->getActiveSheet()->setCellValue('H'.$fila, utf8_encode($rows['Orientacion_sexual']));
		$objPHPExcel->getActiveSheet()->setCellValue('I'.$fila, utf8_encode($rows['Situacion_problacion']));
		$objPHPExcel->getActiveSheet()->setCellValue('J'.$fila, utf8_encode($rows['Grupo_etnico']));

		$objPHPExcel->getActiveSheet()->setCellValue('K'.$fila, utf8_encode($rows['Victima_conflicto']));
		$objPHPExcel->getActiveSheet()->setCellValue('L'.$fila, utf8_encode($rows['Fecha_nacimiento']));
		$objPHPExcel->getActiveSheet()->setCellValue('M'.$fila, utf8_encode($rows['Rango_edad']));
		$objPHPExcel->getActiveSheet()->setCellValue('N'.$fila, utf8_encode($rows['Telefono']));
		$objPHPExcel->getActiveSheet()->setCellValue('O'.$fila, utf8_encode($rows['Servicio_solicitar']));
		$objPHPExcel->getActiveSheet()->setCellValue('P'.$fila, utf8_encode($rows['CapacitacionRealizada']));

		$fila++;
	}
	
	$fila = $fila-1; 
	
	$objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion, "A7:P".$fila);
	
	$filaGrafica = $fila+2;

	$values = new PHPExcel_Chart_DataSeriesValues('String', 'Registros!$B$7:$B$'.$fila);
	

	$categories = new PHPExcel_Chart_DataSeriesValues('String', 'Registros!$C$7:$C$'.$fila);
	

	
	
	$writer = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');

	
	header('Content-Type: application/vnd.ms-excel');
	header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
	header('Content-Disposition: attachment;filename="Registros.xlsx"');
	header('Cache-Control: max-age=0');
	
	$writer->save('php://output');
?>