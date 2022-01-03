<?php
    require_once("../config/conexion.php");
    require_once("../models/producto.php");
    $producto = new Producto();

    switch($_GET["op"]){

        case "listar":
            $datos=$producto->get_producto();
            $data= Array();
            foreach($datos as $row){
                $sub_array = array();
                $sub_array[] = $row["Nombre_Producto"];
                $sub_array[] = $row["Descripcion_Producto"];
                $sub_array[]='<button type="button" onClick="editar('.$row["Id_Producto"].');"  id="'.$row["Id_Producto"].'" class="btn btn-outline-primary btn-icon"><div><i class="fa fa-edit"></i></div></button>';
                $sub_array[]='<button type="button" onClick="eliminar('.$row["Id_Producto"].');"  id="'.$row["Id_Producto"].'" class="btn btn-outline-danger btn-icon"><div><i class="fa fa-trash"></i></div></button>';
                $data[]=$sub_array;
            }

            $results = array(
                "sEcho"=>1,
                "iTotalRecords"=>count($data),
                "iTotalDisplayRecords"=>count($data),
                "aaData"=>$data);
            echo json_encode($results);

            break;

        case "guardaryeditar":
            $datos=$producto->get_producto_x_id($_POST["Id_Producto"]);
            if(empty($_POST["Id_Producto"])) {
                if(is_array($datos)==true and count($datos)==0) {
                    $producto->insert_producto($_POST["Nombre_Producto"], $_POST["Descripcion_Producto"]);
                }
            } else {
                $producto->update_producto($_POST["Id_Producto"],$_POST["Nombre_Producto"], $_POST["Descripcion_Producto"]);
            }
        break;

        case "mostrar":
            $datos=$producto->get_producto_x_id($_POST["Id_Producto"]);
            if(is_array($datos)==true and count($datos)>0) {
                foreach($datos as $row) {
                    $output["Id_Producto"] = $row["Id_Producto"];
                    $output["Nombre_Producto"] = $row["Nombre_Producto"];
                    $output["Descripcion_Producto"] = $row["Descripcion_Producto"];
                }
                echo json_encode($output);
            }
        break;

        case "eliminar":
            $producto->delete_producto($_POST["Id_Producto"]);
        break;

    }
?>