  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

  <html xmlns="http://www.w3.org/1999/xhtml">

  <head>

  	<meta http-equiv="X-UA-Compatible" content="IE=7" />
  	<title>Cambio de foto de Navegador Acad&eacute;mico - Pontificia Universidad Cat&oacute;lica de Valpara&iacute;so</title>
  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  	<meta name="author" content="DSIC - PUCV" />
  	<meta name="Language" content="es" />
  	

    <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery.Jcrop.js"></script>
  <link rel="stylesheet" href="demo_files/main.css" type="text/css" />
  <link rel="stylesheet" href="demo_files/demos.css" type="text/css" />
  <link rel="stylesheet" href="../css/jquery.Jcrop.css" type="text/css" />

    <link rel="stylesheet" href="croppie/croppie.css" />
    <script src="croppie/croppie.js"></script>
    <script src="jquery/dist/jquery.min.js"></script>

    <script type="text/javascript">
      var c = new Croppie(document.getElementById('item'), opts);
    // call a method
    c.method(args);
  </script>

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

<!-- Jcrop -->
  <script type="text/javascript">

  $(function(){

    $('#cropbox').Jcrop({
      aspectRatio: 1,
      onSelect: updateCoords
    });

  });

  function updateCoords(c)
  {
    $('#x').val(c.x);
    $('#y').val(c.y);
    $('#w').val(c.w);
    $('#h').val(c.h);
  };

  function checkCoords()
  {
    if (parseInt($('#w').val())) return true;
    alert('Please select a crop region then press submit.');
    return false;
  };

</script>
<style type="text/css">
  #target {
    background-color: #ccc;
    width: 500px;
    height: 330px;
    font-size: 24px;
    display: block;
  }


</style>

</head>

<body>

  <div id="home">
   <div id="cajaLogin">
    <div class="fachada">&nbsp;</div>

    <form id="formLogin" action="" method="post" enctype="multipart/form-data">
      <h1><a title="Cambio de foto: Inicio" href="#"><span>Cambio de Foto</span></a></h1> 
      <table id="login" border="0">
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
      <tr>         
        <td width="69" class="labelHome" style="vertical-align:bottom;"><br />
          <br />Subir foto </td>
          <td width="145" style="vertical-align:bottom;"><br />
            <br />
                      <input type="file" name="imagen" />
                    </td>             </tr> 
                    <tr>
                      <td></td>
                      <td style="vertical-align:top;" ><input name="enviar" type="submit" class="boton" value="Enviar" /></td>
                    </tr>  
                  </table>

                  <?php
                  /**
                   * Jcrop image cropping plugin for jQuery
                   * Example cropping script
                   * @copyright 2008-2009 Kelly Hallman
                   * More info: http://deepliquid.com/content/Jcrop_Implementation_Theory.html
                   */

                  if(isset($_POST['recortar'])) {
                  {
                    $targ_w = $targ_h = 150;
                    $jpeg_quality = 90;
                    
                    $ruta = "fotos/"; // Indicar ruta
                     $filehandle = opendir($ruta); // Abrir archivos
                     if($archivo = readdir($filehandle)){
                        if ($archivo != "." && $archivo != "..") {
                          $src = $archivo;
                        }
                      }
                      closedir($filehandle); // Fin lectura archivos
                    $img_r = imagecreatefromjpeg($src);
                    $dst_r = ImageCreateTrueColor( $targ_w, $targ_h );

                    imagecopyresampled($dst_r,$img_r,0,0,$_POST['x'],$_POST['y'],
                    $targ_w,$targ_h,$_POST['w'],$_POST['h']);

                    header('Location: cambioFoto.php');
                    imagejpeg($dst_r,null,$jpeg_quality);

                    exit;
                  }

                  /** Para subir y guardar imagen 
                  */
                  include("Thumbnail.class.php");

                  if(isset($_FILES["imagen"])) {
                    $temp = $_FILES["imagen"]["tmp_name"];

                    $target_path = "fotos/";
                    $target_path = $target_path . basename( $temp ); if(move_uploaded_file($temp, $target_path)) { echo "El archivo ". basename( $temp). " ha sido subido";
                    } else{
                      echo "Ha ocurrido un error, trate de nuevo!";
                    }
                    
                    $thumb = new Thumbnail($temp);
                    // if($thumb->error) {
                    //   echo $thumb->error;
                    // } else {
                    //   $thumb->resize(150,170);
                    //         //$nombre = substr(md5(uniqid(rand())),0,10); //Nombre Aleatorio
                    //         $thumb->save_jpg("fotos", "foto");
                    //       }
                    //     }

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

                  ## Mostrar lista de fotos
                      echo "Directorio de fotos:<br /><br/>";
                      $ruta = "fotos/"; // Indicar ruta
                     $filehandle = opendir($ruta); // Abrir archivos
                     while($archivo = readdir($filehandle)){
                        if ($archivo != "." && $archivo != "..") {
                          $tamanyo = GetImageSize($ruta . $archivo);
                          echo "<a href='".$archivo."' target='_blank'>".$archivo."</a>
                            <br>
                              <img src=".$ruta.$archivo." id=\"cropbox\" width=\"300px\"><br><br>";
                          ?>
                            <!-- This is the form that our event handler fills -->
                            <form action="cambioFoto.php" method="post" onsubmit="return checkCoords();">
                              <input type="hidden" id="x" name="x" />
                              <input type="hidden" id="y" name="y" />
                              <input type="hidden" id="w" name="w" />
                              <input type="hidden" id="h" name="h" />
                              <input type="submit" name="recortar" value="Recortar" class="btn btn-large btn-inverse" />
                            </form>
                          <?php
                           echo "[ <a class='elimina' href='".$_SERVER['PHP_SELF']."?eliminar=".$archivo."'>eliminar</a> ]<br>";
                        }
                      }
                      closedir($filehandle); // Fin lectura archivos

                    ?>

                  </form>

                </div><!-- fin div cajaLogin-->
              </div><!-- fin div home--> 		

              <div id="footer">

              </div><!-- fin div footer-->

            </body>
            </html>
