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

				<div class="col-md-2" style="padding-top: 25px;">
					<img src="<?php echo base_url(); ?>assets/uploads/categorias/<?php echo $categoria->botonCategoria; ?>" width="180">
				</div>
				<div class="col-md-9">

  					<div class="col-md-12" id="ctnEmpresas" style="
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

							<div class="col-md-12">
								
								<div class="col-md-12">
									<center>
									<img src="<?php echo base_url(). "assets/uploads/empresas/logo/" .$empresa->logotipo; ?>" 
								  		class="img-responsive"
								  		title="<?php echo $empresa->razonsocial; ?>"
								  		alt="<?php echo $empresa->razonsocial; ?>">
								  </center>
								  <hr>
								</div>


								<div class="col-md-12">
									<p style="text-align:center"><?php echo $empresa->descripcion; ?></p>
									<hr>
								</div>
								<div class="col-md-12">
									<p style="text-align:center;">
										<?php echo $empresa->web; ?><br>
										<?php echo $empresa->direccion; ?><br>
										<?php echo $empresa->ubicacion; ?><br>
										TEL <?php echo $empresa->telefono1; ?><br>
										<?php echo $empresa->telefono2; ?><br>
										Nombre de Contacto:<br>
										<strong><?php echo $empresa->contacto1 . " " . $empresa->apaterno; ?></strong><br>
										Cargo : <?php echo $empresa->cargo ?><br>
										Email : <?php echo $empresa->correo1; ?><br>
									</p>
								</div>

								<div class="col-md-12">
									<a href="javascript:window.history.back();" class="pull-right">
										<img src="<?php echo base_url();?>assets/img/botones/IMG__bonton_pantalla anterior.png">
									</a>
								</div>
							</div>
							<?php
								}
							}else{
								echo "<p> No existen Empresas con la Categoria seleccionada. </p>";
							}
							?>
							</div>
				</div>
		</div>

  	</div>
</div>

<?php
	}
?>
