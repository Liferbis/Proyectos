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
                die('Fallo en la ruta de la carpeta');
            }else{
                die('Creado correctamente');            
            }
        }
}else if(isset($_POST["acepsol"])){
    $cod_emple=$_POST["empleado"];
    echo "aceptar y solicitar";
    echo "<br><br>";
    require_once "vistas/VistaInforme.php";
}else if (isset($_POST[""]))

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