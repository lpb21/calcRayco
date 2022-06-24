
<?php

$numero1 =$_POST["numero1"];
$numero2 =$_POST["numero2"];
$opcion =$_POST["opcion"];

if ($opcion =="sumar" ){
    $resultado = $numero1 + $numero2;
    echo $resultado;
}elseif ($opcion == "restar" ) {
    $resultado = $numero1 - $numero2;
    echo $resultado;
}elseif ($opcion == "multiplicar" ) {
    $resultado = $numero1 * $numero2;
    echo $resultado;
}elseif ($opcion == "dividir" ) {
    $resultado = $numero1 / $numero2;
    echo $resultado;
}

//echo "este".$numero1."el 2".$numero2."operacion".$opcion;

?>