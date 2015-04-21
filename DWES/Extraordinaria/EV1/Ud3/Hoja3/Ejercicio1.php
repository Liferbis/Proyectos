<html>
<head>
	<title>Ejercicio 1 Lidia</title>
</head>
<body>

<?php 

function cargar() {
    for ($i = 0; $i < 5; $i++) {
        $numeros1[$i] = rand(0, 7);
    }

    return $numeros1;
}

function cargar2() {
    for ($i = 0; $i < 10; $i++) {
        $numeros1[$i] = rand(0,15);
    }
    return $numeros1;
}

function ordenar($a) {
	sort($a);
    $n = count($a);
    	echo "{ ";
    for ($i = 0; $i < $n; $i++) {
        echo $a[$i];
        if($i==($n-1)){
			echo " }";
        }else{
        	echo ", ";
        }
    }
    return $a;
}

function mezclar($array1, $array2) {
    $arrayfinal=array_merge($array1, $array2);
    print_r($arrayfinal) ;
}
echo "<li>Array 1 ordenado:";
$array1 = ordenar(cargar());
echo "</li><li>Array 2 ordenado:";
$array2 = ordenar(cargar2());
echo "</li><li>Array 1 y 2 mezclado:";
mezclar($array1, $array2);
echo "</li>";

 ?>
</body>
</html>