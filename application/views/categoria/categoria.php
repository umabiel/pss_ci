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
          <table border="0" width="100%" id="tabla">    
                  <tbody>

          <?php
          if ($categoria_detalle) {
            
          
            foreach ($categoria_detalle->result() as $detalle) {
          ?>
                    <tr>
                        <td width="20%"><img src="<?php echo base_url(); ?>assets/img/item/<?php echo $detalle->icono; ?>" width="80"></td>
                        <td width="80%" align="left"><?php echo $detalle->descripcion; ?></td>
                    </tr>
          <?php
            }
          }else{
            echo "Sin descripcion";
          }
          ?>
              </tbody>
          </table>
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
