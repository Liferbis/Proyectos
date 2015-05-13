<?php
require_once "include/BaseDeDatos.php";
require_once "include/classes.php";
session_start();

////////////////////////////////////////////////////////////////////////////////
///////   NO SE ACCEDE SIN ESTAR LOGEADO !!!!///////////////////////////////////
///////   ACCSESO DES DE LA BARRA DE MENU //////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
if (isset($_SESSION["usuario"])){
    ////////////////////////////////////////////////////////////////////////////
    ///////  ACCSESO DES DE LA BARRA DE MENU !!!!  /////////////////////////////
    ////////////////////////////////////////////////////////////////////////////
    if (isset($_GET['gestor'])) {
        $gestor = $_GET['gestor'];
        if ($gestor == "calendario") {
            include ('vistas/VistaCalendario.php');

        } else if ($gestor == "gestion") {
            include ('vistas/VistaGestion.php');

        } else if ($gestor == "modiE") {
            $sesion=$_SESSION["usuario"];
            $empleados=BD::CargaEmpleados($sesion);
            include ('vistas/VistaModificar.php');
            
        } else if ($gestor == "borrarE") {
            $sesion=$_SESSION["usuario"];
            $empleados=BD::CargaEmpleados($sesion);
            include ('vistas/VistaEliminar.php');

        } else if ($gestor == "log-out") {
            include ('vistas/VistaLog-Out.php');

        } else if ($gestor == "logeo") {
            if(isset($_SESSION["usuario"])){
                include ('vistas/VistaLogin1.php');
            }else{
                include ('vistas/VistaLogin.php');
            }            

        } else if ($gestor == "aumentoD"){
            $sesion=$_SESSION["usuario"];
            $empleados=BD::CargaEmpleados($sesion);
            include ('vistas/VistaAumento.php');
        } else if ($gestor == "nuevo") {
            include ('vistas/VistaUsuNuevo.php');

        } else if ($gestor == "copiaSeg") {

            include ('vistas/VistaAjustes.php');
            // $empleados=BD::copiaSeg();
        }

    ////////////////////////////////////////////////////////////////////////////
    ///////  NUEVO USUARIO !!!!! ///////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////
    }else if(isset($_POST["nuevoN"])){
        $sesion=$_SESSION["usuario"];
        $dni=$_POST["dni"];
        $usuario=$_POST["usuario"];
        $ctv=$_POST["ctv"];
        if( isset($ctv) == isset($_POST["ctv1"]) ){
            if(isset($_POST["usuario"]) & isset($_POST["dni"])){
                $ctv=md5($ctv);
                $estado=BD::registro($sesion, $usuario, $ctv, $dni);
                if($estado=="true"){
                    require_once "vistas/VistaTerminado.php";
                }else{
                    require_once "vistas/VistaTerminadoE.php";
                }
            }else{
                require_once "vistas/VistaTerminadoE.php";
            }
        }else{
            require_once "vistas/VistaTerminadoE.php";
        }
    ////////////////////////////////////////////////////////////////////////////
    ///////  NUEVO EMPLEADO !!!!! //////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////
    }else if(isset($_POST["altaE"])){
        echo "AltaE";
        $sesion=$_SESSION["usuario"];
        $dni=$_POST["dni"];
        $nombre=$_POST["nombre"];
        $apellido1=$_POST["apellido1"];
        $apellido2=$_POST["apellido2"];
        $localidad=$_POST["localidad"];
        $movil=$_POST["movil"];
        $comentarios=$_POST["coment"];
        $saldo=$_POST["vacas"];
        
        $estado=BD::nuevoEmpleado($sesion, $dni, $nombre, $apellido1, $apellido2,  $localidad, $movil,$saldo, $comentarios);

        if($estado=="true"){
            require_once "vistas/VistaTerminado.php";
        }else{
            require_once "vistas/VistaTerminadoE.php";
        }

    ////////////////////////////////////////////////////////////////////////////
    /////// ELEGIR AL EMPLEADO PARA MODIFICAR !!!!!  ///////////////////////////
    ////////////////////////////////////////////////////////////////////////////
    }else if (isset($_POST['modificar'])) {
        $sesion=$_SESSION["usuario"];
        $empleado=BD::DameEmpleado($sesion, $_POST["empleado"]);
        include ("vistas/VistaModifica.php");

    ////////////////////////////////////////////////////////////////////////////
    ///////  LOG-OUT  !!!!!  ///////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////
    }else if(isset($_POST["sesion"])){
        if($_POST["sesion"]=="1"){
            session_unset();
            header('Location: index.php');
        }else if($_POST["sesion"]=="0"){
            require_once "vistas/vistaPrincipal.php";
        }

    ////////////////////////////////////////////////////////////////////////////
    ///////  MODIFICAR A UN EMPLEADO !!!!!  ////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////
    }else if(isset($_POST['modifica'])){
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

    ////////////////////////////////////////////////////////////////////////////
    ///////  BORRAR A UN EMPLEADO !!!!!  ///////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////
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

    ////////////////////////////////////////////////////////////////////////////
    ///////   INTRODUCIR VACACIONES !!!!    ////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////
    }else if (isset($_POST['introducir'])){
        $sesion=$_SESSION["usuario"];
        $empleados=BD::CargaEmpleados($sesion);
        require_once "vistas/VistaIntroducir.php";

    ////////////////////////////////////////////////////////////////////////////
    ///////   PARA GENERAR EL INFORME !!!! /////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////
    }else if(isset($_POST["informe"])){
        $sesion=$_SESSION["usuario"];
        $empleados=BD::CargaEmpleados($sesion);
        require_once "vistas/VistaInforme.php";

    ////////////////////////////////////////////////////////////////////////////
    ///////   PARA GENERAR EL EXCEL !!!!!! /////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////
    }else if(isset($_POST["genexcel"])){
        $sesion=$_SESSION["usuario"];
        $empleados=BD::CargaEmpleados($sesion);
        require_once "vistas/VistaInformeEx.php";

    }else if(isset($_POST["calendario"])){
        require_once "vistas/VistaCalendario.php";

    ////////////////////////////////////////////////////////////////////////////
    ///////   INTRODUCIR VACACIONES CONTANDO CON LOS FESTIVOS  !!!!!!///////////
    ////////////////////////////////////////////////////////////////////////////
    }else if(isset($_POST["introW"])){
        $sesion=$_SESSION["usuario"];
        require_once "include/Introdicir.php";
        $emple=BD::DameEmpleado($sesion, $cod_emple);
        $estado= BD::dias($cod_emple, $fechaIn, $fechafi, $dias, $diaslab, $tipo, $comentario, $sesion);
        if($estado=="false"){
            require_once "vistas/VistaTerminadoE.php";
        }else{
            if($tipo=="bec" || $tipo=="bal"){
                require_once "vistas/VistaTerminado.php";
            }else{
                require_once "vistas/VistaWord.php";
            }
        }
    }else if (isset($_POST["intro"])){

        require_once "include/Introdicir.php";

        $estado= BD::dias($cod_emple, $fechaIn, $fechafi, $dias, $diaslab, $tipo, $comentario, $sesion);
        if($estado=="true"){
            require_once "vistas/VistaTerminado.php";
        }else{
            require_once "vistas/VistaTerminadoE.php";
        }

    ////////////////////////////////////////////////////////////////////////////
    ///////   BOTON CANCELAS EN VARIAS PAGINAS FUNCION DE VOLVER !!!!///////////
    ////////////////////////////////////////////////////////////////////////////
    }else if(isset($_POST["cancelar"])){
        require_once "vistas/vistaPrincipal.php";

    ////////////////////////////////////////////////////////////////////////////
    ///////   EL AUMENTO DEL SALDO !!!!!!! /////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////
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

    ////////////////////////////////////////////////////////////////////////////
    ///////   PARA GENERAR EL LA TABLA DE INFORMACION !!!!!!! //////////////////
    ////////////////////////////////////////////////////////////////////////////
    }else if (isset($_POST["generarI"])){
        $sesion=$_SESSION["usuario"];
        if(isset($_POST["e0"])){
            $empleados=BD::cargaExcel($sesion);
            if($empleados==0){
                require_once "vistas/VistaNoPerson.php";
            }else{
                require_once "vistas/VistaTablaInforme.php";
            }

        }else if(isset($_POST["e1"]) & isset($_POST["num1"])){
            $empl=$_POST["num1"];
            $empleados=BD::cargarExcel($empl);
            if($empleados==0){
                require_once "vistas/VistaNoPerson.php";
            }else{
                require_once "vistas/VistaTablaInforme.php";
            }

        }else if(isset($_POST["e2"])){
            $tipo=$_POST["tipo"];
            $empleados=BD::cargarExcels($sesion, $tipo);
            if($empleados==0){
                require_once "vistas/VistaNoPerson.php";
            }else{
                require_once "vistas/VistaTablaInforme.php";
            }
        }else if(isset($_POST["e3"]) & isset($_POST["num2"])){
            $tipo=$_POST["tipo"];
            $codigo=$_POST["num2"];

            $empleados=BD::cargaExcels($codigo, $tipo);
            if($empleados==0){
                require_once "vistas/VistaNoPerson.php";
            }else{
                require_once "vistas/VistaTablaInforme.php";
            }

        }else if(isset($_POST["e4"]) & isset($_POST["anio1"])){
            $anio=$_POST["anio1"];
            $empleados=BD::carganExcel($sesion, $anio);
            if($empleados==0){
                require_once "vistas/VistaNoPerson.php";
            }else{
                require_once "vistas/VistaTablaInforme.php";
            }

        }else if(isset($_POST["e5"]) & isset($_POST["anio2"]) & isset($_POST["num3"])){
            $anio=$_POST["anio2"];
            $empl=$_POST["num3"];
            $empleados=BD::carganExcels($empl, $anio);

            if($empleados==0){
                require_once "vistas/VistaNoPerson.php";
            }else{
                require_once "vistas/VistaTablaInforme.php";
            }
        }else{
            require_once "vistas/VistaTerminadoE.php";
        }

    ////////////////////////////////////////////////////////////////////////////
    ///////   PARA GENERAR EL EXCEL !!!!!! /////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////
    }else if (isset($_POST["generarE"])){
        $sesion=$_SESSION["usuario"];
        if(isset($_POST["e0"])){
            $empleados=BD::cargaExcel($sesion);
            if($empleados==0){
                require_once "vistas/VistaNoPerson.php";
            }else{
                $todos=1;
                require_once "vistas/VistaExcel.php";
            }

        }else if(isset($_POST["e1"]) & isset($_POST["num1"])){
            $empl=$_POST["num1"];
            $empleados=BD::cargarExcel($empl);
            if($empleados==0){
                require_once "vistas/VistaNoPerson.php";
            }else{
                $todos=0;
                require_once "vistas/VistaExcel.php";
            }

        }else if(isset($_POST["e2"])){
            $tipo=$_POST["tipo"];
            $empleados=BD::cargarExcels($sesion, $tipo);
            if($empleados==0){
                require_once "vistas/VistaNoPerson.php";
            }else{
                $todos=2;
                require_once "vistas/VistaExcel.php";
            }
        }else if(isset($_POST["e3"]) & isset($_POST["num2"])){
            $tipo=$_POST["tipo"];
            $codigo=$_POST["num2"];

            $empleados=BD::cargaExcels($codigo, $tipo);
            if($empleados==0){
                require_once "vistas/VistaNoPerson.php";
            }else{
                $todos=0;
                require_once "vistas/VistaExcel.php";
            }

        }else if(isset($_POST["e4"]) & isset($_POST["anio1"])){
            $anio=$_POST["anio1"];
            $empleados=BD::carganExcel($sesion, $anio);
            if($empleados==0){
                require_once "vistas/VistaNoPerson.php";
            }else{
                $todos=3;
                require_once "vistas/VistaExcel.php";
            }

        }else if(isset($_POST["e5"]) & isset($_POST["anio2"]) & isset($_POST["num3"])){
            $anio=$_POST["anio2"];
            $empl=$_POST["num3"];
            $empleados=BD::carganExcels($empl, $anio);

            if($empleados==0){
                require_once "vistas/VistaNoPerson.php";
            }else{
                $todos=0;
                require_once "vistas/VistaExcel.php";
            }

        }else{
            require_once "vistas/VistaTerminadoE.php";
        }

    ////////////////////////////////////////////////////////////////////////////
    ///////  VISTA PRINCIPAL !!!!!!! ///////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////
    }else{
        require_once "vistas/vistaPrincipal.php";
    }




////////////////////////////////////////////////////////////////////////////////
///////   NO SE ACCEDE SIN ESTAR LOGEADO !!!!///////////////////////////////////
////////////  COMPROBACION DE CREDENCIATES !!!!!!!!   //////////////////////////
////////////////////////////////////////////////////////////////////////////////
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

////////////////////////////////////////////////////////////////////////////////
///////   NO SE ACCEDE SIN ESTAR LOGEADO !!!!///////////////////////////////////
////////////  COMPROBACION DE CREDENCIATES !!!!!!!!   //////////////////////////
////////////////////////////////////////////////////////////////////////////////
}else{
    require_once "vistas/VistaLogin.php";
}
?>