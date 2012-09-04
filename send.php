<!DOCTYPE html>
<head>
  <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="DESCRIPTION" content="Tu Evaluacion | es un sitio donde usted puede realizar encuestas, estudios de mercado, cuestionarios  y obtener resultados en tiempo real y en cualquier lugar. ">
<meta name="keywords" content="control de asistencias, seguridad, control, , seguridad y control, outsourcing, safeoutsourcing,  seguridad control, encuestas, control de encuestas, seguridad de encuestas,  programas de resultados,  safe outsourcing, software de control de encuesas, software de encuestas digital, control de encuestas, encuestas on cloud, cuestionarios, encuesta en la nube, cuestionarios online" />
<meta name="OWNER" content="TuEvaluacion">
<meta name="COPYRIGHT" content="TuEvaluacion">
<meta name="AUTHOR" content="Yellowpath">
<meta http-equiv="EXPIRES" content="">
<meta http-equiv="VW96.OBJECT TYPE" content="Document">
<meta name="RATING" content="general">
<meta name="robots" content="index,follow" />
<meta name="robots" content="noodp" />
<meta name="robots" content="noydir" />

<Meta Name="distribution" Content="Global">
<meta name="REVISIT-AFTER" content="30 days">
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7, IE=9" />
<meta name="language" content="es" /> 


<meta name="viewport" content="width=device-width; initial-scale=1.0">
<link href="images/tuEvaluacion.ico" type="image/x-icon" rel="shortcut icon" />
        <link rel="stylesheet" type="text/css" href="styles/style.css" />
        <title>Tu Evaluacion-Safeoutsourcing-Send </title>
    <META HTTP-EQUIV="REFRESH" CONTENT="5;URL='http://forgivers.co/tuEvaluacion'">
    </head>

<body>	
     <div id="container">
        <header>
            
        </header>
        <div id="infoHeader">
            <p class="pHeader"></p>
        </div><!--infoHeader-->
            
            <div id="maincontainer">
                <div id="header1">
                     <a href="index.html"><img src="images/logo.png" alt="www.tuevaluacion.com.mx"  class="logo" /></a><br>
						<div id="menu">
        				<ul >
                       		  	<li><a href="index.html"><p class="pMenu">HOME</p></a></li>
           		 				<li><a href="empresa.html"><p class="pMenu">EMPRESA</p></a></li>
                 				<li ><a href="contacto.html"><p class="pMenu1">CONTACTO</p></a></li>
								
           		
   		  						</ul>
                                </div><!--menu-->
                    
                </div><!--header1-->
               <div id="princContacto">
                
                <div id="llamanos">
                        <img src="images/telefono.png" class="imgTop"/>
                        <h1 class="subtitleMidContacto">Llamanos </h1>
                        <div id="imgLlamanos">
                            
                        </div><!--imgNuestraEmpresa-->
                        <div id="textoContacto">
                            <p class="pLlamanos">Tu evaluacion.<br/>
                                                #1234 Av. Satelite <br/>
                                                Mexico, CP 20120<br/>
                                                Telefono<br/>
                                                Celular<br/>
                                                Fax<br/>
                                                E-mail<br/></p>
                        </div><!--textoContacto-->
                </div><!--llamanos-->
                <div id="linea">
                    
                </div><!--linea-->
                
                <div id="ponteContacto">
                    <img src="images/mensajes.png" class="imgPonteContacto"/>
                     <h1 class="subtitleMidContacto2"><span class="blue">Ponte </span>en contacto</h1>
                    <div id="datosContacto">
    	
                        
                   	<?php
 
 						$nombre = $_REQUEST['nombre'];
 						$mail = $_REQUEST['mail'];
						$telefono = $_REQUEST['telefono'];
                        $estado = $_REQUEST['estado'];

						$header = 'From: ' . $mail . " \r\n";
						$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
						$header .= "Mime-Version: 1.0 \r\n";
						$header .= "Content-Type: text/plain";

						$mensaje = "Este mensaje fue enviado por " . $nombre . "  su  telefono es:" . $telefono . " \r\n";
						$mensaje .= "Su e-mail es: " . $mail . " \r\n";
                        $mensaje .= "Estado: " . $estado . " \r\n";
						$mensaje .= "Mensaje: " . $_REQUEST['mensaje'] . " \r\n";
						$mensaje .= "Enviado el ".date('d-m-Y H:i:s');

						$para = 'contacto@tuEvaluacion.com.mx';
						$asunto = 'Formulario de Contacto TuEvaluacion';

						if(mail($para, $asunto, $mensaje, $header))
						  {
							  echo'<br><br><br><br><br>';
							  echo'<h3 align="center">Su mensaje a sido enviado correctamente. Gracias por contactar con nosostros.</h4>';
						  }
						else	 
					 	  {	  
						  	  echo'<br><br><br><br><br>';
						  	  echo'<h3 align="center">Error al enviar el formulario. Por favor, inténtelo de nuevo más tarde.</h3>';
						  }					    
 
					 ?>
                   </div><!--datosContacto-->
                </div><!--ponteContacto-->
                
            </div><!--princContacto-->
                
            </div><!--maincontainer-->
            
            <div id="footer">
      			
            <div id="footer1">
            
            	<p class="footter_txt">
                <BR/>
               &#169;2012, Safe Outsourcing//Todos los Derechos Reservados//Terminos//Politicas//Privacidad</p>
            
            </div><!--footer1-->
            
           
            
           
        </div><!--footer-->       
            </div><!--container-->
    </body>
</html>
