<?php   
require_once("BaseDeDatos.php");

    if(isset($_POST["empleado"], $_POST["FechaI"], $_POST["medio1"], $_POST["FechaF"], $_POST["medio2"], $_POST["tipe"], $_POST["descrip"])){     
        get_intro($_POST["empleado"], $_POST["FechaI"], $_POST["medio1"], $_POST["FechaF"], $_POST["medio2"], $_POST["tipe"], $_POST["descrip"]);
    }else {
        $message = sprintf("Solicitud no válida.");
        header($_SERVER['SERVER_PROTOCOL'] . ' ' . $message, true, 403);
    }

    function get_intro($empleado, $FechaI, $medio1, $FechaF, $medio2, $tipe, $descrip){
        $festivos = BD::damefestivosfechas();
        $fechaI=strtotime($FechaI);
        $fechaI=date('d-m-Y',$fechaI);
        $fechaF=strtotime($FechaF);
        $fechafi=date('Y-m-d',$fechaF);
        $dias=0;
        $medio=0;
        $num=count($festivos);
        $fiesta=0;
        $diaslab=0;
        $fies=false;
        $jsondata = array();
        for( $fechaI; $fechaI<=$fechaF; $fechaI=strtotime( '+1 day ' . date('Y-m-d',$fechaI) ) ){
            $dias++;
            echo"dentro";
        ////// excluye del array los sabados y domingos/////////
            if( (strcmp (date('D',$fechaI),'Sun')!=0) & (strcmp(date('D',$fechaI),'Sat')!=0) ){
                for ($i=0; $i < $num; $i++) { 
                    if( $fechaI==strtotime($festivos[$i]) ){
                        $fiesta++;
                        $fies=true;
                    }
                }
                if($fies==true){
                    $fies=false;
                }else{
                    $diaslab++;
                }                     
            }
        }
        $aumento="-";
        
        //$diaslab=$diaslab-$medio1-$medio2;

        
        echo "fI: ".$FechaI."<br>fF: ".$FechaF." - dias Lab: ".$diaslab;

        $sesion='l.fernandez';

        $jsondata["success"] = true;//BD::dias($empleado, $fechaI, $fechaF, $dias, $diaslab, $tipe, $descrip, $sesion);
        header('Content-type: application/json; charset=utf-8');
        echo json_encode($jsondata, JSON_FORCE_OBJECT);
    }

exit();



?> 