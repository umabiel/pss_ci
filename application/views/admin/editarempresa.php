<?php 
  $empresa = $empresa->result()[0];
  // echo "<pre>",print_r($empresa),"</pre>"; 
?>
<form class="form-horizontal" enctype="multipart/form-data" id="frmNuevaEmpresa" action="<?php echo base_url() . "index.php/admin/guardarempresa"; ?>" method="post">
  <div class="form-group">
    <label for="txtRucEmpresa" class="col-sm-3 control-label">RUC</label>
    <div class="col-sm-9">
      <input type="hidden" id="txtEmpresaId" name="txtEmpresaId" value="<?php echo $empresa->id; ?>">
      <input type="text" class="form-control" id="txtRucEmpresa" name="txtRucEmpresa" placeholder="Numero RUC de la Empresa" value="<?php echo $empresa->ruc; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="cmbCategoriaEmpresa" class="col-sm-3 control-label">Categoria</label>
    <div class="col-sm-9">
      <select class="form-control" id="cmbCategoriaEmpresa" name="cmbCategoriaEmpresa">
      	<option value=""> - Seleccione la Categoria - </option>
      	<?php
					foreach ($categorias->result() as $categoria) {
				?>
					<option value="<?php echo $categoria->id; ?>" <?php echo ($categoria->id == $empresa->categoria_id) ? "selected" : ""; ?> ><?php echo $categoria->categoria; ?></option>
				<?php
					}
				?>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="txtRazonSocialEmpresa" class="col-sm-3 control-label">Raz&oacute;n Social</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="txtRazonSocialEmpresa" name="txtRazonSocialEmpresa" placeholder="Nombre de la Raz&oacute;n Social" value="<?php echo $empresa->razonsocial; ?>" >
    </div>
  </div>
  <div class="form-group">
    <label for="txtNombreComercialEmpresa" class="col-sm-3 control-label">Nombre Comercial</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="txtNombreComercialEmpresa" name="txtNombreComercialEmpresa" placeholder="Nombre Comercial" value="<?php echo $empresa->razonsocial; ?>" >
    </div>
  </div>
  <div class="form-group">
    <label for="txtWebEmpresa" class="col-sm-3 control-label">Pagina Web</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="txtWebEmpresa" name="txtWebEmpresa" placeholder="http://www.empresa.com" value="<?php echo $empresa->web; ?>" >
    </div>
  </div>
  <div class="form-group">
    <label for="txtNombreContactoEmpresa" class="col-sm-3 control-label">Nombre Contacto</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="txtNombreContactoEmpresa" name="txtNombreContactoEmpresa" placeholder="Nombre Contacto" value="<?php echo $empresa->razonsocial; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="txtAPaternoContactoEmpresa" class="col-sm-3 control-label">Apellido Paterno Contacto</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="txtAPaternoContactoEmpresa" name="txtAPaternoContactoEmpresa" placeholder="Apellido Paterno Contacto" value="<?php echo $empresa->apaterno; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="txtAMaternoContactoEmpresa" class="col-sm-3 control-label">Apellido Materno Contacto</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="txtAMaternoContactoEmpresa" name="txtAMaternoContactoEmpresa" placeholder="Apellido Materno Contacto" value="<?php echo $empresa->amaterno; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="txtCargoEmpresa" class="col-sm-3 control-label">Cargo</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="txtCargoEmpresa" name="txtCargoEmpresa" placeholder="Cargo" value="<?php echo $empresa->cargo; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="txtEmailContactoEmpresa" class="col-sm-3 control-label">Correo</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="txtEmailContactoEmpresa" name="txtEmailContactoEmpresa" placeholder="Correo de Contacto" value="<?php echo $empresa->correo1; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="txtCelularContactoEmpresa" class="col-sm-3 control-label">Celular Contacto</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="txtCelularContactoEmpresa" name="txtCelularContactoEmpresa" placeholder="Celular Contacto" value="<?php echo $empresa->celular1; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="txtTelefonoEmpresa" class="col-sm-3 control-label">Telefono Empresa</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="txtTelefonoEmpresa" name="txtTelefonoEmpresa" placeholder="Telefono de la Empresa" value="<?php echo $empresa->telefono1; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="txtDirecccionEmpresa" class="col-sm-3 control-label">Direccion Empresa</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="txtDirecccionEmpresa" name="txtDirecccionEmpresa" placeholder="Direccion Empresa" value="<?php echo $empresa->direccion; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="txtDescripcionEmpresa" class="col-sm-3 control-label">Descripcion de la Empresa</label>
    <div class="col-sm-9">
      <textarea class="form-control" id="txtDescripcionEmpresa" name="txtDescripcionEmpresa" placeholder="Descripcion de la Empresa" rows="3"><?php echo $empresa->descripcion; ?></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-3">
      <label for="chkLogo">Editar Logotipo?</label>
      <input type="checkbox" id="chkLogo" name="chkLogo">
    </div>
    <div class="col-sm-9">
      <input type="file" class=" pull-right col-sm-6" id="fileLogoEmpresa" name="fileLogoEmpresa" disabled="disabled">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-3">
      <label for="chkPdfDesc">Editar PDF?</label>
      <input type="checkbox" id="chkPdfDesc" name="chkPdfDesc">
    </div>
    <div class="col-sm-9">
      <input type="file" class="pull-right col-sm-6" id="filePdfEmpresa" name="filePdfEmpresa" disabled="disabled">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <button type="submit" class="btn btn-success pull-right ">Guardar</button>
    </div>
  </div>
</form>