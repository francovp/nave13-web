<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- saved from url=(0091)https://nave10.ucv.cl//alumno/aranceles_beneficios/beneficios/InicioBeneficiosDAEAlumno.php -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	<title>Navegador Académico: Beneficios Estudiantiles</title>
	
	<meta name="author" content="DSIC - PUCV">
	<meta name="Language" content="es">

	  <!-- AngularJS y Jquery -->
    <script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
    <script src="jQueryAssets/jquery-1.8.3.min.js" type="text/javascript"></script>
    <script src="jQueryAssets/jquery-ui-1.9.2.button.custom.min.js" type="text/javascript"></script>
  
  <!-- Bootstrap Online -->
    <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Styles Jquery -->
    <link href="jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
    <link href="jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css">
    <link href="jQueryAssets/jquery.ui.button.min.css" rel="stylesheet" type="text/css">
	
<link rel="stylesheet" href="css/nav-print.css" type="text/css" media="print">
<link rel="shortcut icon" type="image/x-icon" href="https://nave10.ucv.cl//imagen/favicon.ico">

<!--[if !IE]>-->
	<link rel="stylesheet" href="css/nav-screen.css" type="text/css" media="screen">
<!--<![endif]-->

<!--[if gte IE 8]>
	<link rel="stylesheet" href="../../../css/nav-screen.css" type="text/css" media="screen" />
<![endif]-->


<!--[if IE 8]>
	<link rel="stylesheet" href="../../../css/nav-screen.css" type="text/css" media="screen" />
	<link rel="stylesheet" type="text/css" href="../../../css/DataTables/demo_table_ie.css" media="screen"/>
<![endif]-->


<!--[if IE 7]>
	<link rel="stylesheet" href="../../../css/nav-screen-ie.css" type="text/css" media="screen" />
	<link rel="stylesheet" type="text/css" href="../../../css/DataTables/demo_table_ie.css" media="screen"/>
<![endif]-->
 

<!--[if lte IE 6]>
	<link rel="stylesheet" href="../../../css/nav-print-ie6.css" type="text/css" media="print" />
	<link rel="stylesheet" href="../../../css/nav-screen-ie.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="../../../css/nav-screen-ie6.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="../../../css/DataTables/demo_table_ie.css" type="text/css" media="screen"/>
	<script type="text/javascript" src="../../../css/supersleight-min.js"></script>
	
<![endif]-->
    
    <script type="text/javascript" async="" src="./perfil_files/ga.js"></script><script languaje="javascript">
    
    //FUNCION PARA ABRIR LA PANTALLA DE BENEFICIOS ASIGNADOS EN UN POP UP
    function popUp(URL) {
        day = new Date();
        id = day.getTime();
        eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=800,height=200,left = 112,top = 284');");
    }

    function preguntas(){
        window.open("https://nave10.ucv.cl//varios/faq_index.php","vent","width=500,height=500,status=no,toolbar=no,menubar=no,location=no,scrollbars=yes,resizable=yes");
    }
    
    function launch(file,name,winwidth,winheight)        
    {   
        
    iz=(screen.width/2)-(winwidth/2);
    
    var string="width="+winwidth+",height="+winheight+",left="+iz+",top=40, location=no;toolbar=no,directories=no,menubar=no,resizable=no,dependent=yes,status=no"    
    hwnd = window.open(file,name,string) ;                    
    if (navigator.appName == "Netscape") {   
       hwnd.focus()   
       }   
    }   
    
    function enviaCompruebaAntecedentes(){
        document.CompruebaAntecedentes.submit();
    }
    function enviaCompruebaPostulacion(){
        document.CompruebaPostulacion.submit();
    }
    function enviaCompruebaPostulacion2(){
        document.CompruebaPostulacion2.submit();
    }
    function enviaCompruebaPostulacion3(){
        document.CompruebaPostulacion3.submit();
    }
    function enviaCompruebaPostulacion4(){
        document.CompruebaPostulacion4.submit();
    }
    function enviaMensajeNoDocumenta(){
        document.MensajeNoDocumenta.submit();
    }
    function enviaMensajeNoDocumenta2(){
        document.MensajeNoDocumenta2.submit();
    }
    function enviaMensajeYaAcredito(){
        document.MensajeYaAcredito.submit();
    }
    function enviaMensajeYaPostulo(){
        document.MensajeYaPostulo.submit();
    }
    function enviaMensajeNoDisponibleBeneficios(){
        document.MensajeNoDisponibleBeneficios.submit();
    }
    function enviaMensajeNoDisponibleAlmuerzo(){
        document.MensajeNoDisponibleAlmuerzo.submit();
    }
    function enviaMensajeDebeAntecedentes(){
        document.MensajeDebeAntecedentes.submit();
    }
    function enviaMensajeDebeAntecedentes2(){
        document.MensajeDebeAntecedentes2.submit();
    }
    function envia(ig_cont_pagina){
        document.forms[ig_cont_pagina].submit();
    }
    </script>
    </head>
    
    <body>
          <div class="container-fluid">
			
