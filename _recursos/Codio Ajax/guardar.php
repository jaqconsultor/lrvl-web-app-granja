<?php

include "conectardb.php";
include "acciones.php";

$e1 = obtener_respuestas_eva_matematica( $_POST['id_eva_matematica'], $_POST['cod_usuario'], $_POST['nu_orden'], $_POST['id_evalua_respuesta'] );
//$sql1 = "";
if ( $e1 == 1 ) {
	$sql1 = guardar_respuestas_eva_matematica( $_POST['id_eva_matematica'], $_POST['cod_usuario'], $_POST['nu_orden'], $_POST['tx_signo'], $_POST['nu_valor_respuesta'], $_POST['in_potencia'], $_POST['in_notacion'], $_POST['id_evalua_respuesta'] );
	//echo "guardar";
}

//echo "SQL " . $sql1; 

//echo $e;
//echo "resultado ";



function guardar_respuestas_eva_matematica( $id_eva_matematica, $cod_usuario, $nu_orden, $tx_signo, $nu_valor_respuesta, $in_potencia, $in_notacion, $id_evalua_respuesta )
{

$sql1 = "";
$sql1 = $sql1 . " UPDATE `evalua_mat_resp_usuario` ";
$sql1 = $sql1 . " SET `tx_signo` = '".$tx_signo."', ";

if( isset( $in_potencia ) ) {
    $sql1 = $sql1 . " `nu_valor_respuesta` = ".$nu_valor_respuesta.",  ";
    $sql1 = $sql1 . " `in_potencia` = ".$in_potencia."  "; 
} else
{
    $sql1 = $sql1 . " `nu_valor_respuesta` = ".$nu_valor_respuesta."  ";
}
//$sql1 = $sql1 . " `in_notacion` = ".$in_notacion." ";
$sql1 = $sql1 . " WHERE id_evalua_respuesta = ".$id_evalua_respuesta." ";
//$sql1 = $sql1 . " codigo_usuario = $cod_usuario and  ";
//$sql1 = $sql1 . " nu_orden = $nu_orden ";

//echo $sql1;

$resultado = mysql_query( $sql1 );

    $son = 1;
    return $sql1;

}

?>
