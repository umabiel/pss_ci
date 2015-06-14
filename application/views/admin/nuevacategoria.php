<form class="form-horizontal" enctype="multipart/form-data" id="frmNuevaCategoria" action="<?php echo base_url() . "index.php/admin/crearcategoria"; ?>" method="post">
  <div class="form-group">
    <label for="txtNombreCategoria" class="col-sm-3 control-label">Nombre Categoria</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="txtNombreCategoria" name="txtNombreCategoria" placeholder="Nombre de la Empresa">
    </div>
  </div>
  <div class="form-group">
    <label for="fileIconoCategoria" class="col-sm-3 control-label">Icono</label>
    <div class="col-sm-9">
      <input type="file" class="form-control" id="fileIconoCategoria" name="fileIconoCategoria">
    </div>
  </div>
  <div class="form-group">
    <label for="fileFondoCategoria" class="col-sm-3 control-label">Fondo</label>
    <div class="col-sm-9">
      <input type="file" class="form-control" id="fileFondoCategoria" name="fileFondoCategoria">
    </div>
  </div>
  <div class="form-group">
    <label for="fileCabeceraCategoria" class="col-sm-3 control-label">Cabecera</label>
    <div class="col-sm-9">
      <input type="file" class="form-control" id="fileCabeceraCategoria" name="fileCabeceraCategoria">
    </div>
  </div>
  <div class="form-group">
    <label for="fileBtnCategoria" class="col-sm-3 control-label">botonCategoria</label>
    <div class="col-sm-9">
      <input type="file" class="form-control" id="fileBtnCategoria" name="fileBtnCategoria">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <button type="submit" class="btn btn-success pull-right btnGuardarCategoria ">Guardar</button>
    </div>
  </div>
</form>
