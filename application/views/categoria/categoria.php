<div class="container">
	<style type="text/css">
	.col-lg-4 {
	  margin-bottom: 20px;
	  text-align: center;
	}
	h2 {
	  font-weight: normal;
	}
	.col-lg-4 p {
	  margin-right: 10px;
	  margin-left: 10px;
	}

	.oculto{
		display: none;
	}

	.mostrar{
		display: block;
	}

	</style>
<?php
	foreach ($categoria->result() as $categoria) {
?>
<div class="row">
		<img src="<?php echo base_url(); ?>assets/uploads/categorias/<?php echo $categoria->cabecera; ?>" width="100%" height="30" alt="" class="">
</div>

<div class="row">
  	<div class="col-md-4 pull-left">
      		<img src="<?php echo base_url(); ?>assets/img/promperu1.gif" width="250" alt="Peru Service"><br>
		</div>
    <div class="col-md-4 pull-right" style="margin-top: 19px;
  padding-left: 142px;">
      		<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/img/botones/IMG__boton_inicio.png" width="130" alt="Ir al inicio"></a>
    </div>
</div>

<div class="row" style="background: url(<?php echo base_url(); ?>assets/uploads/categorias/<?php echo $categoria->fondo; ?>);  background-size: cover;
  background-position: center;">
		<div class="col-xs-12 col-md-12">
		<div class="col-md-12" style="padding-top: 25px;">
				<div class="col-md-2" style="padding-top: 25px;padding-left: 25px;">
					<img src="<?php echo base_url(); ?>assets/uploads/categorias/<?php echo $categoria->botonCategoria; ?>" width="180">
				</div>
				<div class="col-md-9">
  					<div id="cntDetalleCategoria" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mostrar"   style="
					background-color: white;
					padding-left: 111px;
	  			padding-top: 29px;
	  			margin-bottom: 28px;
	  			border-radius: 0 15px 15px;
	  			-webkit-box-shadow: 6px 7px 15px -2px rgba(0,0,0,0.47);
					-moz-box-shadow: 6px 7px 15px -2px rgba(0,0,0,0.47);
					box-shadow: 6px 7px 15px -2px rgba(0,0,0,0.47);
  			" > 

  				<?php if ($categoria->id == 1) { ?>
					     	<table border="0" width="100%" id="tabla">   	
               		<tbody>
               			<tr>
	                      <td><img src="<?php echo base_url(); ?>assets/img/item/I__icono_trayectoria.png" width="80"></td>
	                      <td>Empresas con<font size="+3"> 20 años</font> de existencia.</td></tr>
	                      <tr>
	                      <td><img src="<?php echo base_url(); ?>assets/img/item/I__icono_trayectoria.png" width="80"></td>
	                      <td><font size="+3">+300 empresas</font> formales y
	                      30,000 programadores de sistemas.</td>
	                      </tr><tr>
	                      <td><img src="<?php echo base_url(); ?>assets/img/item/I__icono_moneda.png" width="80"></td>
	                      <td><font size="+3">Exportaciones </font>por <font size="+3">U$$ 37 millones.</font></td></tr>
	                      <tr>
	                      <td><img src="<?php echo base_url(); ?>assets/img/item/I__icono_atencionalcliente.png" width="80"></td>
	                      <td>Competitividad regional por estructura de costos diferenciados.</td>
	                      </tr><tr>
	                      <td height="50px"><img src="<?php echo base_url(); ?>assets/img/item/I__icono_exportacion.png" width="81"></td>
	                      <td>Empresas con Estandares de calidad.</td>
	              		</tr>
              		</tbody>
              	</table>
          <?php } elseif ($categoria->id == 2) { ?>

									<table border="0" width="100%" id="tabla">   	
                   		<tbody><tr>
                        <td><img src="<?php echo base_url(); ?>assets/img/item/I__icono_trayectoria.png" width="80"></td>
                        <td>Empresas con<font size="+3"> 8 años</font> de existencia.</td></tr>
                        <tr><td><img src="<?php echo base_url(); ?>assets/img/item/I__icono_trayectoria.png" width="80"></td>
                        <td><font size="+3">+08 </font> empresas formales y
                        +40,000 teleoperadores.</td>
                        </tr><tr><td><img src="<?php echo base_url(); ?>assets/img/item/I__icono_moneda.png" width="80"></td>
                        <td>Exportaciones por <font size="+3">U$$ 178 millones.</font></td></tr>
                        <tr><td><img src="<?php echo base_url(); ?>assets/img/item/I__icono_calidad.png" width="80"></td>
                        <td>Las empresas con estándares de calidad.</td>
                        </tr><tr><td><img src="<?php echo base_url(); ?>assets/img/item/I__icono_internacional.png" width="81"></td>
                        <td>Idioma y acento neutro, internacionalizable para países hispanohablantes.</td>
                        </tr><tr><td><img src="<?php echo base_url(); ?>assets/img/item/I__icono_atencionalcliente.png" width="81"></td>
                        <td>y Buena aptitud de atención al cliente.</td>
                	</tr></tbody></table>

          <?php } elseif ($categoria->id == 3) { ?>

									<table border="0" width="100%" id="tabla">   	
                   		<tbody><tr>
                        <td><img src="<?php echo base_url(); ?>assets/img/item/I__icono_trayectoria.png" width="80"></td>
                        <td>Empresas con<font size="+3"> 20 años</font> de existencia.</td>
                        </tr>
                        <tr>
                        <td><img src="<?php echo base_url(); ?>assets/img/item/I__icono_trayectoria.png" width="80"></td>
                        <td><font size="+3">109</font> empresas
                        formales.</td>
                        </tr><tr>
                        <td><img src="<?php echo base_url(); ?>assets/img/item/I__icono_moneda.png" width="80"></td>
                        <td><font size="+3">Exportaciones </font>por <font size="+3">U$$ 20 millones.</font></td>
                        </tr>
                        <tr>
                        <td><img src="<?php echo base_url(); ?>assets/img/item/I__icono_autor.png" width="80"></td>
                        <td>Autores noveles reconocidos como promesas<br> literariaspor medios especializados.</td>
                        </tr><tr>
                        <td><img src="<?php echo base_url(); ?>assets/img/item/I__icono_foco.png" width="81"></td>
                        <td>Riqueza cultural(historia, costumbres ancestrales,<br> narrativa oral amazonica y andina) 
                        son el insumo<br> para la creación de contenidos únicos y de calidad.</td>
                        </tr>
                        <tr>
                        <td><img src="<?php echo base_url(); ?>assets/img/item/I__icono_exportacion.png" width="81"></td>
                        <td><font size="+3">55% </font>de la cartera es especializada en publicaciones para niños.</td>
                        </tr>
                	</tbody></table>

          <?php } elseif ($categoria->id == 4) { ?>
<table border="0" width="70%" id="tabla">   	
                   		<tbody><tr>
                        <td><img src="<?php echo base_url(); ?>assets/img/item/I__icono_trayectoria.png" width="80"></td>
                        <td>Empresas con<font size="+3"> +15 años</font> de existencia.</td></tr>
                        <tr><td><img src="<?php echo base_url(); ?>assets/img/item/I__icono_foco.png" width="80"></td>
                        <td><font size="+3">109</font> conceptos peruanos.</td>
                        </tr><tr><td><img src="<?php echo base_url(); ?>assets/img/item/I__icono_billetes.png" width="80"></td>
                        <td><font size="+3">Exportaciones </font>por U$$ 62 millones.</td></tr>
                        <tr><td><img src="<?php echo base_url(); ?>assets/img/item/I__icono_comida.png" width="80"></td>
                        <td>El<font size="+3"> 65% </font>de los conceptos peruanos son de gastronomia.</td>
                        </tr><tr><td><img src="<?php echo base_url(); ?>assets/img/item/I__icono_internacional.png" width="81"></td>
                        <td>PERU: "Mejor destino Culinario del Mundo" <br>reconocido por el World Travel Award</td>
                        </tr><tr><td><img src="<?php echo base_url(); ?>assets/img/item/I__icono_calidad.png" width="81"></td>
                        <td>Las empresas exportadoras con estándares de calidad</td>
                	</tr></tbody></table>

          <?php } elseif ($categoria->id == 5) { ?>
<table border="0" width="70%" id="tabla">   	
                   		<tbody><tr>
                        <td><img src="<?php echo base_url(); ?>assets/img/item/I__icono_trayectoria.png" width="80"></td>
                        <td>Empresas con más de <font size="+3"> 25 años</font> de existencia.</td></tr>
                        <tr><td><img src="<?php echo base_url(); ?>assets/img/item/I__icono_internacional.png" width="80"></td>
                        <td>Experiencia para atender al mercado internacional.</td>
                        </tr><tr><td><img src="<?php echo base_url(); ?>assets/img/item/I__icono_moneda.png" width="80"></td>
                        <td>Equipos modernos y la tecnologia mas avanzada<br> de la Región</td></tr>
                        <tr><td><img src="<?php echo base_url(); ?>assets/img/item/I__icono_equipos.png" width="80"></td>
                        <td>Con estándares de calidad internacional (ISO<br> 9001:2008) y de gestión ambiental (ISO 14000)</td>
                        </tr><tr><td><img src="<?php echo base_url(); ?>assets/img/item/I__icono_estandardecalidad.png" width="81"></td>
                        <td>Capacidad Instalada para atender al mercado <br>internacional</td>
                	</tr></tbody></table>

          <?php } elseif ($categoria->id == 6) { ?>
									<table border="0" width="100%" id="tabla">   	
                   		<tbody><tr>
                        <td><img src="<?php echo base_url(); ?>assets/img/item/I__icono_juego.png" width="80"></td>
                        <td><font size="+3"> 20 </font> empresas dedicadas a los videojuegos.</td></tr>
                        <tr><td><img src="<?php echo base_url(); ?>assets/img/item/I__icono_juego.png" width="80"></td>
                        <td>El primer estudio Lationamericano en publicar<br> un videojuego para PS Vita con 
                        fondos propios<br> es peruano.</td>
                        </tr><tr><td><img src="<?php echo base_url(); ?>assets/img/item/I__icono_exportacion.png" width="80"></td>
                        <td>Exportaciones a mercadsos de America del norte<br> y del Sur.</td></tr>
                        <tr><td><img src="<?php echo base_url(); ?>assets/img/item/I__icono_trayectoria.png" width="80"></td>
                        <td><font size="+3">76%</font> de las empresas peruanas estan especializadas<br> en desarrollo de juegos para <font size="+3">dispositivos móviles.</font></td>
                        </tr><tr><td><img src="<?php echo base_url(); ?>assets/img/item/I__icono_internacional.png" width="81"></td>
                        <td>Diferenciación para desarrollo de contenidos en <br>tretenimiento gracias a nuestra cultura milenaria.</td>
                	</tr></tbody></table>

          <?php } elseif ($categoria->id == 7) { ?>
<table border="0" width="70%" id="tabla">   	
                   		<tbody><tr>
                        <td><img src="<?php echo base_url(); ?>assets/img/item/I__icono_trayectoria.png" width="80"></td>
                        <td>------<font size="+3"> Información referencial</font> ----------------</td></tr>
                        <tr><td><img src="<?php echo base_url(); ?>assets/img/item/I__icono_trayectoria.png" width="80"></td>
                        <td><font size="+3">+300 empresas</font> formales y
                        30,000 programadores de sistemas.</td>
                        </tr><tr><td><img src="<?php echo base_url(); ?>assets/img/item/I__icono_moneda.png" width="80"></td>
                        <td><font size="+3">Exportaciones </font>por <font size="+3">U$$ 37 millones.</font></td></tr>
                        <tr><td><img src="<?php echo base_url(); ?>assets/img/item/I__icono_atencionalcliente.png" width="80"></td>
                        <td>Competitividad regional por estructura de costos diferenciados.</td>
                        </tr><tr><td><img src="<?php echo base_url(); ?>assets/img/item/I__icono_exportacion.png" width="81"></td>
                        <td>Empresas con Estandares de calidad.</td>
                	</tr></tbody></table>
          
          <?php } elseif ($categoria->id == 8) { ?>
										<table border="0" width="100%" id="tabla">
                   		<tbody><tr>
                        <td><img src="<?php echo base_url(); ?>assets/img/item/I__icono_trayectoria.png" width="80"></td>
                        <td>------<font size="+3"> Información referencial</font> ----------------</td></tr>
                        <tr><td><img src="<?php echo base_url(); ?>assets/img/item/I__icono_trayectoria.png" width="80"></td>
                        <td><font size="+3">+300 empresas</font> formales y
                        30,000 programadores de sistemas.</td>
                        </tr><tr><td><img src="<?php echo base_url(); ?>assets/img/item/I__icono_moneda.png" width="80"></td>
                        <td><font size="+3">Exportaciones </font>por <font size="+3">U$$ 37 millones.</font></td></tr>
                        <tr><td><img src="<?php echo base_url(); ?>assets/img/item/I__icono_atencionalcliente.png" width="80"></td>
                        <td>Competitividad regional por estructura de costos diferenciados.</td>
                        </tr><tr><td><img src="<?php echo base_url(); ?>assets/img/item/I__icono_exportacion.png" width="81"></td>
                        <td>Empresas con Estandares de calidad.</td>
                	</tr></tbody></table>
          <?php } elseif ($categoria->id == 9) { ?>

          <?php } ?>
            	<a class="pull-right" href="#" id="btnShowEmpresas" ><img src="<?php echo base_url(); ?>assets/img/botones/IMG__boton_conocelos.png" width="120" alt="Concelos"></a>
  					</div>

  					<div class="col-md-12 oculto" id="ctnEmpresas" style="
					background-color: white;
					padding-left: 25px;
	  			padding-top: 29px;
	  			margin-bottom: 28px;
	  			border-radius: 0 15px 15px;
	  			-webkit-box-shadow: 6px 7px 15px -2px rgba(0,0,0,0.47);
					-moz-box-shadow: 6px 7px 15px -2px rgba(0,0,0,0.47);
					box-shadow: 6px 7px 15px -2px rgba(0,0,0,0.47);
					max-height: 550px;
					overflow-x: hidden;
  			">
  						<?php
							if ($empresas) {
								foreach ($empresas->result() as $empresa) {
							?>
								  <a style="display: inline-block; height:150px; width:140px;" 
								  	class="btn btn-default" 
								  	href="<?php echo base_url() . "index.php/empresa/view/" . $empresa->id . "/" . $categoria->id; ?>" 
								  	role="button">
								  	<img style="margin: 0 auto;" src="<?php echo base_url(). "assets/uploads/empresas/logo/" .$empresa->logotipo; ?>" 
								  		class="img-responsive"
								  		title="<?php echo $empresa->razonsocial; ?>"
								  		alt="<?php echo $empresa->razonsocial; ?>"
								  		>
								  </a>
							<?php
								}
							}else{
								echo "<p> No existen Empresas con la Categoria seleccionada. </p>";
							}
							?>
								<a href="<?php echo base_url();?>index.php/informacion" class="pull-right">
									<img src="<?php echo base_url();?>assets/img/botones/IMG__boton_enviar informacion.png">
								</a>
							</div>
				</div>
		</div>
  	</div>
</div>

<?php
	}
?>