<div id="header">
	<div class="center">
		<ul id="top">
										
					<li>Hola FRANCO VALERIO (
						<a href="https://nave10.ucv.cl//inicio/inicio.php">Alumno - ESCUELA DE INGENIERÍA INFORMÁTICA</a>
						)
					</li>
											<!-- MODIFICACION CJIMENEZ 15-07-2010
							Se cambia el target="_blank"  por target="_self"  -->
		            	<li><img src="./perfil_files/logo_correo.png" width="18" height="12" alt="Gmail"><a href="https://nave10.ucv.cl//include/traspaso_sistema/IndexCorreoAlumno.php" target="_self">pucv.cl</a></li>	            	
	                        	<li class="last"><a href="https://nave10.ucv.cl//inicio/CerrarSesion.php">Cerrar Sesión</a></li>        			
            	        			
		</ul>
        
			
		<ul id="menu">	
				<li class="inicio"><a href="https://nave10.ucv.cl//inicio/inicio.php" title="Ir al inicio"><span>Inicio</span></a></li>	
																			<li class="acti"><a href="https://nave10.ucv.cl//alumno/fichas/ficha_consolidada.php" title="Ir a Alumno">Alumno</a></li>
											<li><a href="https://nave10.ucv.cl//docencia/carrera/buscar_carreras.php" title="Ir a Docencia">Docencia</a></li>
									<li><a href="https://nave10.ucv.cl//perfil/perfil/paso3.php" title="Ir a Personal">Perfil</a></li>
		</ul>
					
			<h1><a title="Navegador Académico: Inicio" href="https://nave10.ucv.cl//inicio/inicio.php"><span>Navegador Académico</span></a></h1>
			
	</div><!-- FIN center-->
	
</div><!-- FIN header-->	
<div id="header2">
	<img class="imagenInstitucional" src="./perfil_files/fachadaCropBN.png">
</div>
	
	
    <!--Inicio Menu de izquierda-->
    
    <div id="main">

	<div class="center cf">
	
		<div id="sidebar">
    
     
	<script type="text/javascript">
		function f_inscripcion(){
    		document.form_inscripcion.submit();
    	}
        
        //Mod:20160118 Francisco Gonzalez : Despliegue de mensaje para modulo de certificados durante el periodo de vacaciones 2016
        $(document).ready(function(){
                                    
            $("#lnk_certificados").click(function(){
                
                var dFechaInicioMensaje = new Date("2016-01-21"); //Thu Jan 20 2016
                var dFechaFinMensaje = new Date("2016-02-21"); //Sat Feb 20 2016                                             
                var dFechaActual = new Date();
                
                if( ( dFechaActual >= dFechaInicioMensaje ) && ( dFechaActual <= dFechaFinMensaje ) )
                {
                    var sMensaje = "Estimado alumno(a) te informamos que debido al periodo de receso de actividades de la Universidad; todas aquellas solicitudes de Certificados de T\u00EDtulo y/o Grados, Ranking de T\u00EDtulo y/o Grado, legalizaciones y env\u00EDos a domicilio, que realices"
                            + " entre los d\u00EDas 21 de enero y 21 de febrero NO podr\u00E1n ser atendidas hasta el d\u00EDa martes 23 de febrero 2016."
                            + "\nAgradecemos de antemano tu comprensi\u00F3n.";
                    alert(sMensaje);
                }                
            });            
        });
                               
	</script>
	
