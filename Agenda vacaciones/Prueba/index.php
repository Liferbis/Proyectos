<?php
require_once "include/BaseDeDatos.php";
require_once "include/classes.php";

if (isset($_GET['gestor'])) {
    $gestor = $_GET['gestor'];
    if ($gestor == "calendario") {
        include ('vistas/VistaCalendario.php');

    } else if ($gestor == "log-out") {
        include ('vistas/VistaLog-Out.php');

    } else if ($gestor == "gestion") {
        include ('vistas/VistaGestion.php');
    }
} else {
    require_once "vistas/vistaPrincipal.php";
}

if (isset($_POST['consultar'])) {
        require_once "vistas/VistaConsultar.php";
}else if (isset($_POST['introducir'])){
    $empleados=BD::CargaEmpleados();
    require_once "vistas/VistaIntroducir.php";
}else if(isset($_POST["informe"])){
        require_once "vistas/VistaInforme.php";
}else if(isset($_POST["calendario"])){
        require_once "vistas/VistaCalendario.php";
}else if (isset($_POST["aceptar"])){
    //////  RECOGEMOS DE LA BASE DE DATOS UN ARRAY CON LOS DIAS!!!! FESTIVOS DE EL AÑO EN CUESTION  ////////////////////////////
        $festivos=BD::damefestivosfechas();
    //////  CALCULA LOS DIAS NATURALES Y LABORABLES EXCLULLENDO LOS FESTIVOS               /////////
        $fechaI=strtotime($_POST["fechaI"]);
        $fechaF=strtotime($_POST["fechaF"]);
        $dias=0;
        $fiesta=0;
        $diaslab=0;
        $fies=false;

        for( $fechaI; $fechaI<=$fechaF; $fechaI=strtotime( '+1 day ' . date('Y-m-d',$fechaI) ) ){
            $dias++;
            ////// excluye del array los sabados y domingos/////////
            if( (strcmp (date('D',$fechaI),'Sun')!=0) & (strcmp(date('D',$fechaI),'Sat')!=0) ){
                for ($i=0; $i <= $num-1; $i++) { 
                    if( $fechaI==strtotime($festivos[$i]) ){
                        $fiesta++;
                        $fies=true;
                        echo '<h1>'.date('Y-m-d',$fechaI) . '->FESTIVOOOOOOO!!!!</h1><br />';
                    }
                }
                if($fies==true){
                    $fies=false;
                }else{
                    echo date('Y-m-d',$fechaI) . '<br />';
                    $diaslab++;
                }                     
            }else{
                echo '<h1>'.date('Y-m-d',$fechaI) . '---->FINDEEEEE!!!!</h1><br />';
            }
        }
        if(isset($_POST["medio1"])){
            $diaslab=$diaslab-0.5;
        }else if(isset($_POST["medio2"])){
            $diaslab=$diaslab-0.5;
        }
        
        $cod_emple=$_POST["empleado"];

        $emp=BD::DameEmpleado($cod_emple);
        foreach ($emp as $emple) {
            $nombre=$emple->nombre;
            $apellido1=$emple->apellido1;
        }

        $dir="C:/GestorDeVacaciones/".$nombre."_".$apellido1;
        if(file_exists($dir)){
        $fecha=date('Y-m-d');//'2015-01-01';
        $ruta=$dir."/".$nombre."_".$apellido1."_".$fecha;
        echo $ruta;
        $folder=mkdir($ruta, 0755, true);
            if(!$folder){
                die('Fallo en la ruta de la carpeta');
            }else{
                die('Creado correctamente');
            }
        }else{
        $dir="C:/GestorDeVacaciones/".$nombre."_".$apellido1;
            $fecha=date('Y-m-d');//'2015-01-01';
            $ruta=$dir."/".$nombre."_".$apellido1."_".$fecha;
            $folder=mkdir($ruta, 0755, true);
            if(!$folder){
                echo 'Fallo en la ruta de la carpeta';
            }else{
                echo 'Creado correctamente';            
            }
        }
        
}else if(isset($_POST["acepsol"])){
    $cod_emple=$_POST["empleado"];
    echo "aceptar y solicitar";
    echo "<br><br>";
    require_once "vistas/VistaInforme.php";
}else if (isset($_POST["generar"])){
    if(isset($_POST["excel"])==0){

    }else if(isset($_POST["excel"])==1 & isset($_POST["num1"])){

    }else if(isset($_POST["excel"])==2){

    }else if(isset($_POST["excel"])==3 & isset($_POST["num2"])){

    }else if(isset($_POST["excel"])==4 isset($_POST["anio1"])){

    }else if(isset($_POST["excel"])==5 & isset($_POST["anio2"]) & isset($_POST["num3"])){

    }
}

// }

// if (isset($_POST['crearRunner'])) {
//     $dni = $_POST['dni'];
//     $nombre = $_POST['nombre'];
//     $sexo = $_POST['sexo'];
//     $talla = $_POST['talla'];

//     $runner = new Runner($dni, $nombre, $sexo, $talla);
//     BD_Modelo::guardaRunner($runner);
// }
?>