<?php

    error_reporting(E_ERROR);
	
	 session_start();
	 
	 $mensaje0 = $_SESSION['nombres'];
  
    include "conectardb.php";
	include "acciones.php";

	include("aux-menu.php");


	$cod_usuario = $_SESSION['codigo'];
    $materia  = $_GET['cod_materia'];	
	$capituloaux = $_GET['cod_capitulo'];	
	$tema =     $_GET['cod_tema'];	
	$videoa =   $_GET['cod_vid_eje'];	
	$videoaa =   $_GET['cod_vid_eje'];
	$tab    =   $_GET['tab'];
	$emp    =   $_GET['emp'];

	if ( !isset( $emp ) ) {
//		$emp = 0;
	}

	/*
	$fila = obtener1Materia($_GET['cod_materia']);
	
	$capitulo = array();
	
	$capitulo = obtenerCapituloTemaVideoEjercicio($_GET['cod_materia'],$_GET['cod_capitulo'],$_GET['cod_tema'],$_GET['cod_vid_eje']);
	
	$aux_eval = $capitulo[0]['Evaluacion'];
	
	$video_a = obtenerVideoEjercicio($_GET['cod_materia'],$_GET['cod_capitulo'],$_GET['cod_tema'],$_GET['cod_vid_eje']);

    $video = $video_a[0]['sub_tipo'];
	$ver   = $video_a[0]['visual'];
	
	$_son = obtenerAulaUsuario($_SESSION['codigo'],$_GET['cod_materia']);
	 */  
	  $_SESSION['aula'] = $_son[0]['aula'];
	
	if ($_SESSION['aula'] == $_GET['cod_materia'] or $ver  == "L") {$mensaje = " Aula Virtual";} 
	   else {$mensaje = "  Se requiere estar inscrito y/o activarse en el aula para visualizar este documento  ";}
     
	 $evaluacion = array();


	if (isset($_SESSION['codigo'])) {
	//	$cant = existeevaluacion($_SESSION['codigo'],$_GET['cod_materia'],$aux_eval);
	  	if ($cant == 0) {
	//		insertarevaluacion($_SESSION['codigo'],$_GET['cod_materia'],$_GET['cod_capitulo'],$_GET['cod_tema'],$_GET['cod_vid_eje'],$aux_eval,1);
	     }
	}
/*		  
	 $evaluacion =	obtenerevaluacion($_SESSION['codigo'],$_GET['cod_materia'],$_GET['cod_capitulo'],$_GET['cod_tema'],$_GET['cod_vid_eje']);
	
	 $tip_resp = array();
	 $tip_resp =  obtenertiporesp($_GET['cod_materia'],$_GET['cod_capitulo'],$_GET['cod_tema'],$_GET['cod_vid_eje']);
	
*/


// Archivo de Informacion
   // $id_eva_matematica = 0;

	
	/*
    $estructura = array();
    $resultado = mysql_query("Select cod_area , cod_capitulo , capitulo , cod_tema, tema , cod_vid_eje, tipo, formato, nombre,descripcion,sub_tipo,Tipo_estr,visual,Evaluacion,Eval_Dep
		                         From materias_capitulos
		                         LEFT JOIN capitulos_temas using(cod_area,cod_capitulo)
								 LEFT JOIN tema_videos_ejercicios using(cod_area,cod_capitulo,cod_tema)
								 where (cod_area  = " . $cod_materia . " ) order by cod_vid_eje ");
    while ($row = mysql_fetch_array($resultado, MYSQL_ASSOC)) {
        $estructura[] = $row;
    }

    mysql_free_result($resultado);
    return $estructura;
*/	
	


<script>

    function guardar(objeto, id_eva_matematica, cod_usuario, nu_orden, nu_objeto) {
        var vanterior;
        var procesando;
        var ok;

		valor_respuesta = "#id_evalua_respuesta" + nu_objeto;
		//alert( $( valor_respuesta ).val() );

		valor_respuesta = "#nu_valor_respuesta" + nu_objeto;
		//alert( $( valor_respuesta ).val() );

		valor_respuesta = "#in_potencia" + nu_objeto;
		//alert( $( valor_respuesta ).val() );

        var parametros = {
            "id_eva_matematica": id_eva_matematica,
            "cod_usuario": cod_usuario,
            "nu_orden": nu_objeto,
			"tx_signo": $("#tx_signo" + nu_objeto).val(),
			"nu_valor_respuesta": $("#nu_valor_respuesta" + nu_objeto).val(),
			"in_potencia": $("#in_potencia" + nu_objeto).val(),
			"tx_unidad_medidad": $("#tx_unidad_medidad" + nu_objeto).val(),
            "id_evalua_respuesta": $("#id_evalua_respuesta" + nu_objeto).val()
        };

		//alert( $("#informacion1").val() );

		//valor_respuesta = "#" + "nu_valor_respuesta" + nu_objeto;
		//alert( valor_respuesta );
		//alert( $(valor_respuesta).val() );


		//valor_respuesta = "#" + "tx_unidad_medidad" + nu_objeto;
		//alert( $(valor_respuesta).val() );

        ok = 1;

        objeto = "#" + objeto;
        vanterior = $(objeto).html();

        $.ajax({
            data: parametros,
            url: 'guardar.php',
            type: 'post',
            async: true,
            beforeSend: function () {
                console.log("Empezando");
                //alert("empezando");
                procesando = '<button type="button" class="btn btn-warning"><strong>Guardando Informacion!</strong>...</button>'
                procesando = $(objeto).html(procesando);

            },
            error: function (response) {
                console.log(response);
		        response1 = JSON.stringify(response);
                alert(response1);
                console.log("Error");
                verror = '<button type="button" class="btn btn-danger">Error al enviar los datos</button>';
                $(objeto).html(verror);
                ok = -1;

            },
            success: function (response) {
              	response1 = JSON.stringify(response);
                //alert(response);
                //alert("Guardado");
                console.log("Satisfactorio");
                $vsi = '<button type="button" class="btn btn-success">Informacion Guardada</button>';
                $(objeto).html($vsi);
                //$(objeto).html('');
                ok = 1;
            },
            // código a ejecutar sin importar si la petición falló o no
            complete: function (response) {
            	console.log("complete");
            	//alert("Process Complete");
                //alert('Petición realizada');
                //$("#contactado").html("ok");
                //
                //alert(reponse);
                //$(objeto).html('');

            }
        });

        $(objeto).html(vanterior);

        return ok;
    }
</script>



 
 <?php 
include("pie.php");
?>
 	
<!--
	</body>	
</html>	
-->