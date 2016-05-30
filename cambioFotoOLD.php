  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

  <html xmlns="http://www.w3.org/1999/xhtml">

  <head>

  	<meta http-equiv="X-UA-Compatible" content="IE=7" />
  	<title>Cambio de foto de Navegador Acad&eacute;mico - Pontificia Universidad Cat&oacute;lica de Valpara&iacute;so</title>
  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  	<meta name="author" content="DSIC - PUCV" />
  	<meta name="Language" content="es" />

    <link rel="stylesheet" href="croppie/croppie.css" />
    <script src="croppie/croppie.js"></script>
    <script src="jquery/dist/jquery.min.js"></script>

    <script type="text/javascript">
      var c = new Croppie(document.getElementById('item'), opts);
    // call a method
    c.method(args);
  </script>

  <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  
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


  </SCRIPT>
</head>

<body>
  <center>
    <div id="home">
     <div id="cajaLogin">
      <div class="fachada">&nbsp;</div>
      <div class="site-wrapper">
        <div class="site-wrapper-inner">
          <div class="cover-container">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-18">

                <h2>Formulario de cambio de foto</h2>

                  <table class="tablaFicha">
                    <tbody><tr> 
                      <td class="label">RUT</td>
                      <td class="w90">17517328-5</td>
                    </tr>
                    <tr>
                      <td class="label">Nombre</td>
                      <td class="w90">VALERIO PASQUALETTI FRANCO GIOVANNI</td>
                    </tr>
                  </tbody></table>

                  <form id="formLogin" class="form-horizontal" action="" method="post" enctype="multipart/form-data">

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
                      </select><br>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="motivo" class="control-label col-xs-2">Subir Foto:</label>
                    <div class="col-xs-4">
                      <input class="btn btn-md btn-default" type="file" name="imagen" />
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-xs-offset-3 col-xs-9">
                      <label class="checkbox-inline">
                        <input type="checkbox" value="agree">  Accepto <a href="#">Terminos y condiciones</a>.
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="motivo" class="control-label col-xs-3">Contraseña Actual:</label>
                    <div class="col-xs-4">
                      <input type="password" id="ingresoPassword" name="pass" class="form-control" placeholder="Contraseña" required autofocus><br>
                    </div>
                  </div>
                  <center>
                    <button class="btn btn-lg btn-default" type="submit">Enviar</button><br><br>
                  </center>

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

                            </form>
                          </div>
                        </div>
                      </div> 
                    </div><!-- fin div cajaLogin-->
                  </div><!-- fin div home--> 		
                </div>
              </div>
            </div>
            <div id="footer">

            </div><!-- fin div footer-->
          </center>
        </body>
        </html>
