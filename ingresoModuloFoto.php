  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

  <html xmlns="http://www.w3.org/1999/xhtml">

  <head>

  	<meta http-equiv="X-UA-Compatible" content="IE=7" />
  	<title>Matr&iacute;cula en l&iacute;nea - Pontificia Universidad Cat&oacute;lica de Valpara&iacute;so</title>
  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  	<meta name="author" content="DSIC - PUCV" />
  	<meta name="Language" content="es" />
  	

  <link rel="stylesheet" href="css/nav-print.css" type="text/css" media="print" />
  <link rel="shortcut icon" type="image/x-icon" href="imagen/favicon.ico" />

  <!--[if !IE]>-->
  	<link rel="stylesheet" href="css/nav-screen.css" type="text/css" media="screen" />
  <!--<![endif]-->

  <!--[if IE 8]>
              <link rel="stylesheet" href="css/nav-screen.css" type="text/css" media="screen" />
  <![endif]-->

  <!--[if IE 7]>
              <link rel="stylesheet" href="css/nav-screen-ie.css" type="text/css" media="screen" />
  <![endif]-->
   

  <!--[if lte IE 6]>
  	<link rel="stylesheet" href="css/nav-print-ie6.css" type="text/css" media="print" />
  	<link rel="stylesheet" href="css/nav-screen-ie.css" type="text/css" media="screen" />
  	<link rel="stylesheet" href="css/nav-screen-ie6.css" type="text/css" media="screen" />
  	<script type="text/javascript" src="css/supersleight-min.js"></script>
  <![endif]-->
  <script type="text/javascript">
  /* comentado para evitar que se afecten las estadÃ­sticas de google analytics de matricula CS.
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-17267438-1']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  */
  </script>
      
      <SCRIPT LANGUAJE=JavaScript>
      
      
  /*====================================================================
  Modificada por:      Eduardo Gï¿½mez
  Fecha Modificaciï¿½n : Viernes 13 de junio, 
  Comentario:          Se agrega una funcion en javascript que permite determinar la 
              version del navegador. Esto debido a que la validacion de no permitir notas pendintes 
              no se realiza correctamente. Esto ocurre solo con una version de Netscape inferior a 6
              y para los cursos cuyo tipo de evaluacion es conceptual (se usa el objeto ComboBox que 
              es donde reside el error).
              La siguiente funciï¿½n abre una ventana, cuando el Navegador(Explorer, Netscape)
              del cliente no es compatible con algunas pginas del Navegador Acadï¿½mico.
  =====================================================================*/               
      function loadpopunder()
      {
         // width=400,height=450
        win2=window.open(popunder,"ventana","width=320,height=200,scrollbars=no,menubar=no,location=no,resizable=no")
         win2.blur()
         win2.focus()
      }
      
      /*====================================================================
  OBJETO: o_Navegador
  DESC  : Crea un objeto que permitira ver la version del navegador. En el
          atributo standar se puede restringir aun mï¿½s sobre la versiï¿½n.
  =====================================================================*/           

    function o_Navegador() 
    {
      this.nombre = navigator.appName;
      this.iniciar = iniciar;
      this.IE = this.nombre.toUpperCase().indexOf('MICROSOFT') >=0;
      this.NS = this.nombre.toUpperCase().indexOf('NETSCAPE') >=0;
      this.OP = this.nombre.toUpperCase().indexOf('OPERA') >= 0;
      this.XX = !this.IE && !this.NS && !this.OP;
      this.version = this.iniciar();
      this.Verent = parseInt(this.version);
      this.standard = (this.IE && this.Verent >=4) || (this.NS &&
      this.Verent >5)
  /* =================================================================
  FUNCION: iniciar
  ARGS: ninguno.
  RETURN: nada
  DESCR: Inicializa los valores del objeto
  ================================================================= */
       function iniciar() 
  	 {
         var ver = navigator.appVersion;
         if(ver+"" != "NaN")
         if (this.IE)
         {
           ver.match(/(MSIE)(\s*)([0-9].[0-9]+)/ig);
           ver = RegExp.$3;
         }
         return ver;
       } //Termina la funcion iniciar el objeto
    }//Termina la definiciÃ³n del objeto
    visita = new o_Navegador();
         
         
       if (visita.standard == false)                
    {    
      //Comentado por Marcelo Aranda al 23/01/2012 para evitar problema JS de funciï¿½n que no existe.
      //loadpopunder()

    }  
       
       
       
       /************************************************************************/
       function esNulo(s)
       {
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
       //Esta funcin asume que los valores son distintos de ceros
       // Que la parte nmerica solo contiene nmeros
       // Y el Dgito verificador es un nmero o la letra K
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
                  
           // Verifica que el DÃ­gito Verificador del RUT no sea nulo            
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
                     
           return enviardatos;
       }
     
     function f_envia_paso1(ai_valor)
     {
         document.forms.CAMBIO_CONTRASEA.gi_viene_de.value  = ai_valor;
         document.forms.CAMBIO_CONTRASEA.submit();   
     }
     
  </SCRIPT>
  </head>


  <body>

  		<div id="home">
  			<div id="cajaLogin">
  				<div class="fachada">&nbsp;</div>

  				<form id="formLogin" onSubmit="return validardatos();" action="cambioFoto.php" method="post" name="login">
  					<h1><a title="Matr&iacute;cula en l&iacute;nea: Inicio" href="#"><span>Matr&iacute;cula en l&iacute;nea</span></a></h1> 
  	            	            	
  	            	<table id="login" border="0">
  							<tr>         
   								<td width="69" class="labelHome" style="vertical-align:bottom;"><br />
  							  <br />RUT </td>
  								<td width="145" style="vertical-align:bottom;"><br />
  								  <br /><input size="9" maxlength="9" type="text" name="rut_num" class="inputHome" /> - <input size="1" maxLength="1" type="text" name="rut_dv" class="inputDigito" />
  							  </td>							</tr>
  			 				<tr>
  								<td width="69" class="labelHome" style="vertical-align:bottom;">Contrase&ntilde;a</td>
  								<td><input name="user_pas" type="password" size="15" maxlength="15" class="inputHome" /></td>
  	
  							</tr>		
  							<tr>
  	                        	<td></td>
  								<td style="vertical-align:top;" ><input name="enviar" type="submit" class="boton" value="Ingresar" /></td>
  							</tr>  
  					</table>
  			</form>	

  			</div><!-- fin div cajaLogin-->
  		</div><!-- fin div home--> 		
              	
  	<div id="footer">
  		
  	</div><!-- fin div footer-->

  </body>
  </html>
