
<?php

$numero1 =$_POST["numero1"];
$numero2 =$_POST["numero2"];
$opcion =$_POST["opcion"];
$fecha = date("Y-m-d H:i:s");

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

$dbopts = parse_url(getenv('DATABASE_URL'));
$app->register(new Csanquer\Silex\PdoServiceProvider\Provider\PDOServiceProvider('pdo'),
               array(
                'pdo.server' => array(
                   'driver'   => 'pgsql',
                   'user' => $dbopts["user"],
                   'password' => $dbopts["pass"],
                   'host' => $dbopts["host"],
                   'port' => $dbopts["port"],
                   'dbname' => ltrim($dbopts["path"],'/')
                   )
               )
);

//echo "este".$numero1."el 2".$numero2."operacion".$opcion;
select * from tbl_operaciones where id is not null order by desc limit 10;
?>