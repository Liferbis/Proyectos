<?php

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
?>