<script type="text/javascript">
	function enviar(action){
	document.forms[0].action = action
	document.forms[0].submit();
	}
	function f_envia_menu(is_form){
	//document.forms[i].submit();
	eval("document."+is_form+".submit()");
	}
	
	function cambia_estado(mensaje){
	    window.status=mensaje;
	}
	
	/*********Creado por Betzabet PÃ©rez 7 de marzo del 2005*/
	/**/
	function EnviaAyudantia(){
	    document.form_ayudantia.submit();
	}
	
	/*fin modificaciÃ³n 7 de marzo del 2004*/
	
	/*********Creado por Cristina Fuentealba 23 de abril del 2008*/
	/**/
	function EnviaMedicion(){
	    document.form_medicion.submit();
	}
	
	
	function EnviaMonitor(){
	    document.form_monitor.submit();
	}
	
	/*fin creacion 23 de abril del 2008*/
	/*********Creado por Cristina Fuentealba 15 de Julio del 2008*/
	function EnviaPagare(){
	    document.form_pagare.submit();
	}
	/*fin creacion 15 de Julio del 2008*/
	
	
	function f_enviar_superFicha(ii_rut) {
		document.forms["formulario"].rut.value=ii_rut;        
	    window.open("", "ventanaForm_superFicha", "resizable=yes,scrollbars=yes,toolbar=yes,menubar=yes,location=yes");
	    document.forms["formulario"].submit();
	} // fin function f_enviar_superFicha
/*fin creacion 23 de Enero de 2009*/
	
