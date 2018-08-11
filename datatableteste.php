case 'listar':
        
        $rspta=$categoria->listar();
        
        $data = Array();

        foreach ($rspta as $reg){
            $data[] = array(
            "0"=>($reg['condicion'])?'<button class="btn btn-warning" onclick="mostrar('.$reg['idcategoria'].')"><i class="fa fa-pencil"></i></button>'.
                ' <button class="btn btn-danger" onclick="desactivar('.$reg['idcategoria'].')"><i class="fa fa-close"></i></button>':
                '<button class="btn btn-warning" onclick="mostrar('.$reg['idcategoria'].')"><i class="fa fa-pencil"></i></button>'.
                ' <button class="btn btn-primary" onclick="activar('.$reg['idcategoria'].')"><i class="fa fa-check"></i></button>',
                "1"=>utf8_encode($reg['nombre']),
                "2"=>utf8_encode($reg['descripcion']),
                "3"=>($reg['condicion'])?'<span class="label label-info">Activado</span>':
                '<span class="label label-danger">Desactivado</span>'
            );
        }
        
        $results = array(
            "sEcho"=>1, //Informacion para el datatables
            "iTotalRecords"=>count($data), //enviamos el total registros ao datatable
            "iTotalDisplayRecords"=>count($data), //enviamos el total de registros a visualizar
            "aaData"=>$data
        );
        echo json_encode($results);
        break;