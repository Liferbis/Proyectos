<?php        
        $tipo=$_POST["tipe"];
            //////  RECOGEMOS DE LA BASE DE DATOS UN ARRAY CON LOS DIAS!!!! FESTIVOS DE EL AÑO EN CUESTION  ////////////////////////////
        $festivos=BD::damefestivosfechas();
            //////  CALCULA LOS DIAS NATURALES Y LABORABLES EXCLULLENDO LOS FESTIVOS               /////////
        
        $fechaI=strtotime($_POST["fechaI"]);
        $fechaIn=date('Y-m-d',$fechaI);
        $fechaF=strtotime($_POST["fechaF"]);
        $dias=0;
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
        $cod_emple=$_POST["empleado"];
        $comentario=$_POST["comentario"];
        $sesion=$_SESSION["usuario"];
        $aumento="-";

        $fechafi=date('Y-m-d',$fechaF);
        $medio=0;
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
?>