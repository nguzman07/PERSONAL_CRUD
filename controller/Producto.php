<?php
	require_once("../config/conexion.php");
	requiere_once("../models/Producto.php");
	$producto = new Producto();

	switch($_GETp["opc"]) {
		case "listar":
	    $datos=$area->get_producto();
		$data= Array();
		foreach($datos as $row) {
			$sub_array = array();
                $sub_array[] = $row["Nombre_Producto"];
                $sub_array[] = '<button type="button" onClick="editar('.$row["Id_Producto"].');"  id="'.$row["Id_Producto"].'" class="btn btn-outline-primary btn-icon"><div><i class="fa fa-edit"></i></div></button>';
                $sub_array[] = '<button type="button" onClick="eliminar('.$row["Id_Producto"].');"  id="'.$row["Id_Producto"].'" class="btn btn-outline-danger btn-icon"><div><i class="fa fa-trash"></i></div></button>';
                $data[]=$sub_array;
		}
		$results = array(
			"sEcho"=>1,
			"iTotalRecords"=>count($data),
			"iTotalDisplayRecords"=>count($data),
			"aaData"=>$data);
			echo json_encode($results);
		break;
	}
?>