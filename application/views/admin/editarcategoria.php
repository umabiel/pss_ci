  <?php 
    $categoria = $categoria->result()[0];
  ?>

<div data-example-id="togglable-tabs" role="tabpanel" class="">
    <ul role="tablist" class="nav nav-tabs" id="myTab">
      <li class="active" role="presentation"><a aria-expanded="true" aria-controls="home" data-toggle="tab" role="tab" id="home-tab" href="#categoria">Categor&iacute;a</a></li>
      <li role="presentation" class=""><a aria-controls="profile" data-toggle="tab" id="profile-tab" role="tab" href="#detalles" aria-expanded="false">Detalles</a></li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div aria-labelledby="home-tab" id="categoria" class="tab-pane fade active in" role="tabpanel" style="margin-top: 15px;">

  
        <form class="form-horizontal" enctype="multipart/form-data" id="frmNuevaCategoria" action="<?php echo base_url() . "index.php/admin/guardarcategoria"; ?>" method="post">
          <div class="form-group">
            <label for="txtNombreCategoria" class="col-sm-3 control-label">Nombre Categoria</label>
            <div class="col-sm-9">
              <input type="hidden" id="txtCategoriaId" name="txtCategoriaId" value="<?php echo $categoria->id; ?>">
              <input type="text" class="form-control" id="txtNombreCategoria" name="txtNombreCategoria"
                placeholder="Nombre de la Empresa" value="<?php echo $categoria->categoria; ?>">
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
              <button type="submit" class="btn btn-success pull-right ">Guardar</button>
            </div>
          </div>
        </form>

      </div>
      <div aria-labelledby="profile-tab" id="detalles" class="tab-pane fade" role="tabpanel" style="margin-top: 15px;">
      
      

        <form id="frmCategoriaDetalle" name="frmCategoriaDetalle" action="<?php echo base_url() . "index.php/admin/guardardetallecategoria"; ?>" method="post">
          <div class="form-group">
            <label for="cmbIconoDetalle" class="col-sm-3 control-label">Icono</label>
            <div class="col-sm-9">
              <input type="hidden" id="txtCategoriaId" name="txtCategoriaId" value="<?php echo $categoria->id; ?>">
              <select type="file" class="form-control" id="cmbIconoDetalle" name="cmbIconoDetalle">

              <?php 
                $images = glob('assets/img/item/*.{jpeg,gif,png}', GLOB_BRACE);
                foreach ($images as $key => $value) {
              ?>

                <option value="<?php echo base_url() . $value; ?>" ><?php echo $value; ?></option>

              <?php
                }
              ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="txtDetalleDescripcion" class="col-sm-3 control-label">Descripcion</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="txtDetalleDescripcion" name="txtDetalleDescripcion">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
              <button type="submit" class="btn btn-success pull-right ">Guardar</button>
            </div>
          </div>
        </form>

      </div>
    </div>
  </div>