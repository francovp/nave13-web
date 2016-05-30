<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- saved from url=(0065)https://nave10.ucv.cl/ -->
<html xmlns="http://www.w3.org/1999/xhtml"><script type="text/javascript" async="" src="./files/ga.js"></script><script type="text/javascript">window["_gaUserPrefs"] = { ioo : function() { return true; } }</script><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>Navegador Académico</title>
	
	<meta name="author" content="DSIC - PUCV">
	<meta name="Language" content="es">

	
<link rel="stylesheet" href="./css/nav-print.css" type="text/css" media="print">
<link rel="shortcut icon" type="image/x-icon" href="https://nave10.ucv.cl/imagen/favicon.ico">

<!--[if !IE]>-->
	<link rel="stylesheet" href="./css/nav-screen.css" type="text/css" media="screen">
<!--<![endif]-->

<!--[if gte IE 8]>
	<link rel="stylesheet" href="css/nav-screen.css" type="text/css" media="screen" />
<![endif]-->


<!--[if IE 8]>
	<link rel="stylesheet" href="css/nav-screen.css" type="text/css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/DataTables/demo_table_ie.css" media="screen"/>
<![endif]-->


<!--[if IE 7]>
	<link rel="stylesheet" href="css/nav-screen-ie.css" type="text/css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/DataTables/demo_table_ie.css" media="screen"/>
<![endif]-->
 

<!--[if lte IE 6]>
	<link rel="stylesheet" href="css/nav-print-ie6.css" type="text/css" media="print" />
	<link rel="stylesheet" href="css/nav-screen-ie.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/nav-screen-ie6.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/DataTables/demo_table_ie.css" type="text/css" media="screen"/>
	<script type="text/javascript" src="css/supersleight-min.js"></script>
	
<![endif]-->




	
    
    <script type="text/javascript">
     /************************************************************************/
     function esNulo(s) {
      return ((s==null) || (s.length ==0))
     }
       
     function isNumber(campo)
     {
      if (!esNulo(campo))
        {
          var inputStr = campo.value
          for (var i = 0; i < inputStr.length; i++)
            {
              var oneChar = inputStr.substring(i, i + 1)
              if (oneChar < "0" || oneChar > "9")
                  return false;
             }
          return true;
        }
      else
        {
         alert("Debe ingresar un Valor para el campo");
         return false;
        }
     }
     
     function validaRut(numero,dv)
     {
     //Esta funciÃƒÂ³n asume que los valores son distintos de ceros
     // Que la parte nÃƒÂºmerica solo contiene nÃƒÂºmeros
     // Y el DÃƒÂ­gito verificador es un nÃƒÂºmero o la letra K
     strnum=new String(numero); 
     var resto,suma,digito,factor;
     suma=0;
     factor=2;
     for (i=strnum.length - 1;i>=0 ;i--)
       {
        suma=suma + (parseInt(strnum.charAt(i)) * factor);
        factor++;
        if (factor == 8) factor=2;
       };
     resto=(suma % 11);
     
     digito = 11 - resto;
     if (digito == 10) 
        if (dv=="K" || dv=="k")
           return true
        else
           return false
     else
        if (digito==11)
           if (dv=="0")
              return true
           else
              return false
         else
           if (digito == dv)
              return true
           else
              return false;
     return true;
     }
     
     function validardatos()
     {
         var enviardatos=true;
         
         // Verifica que el Numero del RUT no sea nulo
         strRutNum= new String(document.forms[0].rut_num.value);
         if (esNulo(strRutNum))
            {
                alert("Debe ingresar un valor para el RUT");
                document.forms[0].rut_num.focus();
                return false;
            }
          else
             if (!isNumber(document.forms[0].rut_num))
               {
                alert("Debe ingresar s\u00f3lo n\u00fameros para el RUT");
                document.forms[0].rut_num.focus();                
                document.forms[0].rut_num.select();                
                return false;
               };
                
         // Verifica que el DÃƒÂ­gito Verificador del RUT no sea nulo            
         strRutDv= new String(document.forms[0].rut_dv.value);
         if (esNulo(strRutDv))
            {
                alert("Debe ingresar un valor para el D\u00edgito Verificador");
                document.forms[0].rut_dv.focus();                
                return false;
            }
         else
             if (!(isNumber(document.forms[0].rut_dv) || document.forms[0].rut_dv.value == 'k' || document.forms[0].rut_dv.value == 'K'))
               {
                alert("Debe ingresar un valor v\u00e1lido para el D\u00ed gito Verificador");
                document.forms[0].rut_dv.focus();                                
                document.forms[0].rut_dv.select();                                                
                return false;
               };
               
         // Valida que el RUT ingresado sea correcto
         if (!validaRut(document.forms[0].rut_num.value,document.forms[0].rut_dv.value))
            {
             alert("El RUT ingresado no es v\u00e1lido");
             document.forms[0].rut_num.focus();
             document.forms[0].rut_num.select();             
             return false;
            }; 
             
         // Verifica que la clave no sea nula            
         strUserPas= new String(document.forms[0].user_pas.value);
         if (esNulo(strUserPas))
            {
                alert("Debe ingresar su contrase\u00f1a");
                return false;
            }
            
         if (document.getElementById('is_texto_imagen') != null){
         	if (document.getElementById('is_texto_imagen').value == ""){	
  				alert('Debe ingresar el texto de la imagen');
  				return false;
  			}	
         }
                   
         return enviardatos;
     }
	 

	function valida_longitud(){ 
		var num_caracteres_permitidos = 14;
		var num_caracteres = document.forms[0].user_pas.value.length ;
		if (num_caracteres > num_caracteres_permitidos){ 
			alert('Ha intentado escribir una contrase\u00F1a mayor que el largo permitido, favor verifique este correcta');
		}
	} 
	   
