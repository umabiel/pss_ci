<div id="ctnCategorias">

<div class="row" style="margin-bottom:15px;">
    <div class="col-md-12">
        <?php 
            if ($this->session->userdata('cargo') == 'ADMIN') {
        ?>
            <a class="btn btn-success pull-right" href="<?php echo base_url() . "index.php/admin/nuevousuario" ?>"> Agregar Usuario</a>
        <?php
            }
        ?>
    </div>
</div>

<?php
        foreach ($usuarios->result() as $usuario) {
?>
<div class="row" style="margin-bottom:15px;">
    <div class="col-md-12">
        <div class="col-md-6  pull-left">
        <a href="<?php echo base_url() . "index.php/admin/editarusuario/" . $usuario->id; ?>">
            <span><?php echo $usuario->nombre, " ", $usuario->apellido ?></span>
        </a>
        </div>
        <div class="col-md-6">
        <?php 
            if ($this->session->userdata('cargo') == 'ADMIN') {
        ?>
            <a class="btn btn-danger pull-right" href="<?php echo base_url() . "index.php/admin/eliminarusuario/" . $usuario->id; ?>">Eliminar</a>
            <a class="btn btn-default pull-right" href="<?php echo base_url() . "index.php/admin/editarusuario/" . $usuario->id; ?>">Editar</a>
        <?php
            }
        ?>
        </div>

    </div>

</div>
<?php
        }
?>
</div>