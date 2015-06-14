<style type="text/css">
  /* Space out content a bit */
body {
  padding-top: 20px;
  padding-bottom: 20px;
}

/* Everything but the jumbotron gets side spacing for mobile first views */
.header,
.marketing,
.footer {
  padding-right: 15px;
  padding-left: 15px;
}

/* Custom page header */
.header {
  padding-bottom: 20px;
  border-bottom: 1px solid #e5e5e5;
}
/* Make the masthead heading the same height as the navigation */
.header h3 {
  margin-top: 0;
  margin-bottom: 0;
  line-height: 40px;
}

/* Custom page footer */
.footer {
  padding-top: 19px;
  color: #777;
  border-top: 1px solid #e5e5e5;
}

/* Customize container */
@media (min-width: 768px) {
  .container {
    max-width: 730px;
  }
}
.container-narrow > hr {
  margin: 30px 0;
}

/* Responsive: Portrait tablets and up */
@media screen and (min-width: 768px) {
  /* Remove the padding we set earlier */
  .header,
  .footer {
    padding-right: 0;
    padding-left: 0;
  }
  /* Space out the masthead */
  .header {
    margin-bottom: 30px;
  }
  /* Remove the bottom border on the jumbotron for visual effect */
  .jumbotron {
    border-bottom: 0;
  }
}
</style>
<div class="container">
<div class="row">
  	<div class="col-md-4 pull-left">
      		<img src="<?php echo base_url(); ?>assets/img/promperu1.gif" width="250" alt="Peru Service"><br>
		</div>
    <div class="col-md-4 pull-right" style="margin-top: 19px;
  padding-left: 142px;">
      		<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/img/botones/IMG__boton_inicio.png" width="130" alt="Ir al inicio"></a>
    </div>
</div>

	<div class="row" style="background-color:red; color:white;">
		<div class="col-md-12" style="padding:10px;">
				<h4>Ingresa tus Datos</h4>
		</div>
	</div>

	<div class="row" style="background-color:red; color:white;">
	<form action="<?php echo base_url(); ?>index.php/informacion/enviar" method="post" >
		<div class="col-md-12" style="margin-top:10px;">
			<div class="col-md-12">
				<div class="col-md-6">
				  <div class="form-group">
				    <label for="txtNombre">Nombre:</label>
				    <input type="text" required="required" class="form-control" id="txtNombre" name="txtNombre" placeholder="Ingrese su Nombre">
				  </div>
				</div>
				<div class="col-md-6">
				  <div class="form-group">
				    <label for="txtPais">Pa&iacute;s:</label>
				    <input type="text" required="required" class="form-control" id="txtPais" name="txtPais" placeholder="Ingrese Pa&iacute;s">
				  </div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="col-md-6">
				  <div class="form-group">
				    <label for="txtNombreEmpresa">Empresa:</label>
				    <input type="text" required="required" class="form-control" id="txtNombreEmpresa" name="txtNombreEmpresa" placeholder="Ingrese Nombre de Empresa">
				  </div>
				</div>
				<div class="col-md-6">
				  <div class="form-group">
				    <label for="txtCorreo">Correo:</label>
				    <input type="email" required="required" class="form-control" id="txtCorreo" name="txtCorreo" placeholder="Ingrese su correo">
				  </div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="col-md-6">
				  <div class="form-group">
				    <label for="txtCargo">Cargo:</label>
				    <input type="text" required="required" class="form-control" id="txtCargo" name="txtCargo" placeholder="Ingrese su Cargo">
				  </div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="col-md-12">
					<label for="txtConsulta">Consulta:</label>
					<textarea class="form-control" required="required" id="txtConsulta" name="txtConsulta" rows="4"></textarea>
				</div>
			</div>

			<div class="col-md-12">
				<div class="col-md-12" style="padding:15px;color:black;">
					<button type="submit" class="btn pull-right">Enviar Informaci&oacute;n</button>
				</div>
			</div>

		</div>

		</form>
	</div>



</div>