</script>
<script language="javascript" src="./perfil_files/funEnviarFormulario.js"></script>
		
		<ul id="submenu">
		
		
			<li>Fichas</li>
			
				<ul id="submenuDetalle">
			
					
					<li><form name="FICHA0" method="POST" action="https://nave10.ucv.cl//alumno/fichas/ficha_consolidada.php" target="_top"><input type="hidden" name="rut" value="17517328"></form><a href="javascript:f_envia_menu(&quot;FICHA0&quot;)" onmouseover="window.status=&#39;Inicio&#39;;return(true)">Ficha consolidada </a></li>			    	
			    	
			    	
       	<li><form name="FICHA1" method="POST" action="https://nave10.ucv.cl//alumno/fichas/alumno_ficha.php" target="_top"><input type="hidden" name="rut" value="17517328"></form><a href="javascript:f_envia_menu(&quot;FICHA1&quot;)" onmouseover="window.status=&#39;Ficha del Alumno&#39;;return(true)">Datos personales </a></li>				
					<li><form name="FICHA2" method="POST" action="https://nave10.ucv.cl//alumno/actividades/actividades_extracurriculares.php" target="_top"><input type="hidden" name="rut" value="17517328"></form><a href="javascript:f_envia_menu(&quot;FICHA2&quot;)" onmouseover="window.status=&#39;Actividad Extra Académica&#39;;return(true)">Actividad Extra Académica</a></li>			</ul>
			
					<li>Información curricular</li>
			<ul id="submenuDetalle">
			 
		        
			        <li><form name="FICHA3" method="POST" action="https://nave10.ucv.cl//alumno/informacion_curricular/alumno_matriculas.php" target="_top"><input type="hidden" name="rut" value="17517328"></form><a href="javascript:f_envia_menu(&quot;FICHA3&quot;)" onmouseover="window.status=&#39;Matriculas del Alumno&#39;;return(true)">Matrículas alumno</a></li>			                            
			    
			    <li><form name="FICHA4" method="POST" action="https://nave10.ucv.cl//alumno/informacion_curricular/alumno_cursos.php" target="_top"><input type="hidden" name="rut" value="17517328"></form><a href="javascript:f_envia_menu(&quot;FICHA4&quot;)" onmouseover="window.status=&#39;Cursos del Alumno&#39;;return(true)">Cursos inscritos</a></li><li><form name="FICHA5" method="POST" action="https://nave10.ucv.cl//alumno/fichas/alumno_resultados_test_pae.php" target="_top"><input type="hidden" name="rut" value="17517328"></form><a href="javascript:f_envia_menu(&quot;FICHA5&quot;)" onmouseover="window.status=&#39;Resultados Perfil de Ingreso&#39;;return(true)">Resultados Perfil de Ingreso</a></li>
				
						    	
				<li><form name="FICHA6" method="POST" action="https://nave10.ucv.cl//alumno/informacion_curricular/alumno_avance.php" target="_top"><input type="hidden" name="rut" value="17517328"></form><a href="javascript:f_envia_menu(&quot;FICHA6&quot;)" onmouseover="window.status=&#39;Avance Curricular del Alumno&#39;;return(true)">Avance curricular</a></li>        
				
				<li><form name="FICHA7" method="POST" action="https://nave10.ucv.cl//alumno/informacion_curricular/comparacion_malla.php" target="_top"><input type="hidden" name="rut" value="17517328"></form><a href="javascript:f_envia_menu(&quot;FICHA7&quot;)" onmouseover="window.status=&#39;ComparaciÃ³n avance curricular malla de estudios&#39;;return(true)">Comparación malla</a></li><li><form name="FICHA8" method="POST" action="https://nave10.ucv.cl//alumno/informacion_curricular/alumno_horario.php" target="_top"><input type="hidden" name="rut" value="17517328"></form><a href="javascript:f_envia_menu(&quot;FICHA8&quot;)" onmouseover="window.status=&#39;Horario&#39;;return(true)">Horario</a></li>				</ul>			
							<li>Preinscripción</li>
			<ul id="submenuDetalle">
			<li><form name="FICHA9" method="POST" action="https://nave10.ucv.cl//alumno/preinscripcion/ofac_frame_optobli.php" target="_top"><input type="hidden" name="rut" value="17517328"></form><a href="javascript:f_envia_menu(&quot;FICHA9&quot;)" onmouseover="window.status=&#39;Asignaturas obligatorias y optativas&#39;;return(true)">Asignaturas obligatorias y optativas</a></li><li><form name="FICHA10" method="POST" action="https://nave10.ucv.cl//alumno/preinscripcion/ofac_frame_generales.php" target="_top"><input type="hidden" name="rut" value="17517328"></form><a href="javascript:f_envia_menu(&quot;FICHA10&quot;)" onmouseover="window.status=&#39;Asignaturas de formaci&amp;oacuten fundamental&#39;;return(true)">Asignaturas de formación fundamental</a></li><li><form name="FICHA11" method="POST" action="https://nave10.ucv.cl//alumno/preinscripcion/ofac_frame_consulta.php" target="_top"><input type="hidden" name="rut" value="17517328"></form><a href="javascript:f_envia_menu(&quot;FICHA11&quot;)" onmouseover="window.status=&#39;Consulta de PreinscripciÃ³n&#39;;return(true)">Consultar cursos</a></li>				</ul>			
							<li>Situación administrativa</li>
			<ul id="submenuDetalle">
			<li><form name="FICHA12" method="POST" action="https://nave10.ucv.cl//administracion/procesos/certificados/seleccionarCertificado.php" target="_top"><input type="hidden" name="ii_rut" value="17517328"></form><a href="javascript:f_envia_menu(&quot;FICHA12&quot;)" onmouseover="window.status=&#39;certificado&#39;;return(true)" id="lnk_certificados">Certificados</a></li><li><form name="FICHA13" method="POST" action="https://nave10.ucv.cl//administracion/procesos/certificados/listadoCertificadoEmitido.php" target="_top"><input type="hidden" name="ii_rut" value="17517328"></form><a href="javascript:f_envia_menu(&quot;FICHA13&quot;)" onmouseover="window.status=&#39;certificados_emitidos&#39;;return(true)">Certificados Emitidos</a></li>				
			     <li><form name="FICHA14" method="POST" action="https://nave10.ucv.cl//alumno/situacion_administrativa/alumno_problemas.php" target="_top"><input type="hidden" name="rut" value="17517328"><input type="hidden" name="cod_ua" value="todos"><input type="hidden" name="tipo_deuda" value="todos"><input type="hidden" name="estado_deuda" value="todos"><input type="hidden" name="ano" value="todos"><input type="hidden" name="periodo" value="todos"><input type="hidden" name="Buscar" value="Buscar"></form><a href="javascript:f_envia_menu(&quot;FICHA14&quot;)" onmouseover="window.status=&#39;Deudas y Sanciones&#39;;return(true)">Deudas y Sanciones</a></li>				        
			                
				
			
			</ul>			
			
		<li>Aranceles y Beneficios</li>
			<ul id="submenuDetalle">

			<li><form name="form_pagare" method="POST" action="https://nave10.ucv.cl//alumno/aranceles_beneficios/pagare/pagare.php" target="_top"></form><a href="javascript:EnviaPagare()" onmouseover="window.status=&#39;PagarÃ©&#39;;return(true)">Pagaré</a></li>
			    
				<li><form name="FICHA15" method="POST" action="https://nave10.ucv.cl//alumno/aranceles_beneficios/cuponeras/SeleccionCarrera.php" target="_top"><input type="hidden" name="rut" value="17517328"></form><a href="javascript:f_envia_menu(&quot;FICHA15&quot;)" onmouseover="window.status=&#39;Cuponeras Online&#39;;return(true)">Cuponeras Online</a></li>

				<li><form name="FICHA16" method="POST" action="https://nave10.ucv.cl//alumno/aranceles_beneficios/beneficios/InicioBeneficiosDAEAlumno.php" target="_top"><input type="hidden" name="rut" value="17517328"></form><a href="javascript:f_envia_menu(&quot;FICHA16&quot;)" onmouseover="window.status=&#39;Beneficios Estudiantiles&#39;;return(true)">Beneficios Estudiantiles</a></li>

				<li><form name="FICHA17" method="POST" action="https://nave10.ucv.cl//alumno/aranceles_beneficios/listadoPagosOnline.php" target="_top"><input type="hidden" name="rut" value="17517328"></form><a href="javascript:f_envia_menu(&quot;FICHA17&quot;)" onmouseover="window.status=&#39;Comprobantes Pagos Online&#39;;return(true)">Comprobantes Pagos Online</a></li>	

			</ul>

		<li>Solicitudes</li>
			<ul id="submenuDetalle">
						<li class="acti"><form name="FICHA18" method="POST" action="perfil.php" target="_top"><input type="hidden" name="rut" value="17517328"></form><a href="javascript:f_envia_menu(&quot;FICHA18&quot;)" onmouseover="window.status=&#39;Cambio de Foto&#39;;return(true)">Cambio de Foto</a></li>	          
			</ul>
        </ul></div><!-- FIN siderbar -->
        
        
    <div id="content">
    	<a class="print" href="javascript:window.print()">Imprimir página</a>
    	
    	<h2>Formulario de cambio de foto</h2>
				
	    
    <!-- Modificad por Alejandro Gómez por cambio de diseño <table width="75%" border="1">
        <tr> 
          <td colspan="2">Beneficios 
            <div align="center"></div></td>
          <td width="50%">&nbsp;</td>
          <td width="13%">&nbsp;</td>
          <td width="16%">&nbsp;</td>
        </tr> -->
    <!--<table width="89%" border="0" cellspacing="2" class="BordePlomo">  -->
    
	
		<table class="tablaFicha">
			<tbody><tr> 
            	<td><h3><span class="label label-default">RUT</span> 17517328-5</h3></td></tr>
            <tr><td><h3><span class="label label-default">Nombre</span> VALERIO PASQUALETTI FRANCO GIOVANNI</h3></td>
            </tr>
		</tbody></table>
	
	<form id="formLogin" class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">

              <?php 
              if(isset($_POST['submit'])) {
                echo "<script LANGUAJE=JavaScript>
                alert(\"Foto cargada exitosamente!\");
              </script>";
            } 

                            // if(isset($_GET['accion'])) {
                            //   echo "<tr>
                            //           <div class=\"msg\">El archivo ha sido eliminado satisfactoriamente.</div>
                            //         </tr>";
                            // }
            ?>         
            <div class="form-group">
            	<label for="motivo" class="control-label col-xs-3">Motivo de Cambio:</label>
            	<div class="col-xs-4">
		            <select id="motivo" class="form-control" name="motivo">
		            <br><br>
		              <option>...</option>
		              <option>No poseo fotografía</option>
		              <option>Antigüedad de fotografía</option>
		              <option>Cambio de apariencia </option>
		            </select>
		        </div>
	        </div>
            <div class="form-group">
            	<label for="motivo" class="control-label col-xs-3">Subir Foto:</label>
            	<div class="col-xs-4">
            		<input class="btn btn-md btn-default" type="file" name="imagen" />
            	</div>
           	</div>
		        <div class="form-group">
            	<label for="motivo" class="control-label col-xs-3">Contraseña Actual:</label>
            	<div class="col-xs-4">
            		<input type="password" id="ingresoPassword" name="pass" class="form-control" placeholder="Contraseña" required autofocus><br>
            	</div>
            </div>
            <div class="form-group">
              <div class="col-xs-offset-3 col-xs-9">
                <label class="checkbox-inline">
                    <input type="checkbox" value="agree">Acepto <a href="#">Terminos y condiciones</a>.
                </label>
              </div>
            </div>
            <center>
            <div class="form-group">
                <div class="col-xs-10">
            	     <button class="btn btn-lg btn-default" type="submit">Enviar</button>
                   <!-- Botón para activar modal Datos Personales -->
                    <button type="button" class="btn btn-lg btn-default" data-toggle="modal" data-target="#modalVerFotos">
                    Ver mis fotos</button>
                </div>
            </div>
            </center>

            <!-- --------------------------------------------------------------------------------------------------------------------------------------- -->            
<!-- Modal Datos personales-->

            <div class="modal fade" id="modalVerFotos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
    
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Mis fotos enviadas</h4>
                  </div>
    
                  <div class="modal-body">
                      <?php
                        ## Mostrar lista de fotos
                              //echo "Directorio de fotos:<br /><br/>";
                              $ruta = "fotos/"; // Indicar ruta
                             $filehandle = opendir($ruta); // Abrir archivos
                             while ($archivo = readdir($filehandle)) {
                              if ($archivo != "." && $archivo != "..") {
                                $tamanyo = GetImageSize($ruta . $archivo);
                                //echo "<a href='".$ruta."/".$archivo."' target='_blank'>".$archivo."</a>
                                echo "<br>
                                <img src=".$ruta.$archivo." width=\"200px\"><br><br>
                                [ <a class='elimina' href='".$_SERVER['PHP_SELF']."?eliminar=".$archivo."'>eliminar</a> ]<br>";
                              }
                            }
                              closedir($filehandle); // Fin lectura archivos
                      ?>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                  </div>
                </div>
              </div>
            </div>

            <?php

            include("Thumbnail.class.php");

            if(isset($_FILES["imagen"])) {
              $temp = $_FILES["imagen"]["tmp_name"];

              $thumb = new Thumbnail($temp);
              if($thumb->error) {
                echo $thumb->error;
              } else {
                $thumb->resize(150,170);
                                    $nombre = substr(md5(uniqid(rand())),0,10); //Nombre Aleatorio
                                    $thumb->save_jpg("fotos", $nombre);
                                  }
                                }

                        ####
                          ## Eliminar una imagen
                          ####
                                if(isset($_GET['eliminar'])){
                                  $archivo = $_GET['eliminar'];
                                  $directorio = "fotos";
                                  if(unlink($directorio.'/'.$archivo)){
                                    echo "<script LANGUAJE=JavaScript>
                                    alert(\"Foto eliminada exitosamente!\");
                                  </script>";
                                }
                              }

                          // ## Mostrar lista de fotos
                          //     echo "Directorio de fotos:<br /><br/>";
                          //     $ruta = "fotos/"; // Indicar ruta
                          //    $filehandle = opendir($ruta); // Abrir archivos
                          //    while ($archivo = readdir($filehandle)) {
                          //     if ($archivo != "." && $archivo != "..") {
                          //       $tamanyo = GetImageSize($ruta . $archivo);
                          //       echo "<a href='".$ruta."/".$archivo."' target='_blank'>".$archivo."</a>
                          //       <br>
                          //       <img src=".$ruta.$archivo." width=\"200px\"><br><br>
                          //       [ <a class='elimina' href='".$_SERVER['PHP_SELF']."?eliminar=".$archivo."'>eliminar</a> ]<br>";
                          //     }
                          //   }
                          //     closedir($filehandle); // Fin lectura archivos

                              ?>

                              <ul class="iconos">
					<!--li><a href="https://nave10.ucv.cl//documentos/manuales/docsolicitadaeco2008.pdf" class="iconoPdf" title=" ir a documentaciï¿½n solicitada" target="_blank" >Documentaciï¿½n solicitada ECO 2009</a></li>
					<li><a href="https://nave10.ucv.cl//documentos/manuales/pregfrecuenteseco2008.pdf" class="iconoPdf" title=" ir a informaciones y preguntas frecuentes" target="_blank" >Informaciones y preguntas frecuentes</a></li>
					<li><a href="https://nave10.ucv.cl//documentos/manuales/centrosatencioneco2008.pdf" class="iconoPdf" title=" ir a centro de atenciï¿½n" target="_blank" >Centros de atenciï¿½n ECO 2009</a></li-->
					<li><a href="https://nave10.ucv.cl//documentos/manuales/preguntas_frecuentes_2016.pdf" class="iconoPdf" title=" ir a informaciones y preguntas frecuentes" target="_blank">Informaciones y preguntas frecuentes</a></li>
				</ul>

                            </form>
     
        <!--<tr> 
          <td>&nbsp;</td>
          <td colspan="2"> <div align="left"> </div></td>
          <td><div align="center"> </div></td>
          <td colspan="2">&nbsp;</td>
        </tr>-->
<!--////FICHA DE BENEFICIO-->

  
    <!--<a  href =javascript:window.open("http://www.ucv.cl/p1_rector/antialone.html?page=http://www.ucv.cl/p3_admision/site/pags/20031023145416.html","vent","width=500,height=500,status=no,toolbar=no,menubar=no,location=no,scrollbars=yes,resizable=yes") >INFORMACIONES Y PREGUNTAS FRECUENTES ECO Web</a>   
    <a  href ="http://www.prensa.ucv.cl/info/index.htm" target= "_blank" onmouseover="window.status='Preguntas Frecuentes WEB';return true;">INFORMACIONES Y PREGUNTAS FRECUENTES</a>
    <a  href ="http://www.ucv.cl/p4_extension/site/pags/20060912120604.html" target= "_blank" onmouseover="window.status='Preguntas Frecuentes WEB';return true;">INFORMACIONES Y PREGUNTAS FRECUENTES</a>
    <br>  
    <br>-->
    <!--<a href='JavaScript:preguntas()'>Preguntas Frecuentes UNIVERSIS</strong></A></center>-->

		<!-- <h3>Beneficios</h3>  -->
<script language="javascript">
function formatNmb(nNmb)
{ 
    //funcion que formatea los numeros a pesos
    var sRes = ""; 
  
    for (var j, i = nNmb.length - 1, j = 0; i >= 0; i--, j++) 
     sRes = nNmb.charAt(i) + ((j > 0) && (j % 3 == 0)? ".": "") + sRes; 
    
    return sRes;  
  
        
   } 

</script>
			
	</div></div></div>	<div id="footer">
		<div class="center">
			<div class="left">
				<a class="pucv" href="http://www.pucv.cl/" title="Ir a PUCV"><span>Pontificia Universidad Católica de Valparaíso</span></a>
			</div><!-- fin div left-->
			<div class="right">
			<span class="creditos">
			¿Tiene algún problema? Envíe un email a <a href="mailto:navegador.academico@ucv.cl?subject=Ayuda:%20Navegador%20Acad%C3%A9mico" title="Escriba un correo a soporte.dsic@ucv.cl">navegador.academico@ucv.cl</a><br>
            Plataforma desarrollada por la <a href="http://dsic.ucv.cl/" title="Ir a DSIC"><strong>Dirección de Servicios de Informática y Comunicaciones DSIC</strong></a><br>Diseñado por la <a href="http://www.ead.pucv.cl/" title="Sitio de la e[ad] Escuela de Arquitectura y Diseño">e[ad] Escuela de Arquitectura y Diseño</a></span>

			</div><!-- fin div right-->
		</div><!-- fin div center-->
	</div><!-- fin div footer-->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-17267632-2']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
                            </div>

                            <!-- Bootstrap core JavaScript
      ================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> -->
  <script src="js/bootstrap.min.js"></script>

</body></html>