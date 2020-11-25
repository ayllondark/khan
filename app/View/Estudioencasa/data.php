<?php
	//session_start();
	//error_reporting(0);
	$carpeta="data";
	$acc= $_POST['acc'];
	

	if ($acc=="cargar_archivo"){
		$archivo= $_POST['archivo'];
		$_SESSION['archivo']=$archivo;
		echo $archivo;
	}

	if ($acc=="cargar_nota_final"){
		$total= $_POST['total'];
		$_SESSION['nota_final']=$total;
		echo $total;
	}
	
	if ($acc=="obtener_nota_final"){
		$total= $_SESSION['nota_final'];
		unset($_SESSION["nota_final"]); 
		unset($_SESSION["archivo"]); 
		echo $total;
	}

	if ($acc=="cargar_cursos"){
		$dir=opendir($carpeta);
		$datos=array();
		 while (($archivo = readdir($dir)) !== false){ 
		  if(($archivo != '.')&&($archivo != '..')){
		  	$datos[]= cargar_temas($carpeta, $archivo);
		  } 
		}
		closedir($dir);
		sort($datos);
		$arr= covertjson($datos);
		echo $arr;
	}

	if ($acc=="cargar_inf_tema"){
		$arcSS= $carpeta .'/'. $_SESSION['archivo'];
		require_once 'PHPExcel/Classes/PHPExcel.php';
		$inputFileType = PHPExcel_IOFactory::identify($arcSS);
		$objReader = PHPExcel_IOFactory::createReader($inputFileType);
		$objPHPExcel = $objReader->load($arcSS);
		$sheet = $objPHPExcel->getSheet(0); 
		$highestRow = $sheet->getHighestRow(); 
		$highestColumn = $sheet->getHighestColumn();
		$filas= 0;	
		$cantFinal= 7;

		for ($row = 2; $row <= 2; $row++){
			$cell1= $sheet->getCell("A".$row)->getValue();
			$cell2= $sheet->getCell("B".$row)->getValue();
			$cell3= $sheet->getCell("C".$row)->getValue();
			$cell4= $sheet->getCell("D".$row)->getValue();
			$datos[]= array('area' => $cell1, 'curso'=>$cell2, 'unidad'=>$cell3, 'practica'=>$cell4);
		}
		$arr= covertjson($datos);
		echo $arr;
	}
	if ($acc=="cargar_datos"){
		$arcSS= $carpeta .'/'. $_SESSION['archivo'];
		require_once 'PHPExcel/Classes/PHPExcel.php';
		$inputFileType = PHPExcel_IOFactory::identify($arcSS);
		$objReader = PHPExcel_IOFactory::createReader($inputFileType);
		$objPHPExcel = $objReader->load($arcSS);
		$sheet = $objPHPExcel->getSheet(0); 
		$highestRow = $sheet->getHighestRow(); 
		$highestColumn = $sheet->getHighestColumn();
		$filas= 0;	
		$cantFinal= 7;
		$arrfinal[]=array();

		for ($row = 2; $row <= $highestRow; $row++){
			$cell1= $sheet->getCell("A".$row)->getValue();
			$cell2= $sheet->getCell("B".$row)->getValue();
			$cell3= $sheet->getCell("C".$row)->getValue();
			$cell4= $sheet->getCell("D".$row)->getValue();
			$cell5= $sheet->getCell("E".$row)->getValue();
			$cell6= $sheet->getCell("F".$row)->getValue();
			$cell7= $sheet->getCell("G".$row)->getValue();
			$cell8= $sheet->getCell("H".$row)->getValue();
			$cell9= $sheet->getCell("I".$row)->getValue();
			$cell10= $sheet->getCell("J".$row)->getValue();
			$cell11= $sheet->getCell("K".$row)->getValue();
			$cell12= $sheet->getCell("L".$row)->getValue();
			$cell13= $sheet->getCell("M".$row)->getValue();
			$cell14= $sheet->getCell("N".$row)->getValue();
			$cell15= $sheet->getCell("O".$row)->getValue();
			$cell16= $sheet->getCell("P".$row)->getValue();
			$cell17= $sheet->getCell("Q".$row)->getValue();
			$cell18= $sheet->getCell("R".$row)->getValue();
			$cell19= $sheet->getCell("S".$row)->getValue();
			$cell20= $sheet->getCell("T".$row)->getValue();
			$cell21= $sheet->getCell("U".$row)->getValue();

			if ($cell5<>""){
				$datos[]= array('area' => $cell1, 'curso'=>$cell2, 'unidad'=>$cell3, 'practica'=>$cell4, 'pregunta'=>$cell5, 'carpeta'=>$cell6, 'subcarpeta'=>$cell7, 'P'=>$cell8, 'A1'=>$cell9, 'A2'=>$cell10, 'A3'=>$cell11, 'A4'=>$cell12, 'A5'=>$cell13, 'A6'=>$cell14, 'S1'=>$cell15, 'S2'=>$cell16, 'S3'=>$cell17, 'S4'=>$cell18, 'S5'=>$cell19, 'S6'=>$cell20, 'RPTA'=>$cell21);
			}
		}
		sort($datos);
		for ($i=0; $i <$cantFinal ; $i++) { 
			$filas++;
			$arrfinal[$i]= $datos[$i];
		}
		$dataFinal[]= array('cols'=>$highestColumn, 'rows'=>$filas, 'datos'=>$arrfinal);
		$arr= covertjson($dataFinal);
		echo $arr;
	}

	function cargar_temas($carpeta, $archivo){
		require_once 'PHPExcel/Classes/PHPExcel.php';
		$inputFileType = PHPExcel_IOFactory::identify($carpeta .'/'. $archivo);
		$objReader = PHPExcel_IOFactory::createReader($inputFileType);
		$objPHPExcel = $objReader->load($carpeta .'/'. $archivo);
		$sheet = $objPHPExcel->getSheet(0); 
		$highestRow = $sheet->getHighestRow(); 
		$highestColumn = $sheet->getHighestColumn();
		$filas= 0;	
		$cantFinal= 7;

		for ($row = 2; $row <= 2; $row++){
			$cell1= $sheet->getCell("A".$row)->getValue();
			$cell2= $sheet->getCell("B".$row)->getValue();
			$cell3= $sheet->getCell("C".$row)->getValue();
			$cell4= $sheet->getCell("D".$row)->getValue();
			$datos= array('curso'=>$cell2, 'archivo'=>$archivo, 'area' => $cell1,  'unidad'=>$cell3, 'practica'=>$cell4);
		}
		return $datos;
	}

	function covertjson($arr) {
	    if(function_exists('json_encode')) return json_encode($arr, JSON_UNESCAPED_UNICODE);
	    $parts = array();
	    $is_list = false;

	    $keys = array_keys($arr);
	    $max_length = count($arr)-1;
	    if(($keys[0] == 0) and ($keys[$max_length] == $max_length)) {
	        $is_list = true;
	        for($i=0; $i<count($keys); $i++) {
	            if($i != $keys[$i]) {
	                $is_list = false;
	                break;
	            }
	        }
	    }

	    foreach($arr as $key=>$value) {
	        if(is_array($value)) {
	            if($is_list) $parts[] = array2json($value);
	            else $parts[] = '"' . $key . '":' . array2json($value);
	        } else {
	            $str = '';
	            if(!$is_list) $str = '"' . $key . '":';
	            if(is_numeric($value)) $str .= $value;
	            elseif($value === false) $str .= 'false';
	            elseif($value === true) $str .= 'true';
	            else $str .= '"' . addslashes(stripslashes($value)) . '"';
	            $parts[] = $str;
	        }
	    }
	    $json = implode(',',$parts);

	    if($is_list) return '[' . $json . ']';//Return numerical JSON
	    return '{' . $json . '}';//Return associative JSON
	}
?>