</script>
</head>
<body>
		<div id="home">
			<div id="cajaLogin">
				<div class="fachada">&nbsp;</div>
			
				<h1><a title="Navegador Académico: Inicio" href="https://nave10.ucv.cl/#"><span>Navegador Académico</span></a></h1>
			<noscript>
				&lt;table id="login" border="0"&gt;
					&lt;tr&gt;          
						&lt;td&gt;&lt;div id="cuadroAmarillo"&gt;&lt;p&gt;Estimado Usuario(a):&lt;/p&gt;
								&lt;p&gt;Este sitio requiere para su funcionamiento el uso de JavaScript y hemos detectado que se encuetra desactivado.&lt;/p&gt;
								&lt;p&gt;Para continuar por favor vuelva a activarlo.&lt;/p&gt;
								&lt;p&gt;Si tiene dudas para habilitarlo contacte con soporte al fono 32 - 227 34 00 &amp;oacute; bien al correo 
								&lt;a href="mailto:soporte@ucv.cl&amp;amp;subject=Habilitar%20JavaScript%20en%20mi%20navegador&amp;amp;body=Estimados,%0D%0A%0D%0AEl%20Navegador%20Acad%E9mico%20me%20indica%20que%20debo%20habilitar%20mi%20JavaScript%20y%20desconozco%20como%20realizar%20esta%20tarea.%0D%0A%0D%0AMis%20datos%20de%20contacto%20son%20los%20siguientes:%0D%0A%0D%0ANombre:%20%0D%0AUnidad:%20%0D%0AAnexo:%20%0D%0A%0D%0AEsperando%20una%20pronta%20respuesta%20a%20mi%20inquietud.%0D%0A%0D%0ASaludos%20Cordiales.%0D%0A%0D%0A"&gt;soporte@ucv.cl&lt;/a&gt;.&lt;/p&gt;
							&lt;/div&gt;
						&lt;/td&gt;
					&lt;/tr&gt;
					
				&lt;/table&gt;
			</noscript> 
			<form id="formLogin" onsubmit="return validardatos();" action="https://nave10.ucv.cl/index.php" method="post" name="login" style="display: block;">
    <table border="0" id="login">
        <tbody><tr>                    
            <td width="69" class="labelHome">RUT</td>
            <td width="145">
                <input size="9" maxlength="9" type="text" name="rut_num" id="rut_num" class="inputHome" value="" tabindex="1" autocomplete="off"> 
                - 
                <input size="1" maxlength="1" type="text" name="rut_dv" class="inputDigito" value="" tabindex="2">
            </td>
            <td rowspan="7" style="vertical-align: text-top;">                
               <table border="0">
                    <tbody><tr>                        
                        <td colspan="1" style="text-align: left; width: 50%"><h2>Actualización de Foto Perfil</h2> </td>
                    </tr>
                    <tr>
                        <td style="text-align: left;vertical-align: text-top;">
                            <font color="#91822F"><b>PREGRADO</b>: Del 30 de Marzo al 13 de Abril. 
                            Ingresa</font> <a href="ingresoModuloFoto.php" target="_blank">acá</a>    
                        </td>
                    </tr>
                </tbody></table>
            </td>            
        </tr>
        <tr>
            <td class="labelHome">Contraseña</td>
            <td><input name="user_pas" id="user_pas" type="password" size="15" maxlength="15" class="inputHome" tabindex="3" onkeypress="valida_longitud()" autocomplete="off">
                								
            </td>          
        </tr>
        
        <tr>
            <td class="labelHome">
                <input type="radio" name="rb_aplicacion" value="1" tabindex="4" checked="">                   		 		
            </td>
            <td>
                <img src="./files/logo_navegador.png" width="16" height="23" alt="Gmail">	Navegador Académico                    
            </td>
        </tr>
        <tr>
            <td class="labelHome">
                <input type="radio" name="rb_aplicacion" value="2">                  			
            </td>
            <td>
                <img src="./files/logo_correo.png" width="23" height="16" alt="Gmail"> Correo de Alumnos
            </td>
        </tr>   
        <tr>
            <td></td>
            <td>								
                <input name="enviar" type="submit" class="boton" value="Ingresar" tabindex="5">										
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <a href="https://nave10.ucv.cl/perfil/perfil/paso1.php" title="ir a recuperar su contrasea" tabindex="6">¿Olvidó su contraseña?</a>
            </td>
        </tr>                    
    </tbody></table>
