<?php
header('content-type: application/json');
require_once("../config/conec.php");
require_once("../models/constructora.php");


    $constructora = new constructora();

    $body = json_decode(file_get_contents("php://input"),true);

    switch($_GET["opConstructoras"]){

        case "GetAllConstructora":
            $datos = $constructora-> get_constructora();
            echo  json_encode($datos);
        break;

        case 'GetIdConstructora':
            $datos = $constructora -> get_constructora_id($body["id"]);
            echo json_encode($datos);
            break;

            case "insert":
                $datos= $constructora->insert_constructora($body["id"],$body["nombre"],$body["direccion"]);
    
                echo json_encode("insertado correctamente");
            break;
        
        
        }



        $empleados = new empleados();

        $body = json_decode(file_get_contents("php://input"),true);
    
        switch($_GET["opEmpleados"]){
    
            case "GetAllEmpleados":
                $datos = $empleados-> get_empleados();
                echo  json_encode($datos);
            break;
    
            case 'GetIdEmpleados':
                $datos = $empleados -> get_emplados_id($body["id"]);
                echo json_encode($datos);
                break;
    
                case "insertEmpleados":
                    $datos= $empleados->insert_empleados($body["id"],$body["usuario"],$body["password"]);
        
                    echo json_encode("insertado correctamente");
                break;
            
            
            }



            $cotizaciones = new cotizaciones();

        $body = json_decode(file_get_contents("php://input"),true);
    
        switch($_GET["opCotizaciones"]){
    
            case "GetAllCotizaciones":
                $datos = $cotizaciones-> get_cotizaciones();
                echo  json_encode($datos);
            break;
    
            case 'GetIdCotizaciones':
                $datos = $cotizaciones -> get_cotizaciones_id($body["id"]);
                echo json_encode($datos);
                break;
    
                case "insertCotizaciones":
                    $datos= $cotizaciones->insert_cotizaciones($body["id"],$body["id_constructora"],$body["id_empleado"], $body["fecha"]);
        
                    echo json_encode("insertado correctamente");
                break;
            
            
            }



            $productos = new productos();

            $body = json_decode(file_get_contents("php://input"),true);
        
            switch($_GET["opProductos"]){
        
                case "GetAllProductos":
                    $datos = $productos-> get_productos();
                    echo  json_encode($datos);
                break;
        
                case 'GetIdProductos':
                    $datos = $productos -> get_productos_id($body["id"]);
                    echo json_encode($datos);
                    break;
        
                    case "insertProductos":
                        $datos= $productos->insert_productos($body["id"],$body["nombre"],$body["descripcion"], $body["precio"]);
            
                        echo json_encode("insertado correctamente");
                    break;
                
                
                }


?>