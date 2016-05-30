/************************************************************************************
Autor             : Patricio Schmidt Mella
Fecha de creación : 23/07/2008
Descripción       : Agrupa las funciones de envio de formulario en php
***************************************************************************************/

function f_enviar_formulario(is_form) {
   eval("document."+is_form+".submit()");
 }//FIN f_enviar()


/*********Creado por Marcelo Aranda 23 de Enero de 2009*/
function EnviaCertificado(is_raiz_sitio){
	window.open(""+is_raiz_sitio+'include/traspaso_sistema/indexCertificadoAlumnoRegular.php','popup','toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=0,width=980,height=600');
}



function f_enviar_curso(ii_c_asignatura,ii_num_periodo,ii_tipo_periodo,ii_ano,ii_paralelo){
	/************************************************************************************
	Autor             : Ricardo Muñoz
	Fecha de creación : 20/08/2010
	Descripción       : Envía a la ficha del curso
	***************************************************************************************/
	
	document.form_ficha_curso.c_asignatura.value=ii_c_asignatura;
	document.form_ficha_curso.n_periodo.value=ii_num_periodo;
	document.form_ficha_curso.t_periodo.value=ii_tipo_periodo;
	document.form_ficha_curso.ano.value=ii_ano;
	document.form_ficha_curso.paralelo.value=ii_paralelo;
	
	document.form_ficha_curso.submit();
	/*
	DEBE INCLUIRSE TAMBIEN EL ARCHIVO
	funciones/funFormulario.php
	enviar a docencia/cursos/ficha_curso.php y mostrar el curso en cuestion
	
	agregar link 
	$is_parametros = "enviar_curso(CODIGO_ASIGNATURA,NUMERO_PERIODO_ASIGNATURA,TIPO_NUMERO_ASIGNATURA,A�O_ASIGNATURA,PARALELO)";
	
	EJEMPLO
	$is_parametros = "enviar_curso('".$ii_c_asignatura."','".$ii_numero_periodo_asig."','".$ii_tipo_numero_asig."','".$ii_ano_asig."','".$ii_paralelo."')";
	echo '<a href="#" onClick="'.$is_parametros.'"> $is_sigla_asig - $ii_num_asig </a>';
	
	*/
}

/**
 * Crea un formulario dinámico en la página con los datos especificados, ejecutando
 * consecutivamente un submit. Esto permite realizar un request sin mostrar los
 * parametros por url, de forma simple, sin tener que escribir el form en la página.
 * Requiere jQuery.
 * @author Enrique Urra C.
 * @version v1.0 20110331_1600
 * @param is_url	Dirección destino del submit ("action" en el form). Puede 
 * 	entregarse una cadena en blanco para realizar un submit a la misma página.
 * @param io_inputs		Objeto js con los parámetros a entregar y sus valores.
 * 	Un objeto con la siguiente definición:
 * 		{
 * 			nombre1: 'valor1',
 * 			nombre2: 'valor2',
 * 			...
 * 			nombreN: 'valorN'
 * 		}
 * 	Será representado como los siguientes inputs en el formulario:
 * 		<input type="hidden" name="nombre1" value="valor1" />
 * 		<input type="hidden" name="nombre2" value="valor2" />
 * 		..
 * 		<input type="hidden" name="nombreN" value="valorN" />
 */
function f_enviar_formulario_dinamico(is_url, io_inputs, is_target)
{
	if(is_target == undefined)
		is_target = "self";
		
	var io_form = $('<form action="' + is_url + '" method="post" target="_'+is_target+'"></form>');
	
	for (is_name in io_inputs)
	{
		var is_valor = io_inputs[is_name];
		var io_input = $('<input type="hidden" name="' + is_name + '" value="' + is_valor + '"/>');
		io_form.append(io_input);
	}
	
	io_form.appendTo('body')[0].submit();
}
