<?php
require_once "include/BaseDeDatos.php";
require_once "include/classes.php";
session_start();

if (isset($_SESSION["usuario"])){
    if (isset($_GET['gestor'])) {
        $gestor = $_GET['gestor'];
        if ($gestor == "calendario") {
            include ('vistas/VistaCalendario.php');

        } else if ($gestor == "gestion") {
            include ('vistas/VistaGestion.php');
             
        } else if ($gestor == "modiE") {
            include ('vistas/VistaModificar.php');
            
        } else if ($gestor == "borrarE") {
            include ('vistas/VistaEliminar.php');

        } else if ($gestor == "log-out") {
            include ('vistas/VistaLog-Out.php');

        } else if ($gestor == "logeo") {
            include ('vistas/VistaLogeo.php');

        } else if ($gestor == "aumentoD"){
            $sesion=$_SESSION["usuario"];
            $empleados=BD::CargaEmpleados($sesion);
            include ('vistas/VistaAumento.php');
        }

    }else if(isset($_POST["altaE"])){
        $dni=$_POST["dni"];
        $nombre=$_POST["nombre"];
        $apellido1=$_POST["apellido1"];
        $apellido2=$_POST["apellido2"];
        $localidad=$_POST["localidad"];
        $movil=$_POST["movil"];
        $comentarios=$_POST["coment"];
        $saldo=$_POST["vacas"];
        $estado=BD::nuevoEmpleado($dni, $nombre, $apellido1, $apellido2,  $localidad, $becario, $movil,$saldo, $comentarios);
        if($estado=="true"){
            require_once "vistas/VistaTerminado.php";
        }else{
            require_once "vistas/VistaTerminadoE.php";
        }

    }else if (isset($_POST['modificar'])) {
        $sesion=$_SESSION["usuario"];
        $empleado=BD::DameEmpleado($sesion, $_POST["empleado"]);
        include ("vistas/VistaModifica.php");

    }else if(isset($_POST["sesion"])){
        if($_POST["sesion"]=="1"){
            session_unset();
        }else if($_POST["sesion"]=="0"){
            require_once "vistas/VistaLogin.php";
        }
    }
    else if(isset($_POST['modifica'])){
        $cod=$_POST["cod"];
        $sesion=$_SESSION["usuario"];
        $empleado=BD::DameEmpleado($sesion, $cod);
        foreach ($empleado as $emple) {
            if(empty($_POST["c1"])){
                if(empty($_POST["nombre"])){
                    $nombre=$emple->nombre;
                }else{
                    $nombre=$emple->nombre;
                }
            }else{
                $nombre=$emple->nombre; 
            }

            if(empty($_POST["c2"])){
                if(empty($_POST["dni"])){
                    $dni=$emple->dni;
                }else{
                    $dni=$_POST["dni"];
                }
            }else{
                $dni=$emple->dni;
            }

            if(empty($_POST["c3"])){
                if(empty($_POST["nombre"])){
                    $apellido1=$emple->apellido1;
                }else{
                    $apellido1=$_POST["apellido1"];
                }
            }else{
                $apellido1=$emple->apellido1;
            }

            if(empty($_POST["c4"])){
                if(empty($_POST["nombre"])){
                    $apellido2=$emple->apellido2;
                }else{
                    $apellido2=$_POST["apellido2"];
                }
            }else{
                $apellido2=$emple->apellido2;
            }

            if(empty($_POST["c5"])){
                if(empty($_POST["nombre"])){
                    $localidad=$emple->localidad;
                }else{
                    $localidad=$_POST["localidad"];
                }
            }else{
                $localidad=$emple->localidad;
            }

            if(empty($_POST["c6"])){
                if(empty($_POST["nombre"])){
                    $movil=$emple->movil;
                }else{
                    $movil=$_POST["movil"];
                }
            }else{
                $movil=$emple->movil;
            }

            if(empty($_POST["c7"])){
                if(empty($_POST["nombre"])){
                    $saldo=$emple->saldo;
                }else{
                    $saldo=$_POST["vacas"];
                }
            }else{
               $saldo=$emple->saldo;
            }

            if(empty($_POST["c8"])){
                if(empty($_POST["nombre"])){
                    $comentarios=$emple->comentarios;
                }else{
                    $comentarios=$_POST["comentario"];
                }
                
            }else{ 
                $comentarios=$emple->comentarios;
            }
        }
        $sesion=$_SESSION["usuario"];
        $estado=BD::modificaEmpleado($sesion, $cod, $nombre, $dni, $apellido1, $apellido2, $localidad, $movil, $saldo, $comentarios);
        
        if($estado=="false"){
            require_once "vistas/VistaTerminadoE.php";
        }else{
            require_once "vistas/VistaTerminado.php";
        }
    }else if(isset($_POST["borra"])){
        if($_POST["empleado"]== "0"){
            require_once "vistas/VistaTerminadoE.php";
        }else{
            $usuario=$_SESSION['usuario'];
            $estado=BD::borraEmpleado($usuario, $_POST["empleado"]) ;
            if($estado=="true"){
                require_once "vistas/VistaTerminado.php";
            }else{
                require_once "vistas/VistaTerminadoE.php";
            }
        }
    }else if (isset($_POST['consultar'])) {
        require_once "vistas/VistaConsultar.php";

    }else if (isset($_POST['introducir'])){
        $sesion=$_SESSION["usuario"];
        $empleados=BD::CargaEmpleados($sesion);
        require_once "vistas/VistaIntroducir.php";

    }else if(isset($_POST["informe"])){
        $sesion=$_SESSION["usuario"];
        $empleados=BD::CargaEmpleados($sesion);
        require_once "vistas/VistaInforme.php";

    }else if(isset($_POST["calendario"])){
        require_once "vistas/VistaCalendario.php";

    }else if (isset($_POST["aceptar"])){
            $tipo=$_POST["tipe"];
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
                            //echo '<h1>'.date('Y-m-d',$fechaI) . '->FESTIVOOOOOOO!!!!</h1><br />';
                        }
                    }
                    if($fies==true){
                        $fies=false;
                    }else{
                        //echo date('Y-m-d',$fechaI) . '<br />';
                        $diaslab++;
                    }                     
                }//else{
                //     echo '<h1>'.date('Y-m-d',$fechaI) . '---->FINDEEEEE!!!!</h1><br />';
                // }
            }
            if(isset($_POST["medio1"])){
                $diaslab=$diaslab-0.5;
            }else if(isset($_POST["medio2"])){
                $diaslab=$diaslab-0.5;
            }
            
            $cod_emple=$_POST["empleado"];
            $comentario=$_POST["comentario"];
            $sesion=$_SESSION["usuario"];
            // $emp=BD::DameEmpleado($sesion, $cod_emple);
            // $saldo=BD::DameSaldo($sesion, $cod_emple);
            // $saldo= $saldo-$diaslab;
            //BD::modificaAumento($cod_emple, $num, $comentario);
            BD::dias($sesion, $cod_emple, $fechaI, $fechaF, $dias, $diaslab, $aumento, $comentario);
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
            
    }else if(isset($_POST["cancelar"])){
        require_once "vistas/vistaPrincipal.php";

    }else if (isset($_POST["aumento"])){
        $codigo=$_POST["empleado"];
        $num=$_POST["num"];
        $comentario=$_POST["comentario"];
        $ej=BD::modificaAumento($codigo, $num, $comentario);
        if($ej="true"){
            require_once "vistas/VistaTerminado.php";
        }else{
            require_once "vistas/VistaTerminadoE.php";
        }

    }else if (isset($_POST["generar"])){
        if(isset($_POST["e0"])){
            $empleados=BD::cargaExcel();
            require_once "vistas/PRUEBA.php";
            //echo "Dentro de value=0 ";
            
        }else if(isset($_POST["e1"]) & isset($_POST["num1"])){
            $empl=$_POST["num1"];
            $empleados=BD::cargarExcel($empl);
            require_once "vistas/PRUEBA.php";
            //echo "Dentro de value=1 ".$empl;
        }else if(isset($_POST["e2"])=="2"){
            $tipo=$_POST["tipo"];
            $empleados=BD::cargaExcel($tipo);
            //echo "Dentro de value=2 ";
        }else if(isset($_POST["e3"]) & isset($_POST["num2"])){
            $tipo=$_POST["tipo"];
            $empl=$_POST["num2"];
            $empleados=BD::cargaExcels($empl, $tipo);
            //echo "Dentro de value=3 ";
        }else if(isset($_POST["e4"]) & isset($_POST["anio1"])){
            $anio=$_POST["anio1"];
           // $empleados=BD::cargaExcel();
            echo "Dentro de value=4 ";
        }else if(isset($_POST["e5"]) & isset($_POST["anio2"]) & isset($_POST["num3"])){
            $anio=$_POST["anio2"];
            $empl=$_POST["num3"];
            //$empleados=BD::cargaExcel();
            echo "Dentro de value=5 ";
        }else{
            require_once "vistas/VistaTerminadoE.php";
        }
    } else {
        require_once "vistas/vistaPrincipal.php";
    }
}else if (isset($_POST["login"])){
        $usuario=$_POST["nombre"];
        $ctv=md5($_POST["ctv"]);
        $estado=BD::verifica($usuario, $ctv);
        if($estado=="true"){
           //session_start(); 
           $_SESSION["usuario"]=$usuario;
           require_once "vistas/vistaPrincipal.php";
        }else{
            require_once "vistas/VistaLogin.php";
        }
}else{
    require_once "vistas/VistaLogin.php";
}

?>