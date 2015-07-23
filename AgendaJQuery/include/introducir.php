<?php   
require_once "BaseDeDatos.php";

    if(isset($_POST["aceptarW"])){     
        get_intro($_POST["empleado"], $_POST["FechaI"], $_POST["medio1"], $_POST["FechaF"], $_POST["medio2"], $_POST["tipe"], $_POST["descrip"]);
    }

    function get_intro($empleado, $FechaI, $medio1, $FechaF, $medio2, $tipe, $descrip){
        $festivos = BD::damefestivosfechas();
        $fechaI=strtotime($FechaI);
        $fechaIn=date('Y-m-d',$fechaI);
        $fechaF=strtotime($FechaF);
        $fechafi=date('Y-m-d',$fechaF);
        $dias=0;
        $medio=0;
        $num=count($festivos);
        $fiesta=0;
        $diaslab=0;
        $fies=false;

        for( $fechaI; $fechaI<=$fechaF; $fechaI=strtotime( '+1 day ' . date('Y-m-d',$fechaI) ) ){
            $dias++;
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
        if(isset($_POST["medio1"])){
            $medio++;
        }
        if(isset($_POST["medio2"])){
            $medio++;
        }

        if ($medio==1) {
            $diaslab=$diaslab-0.5;
        }else if ($medio==2) {
            $diaslab=$diaslab-1;
        }
        
        echo "DL".$diaslab."<br>DN".$dias."<br>Empleado: ".$empleado."<br>tipe: ".$tipe;
    }
        

        


?>