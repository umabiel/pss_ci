 <?php 
    $usuario = $usuario->result()[0];
?>
<form class="form-horizontal" enctype="multipart/form-data" id="frmNuevoUsuario" action="<?php echo base_url() . "index.php/admin/guardarusuario"; ?>" method="post">
  <div class="form-group">
    <label for="txtNombreUsuario" class="col-sm-3 control-label">Nombres</label>
    <div class="col-sm-9">
      <input type="hidden" class="form-control" id="txtUsuarioId" name="txtUsuarioId" value="<?php echo $usuario->id; ?>">
      <input type="text" class="form-control" id="txtNombreUsuario" name="txtNombreUsuario" placeholder="Nombre del Usuario" value="<?php echo $usuario->nombre ; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="txtApellidoUsuario" class="col-sm-3 control-label">Apellidos</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="txtApellidoUsuario" name="txtApellidoUsuario" placeholder="Apellidos del Usuario" value="<?php echo $usuario->apellido ; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="txtUsuario" class="col-sm-3 control-label">Usuario</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="txtUsuario" name="txtUsuario" placeholder="Nombre de Usuario" value="<?php echo $usuario->usuario ; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="txtClaveUsuario" class="col-sm-3 control-label">Password</label>
    <div class="col-sm-9">
      <input type="password" class="form-control" id="txtClaveUsuario" name="txtClaveUsuario" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="txtEmailUsuario" class="col-sm-3 control-label">Email</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="txtEmailUsuario" name="txtEmailUsuario" placeholder="Email de Usuario" value="<?php echo $usuario->email ; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="cmdCargoUsuario" class="col-sm-3 control-label">Cargo</label>
    <div class="col-sm-9">
      <select class="form-control" id="cmdCargoUsuario" name="cmdCargoUsuario">
        <option value=""> - Seleccione el Cargo - </option>
        <?php
                    foreach ($cargos->result() as $cargo) {
                ?>
                    <option value="<?php echo $cargo->id; ?>"><?php echo $cargo->cargo; ?></option>
                <?php
                    }
                ?>
      </select>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <button type="submit" class="btn btn-success pull-right ">Guardar</button>
    </div>
  </div>
</form>