</form>	
</div>

<div class="center cf"> 	
    <!--  <div id="ads">
    
           <div class="banner"> 
                 <img src="/web/20160121142826/https://nave10.ucv.cl//imagen/sitio_en_mantencion.jpg" border="0" />  
           </div> 
           
            <div class="banner"> 
               <a href="/web/20160121142826/http://www.pucv.cl" target="_blank"><img src="/web/20160121142826/https://nave10.ucv.cl//imagen/banner02.jpg" border="0" /> </a>
           </div> 
         
              
    </div>  
    -->
    <!-- 
                                 <div id="content">
 
                                         <div id="noticia">
                                   <h2 class="home">Nueva Aula Virtual PUCV</h2>
                                   <p class="noticiaFecha">19 de Agosto de 2010</p>
                                   <p class="noticia"> En el marco de la implementaci&oacute;n de la Nueva Aula Virtual PUCV, invitamos a todos los docentes interesados en participar de las Formaciones Virtuales, a inscribirse en el siguiente <a href="/web/20160121142826/http://aula.virtual.ucv.cl/formularioinscripcion2010/" target="_blank" >formulario</a>. </p>
                                         </div>
  
                                 </div>      
    -->
</div>
<script type="text/javascript">
    document.login.style['display'] = "block";
</script>                     
		</div><!-- fin div home--> 		
            	
	<div id="footer">
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
    ga.src = ('https:' == document.location.protocol ? '/web/20160121142826/https://ssl' : '/web/20160121142826/http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</body></html>