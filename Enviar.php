
<?php


$numero1 =$_POST["numero1"];
$numero2 =$_POST["numero2"];
$opcion =$_POST["opcion"];
//$resultado=$_POST["resultado"];
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

/*
try {

    $db = mysqli_connect("ec2-44-197-128-108.compute-1.amazonaws.com", "jikiihqjomguak", "4595fe83a2fd7ed77f44a975ed208c4244bbefe8966b2ffab16850693c3bce93", "d9a269cd9juigh", "5432");
    $tabla = "OPERACIONES";

$ConsultaSQL = "SELECT * FROM $tabla WHERE FECHA IS NOT NULL AND NUMERO1 IS NOT NULL AND NUMERO2 IS NOT NULL AND OPERACION IS NOT NULL AND RESULTADO IS NOT NULL ORDER BY ASC LIMIT 10";/* AND CON_CTAALDIA_SALDO IS NULL;";*/
		 //echo $ConsultaSQL;
		 //exit;
/*			if ($Result1 = $db->query($ConsultaSQL)){
			$CantidadResultados = $Result1->num_rows;
    			if ($CantidadResultados == 0) {	
					//echo ("prueba 123");
					//exit;
		            //Ingresa los datos del formulario
					if ($Result2 = $db->query("INSERT INTO $tabla (NUMERO1, NUMERO2, OPERACION, RESULTADO, FECHA) VALUES ('$numero1','$numero2','$opcion','$resultado','$fecha');")){

						echo "Insercion de datos exitosa";
					}else{
						echo "error en la Insercion de datos";
					}
						 
				} else {
							echo "Success2";
							
						}
						mysqli_close($db);
					}else{
						
						echo "error";
					}
				} catch (\Exception $e) {
						echo 'Se presentó un inconveniente al procesar la información. Actualiza la pagina e intenta nuevamente';
}*/
?>
