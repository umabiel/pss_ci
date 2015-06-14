<div id="ctnCategorias">

<div class="row" style="margin-bottom:15px;">
	<div class="col-md-12">
		<a class="btn btn-success pull-right" href="<?php echo base_url() . "index.php/admin/nuevacategoria" ?>"> Agregar Categoria</a>
	</div>
</div>

<?php
		foreach ($categorias->result() as $categoria) {
?>
<div class="row">
	<div class="col-md-12">
		<div class="col-md-6  pull-left">
		<a href="<?php echo base_url() . "index.php/admin/editarcategoria/" . $categoria->id; ?>">
			<img height="159" width="159" class="img-responsive" src="<?php echo base_url(); ?>assets/uploads/categorias/<?php echo $categoria->icono; ?>" alt="<?php echo $categoria->categoria; ?>">
		</a>
		</div>
		<div class="col-md-6">
			<a class="btn btn-danger pull-right" href="<?php echo base_url() . "index.php/admin/eliminarcategoria/" . $categoria->id; ?>">Eliminar</a>
			<a class="btn btn-default pull-right" href="<?php echo base_url() . "index.php/admin/editarcategoria/" . $categoria->id; ?>">Editar</a>
		</div>

	</div>

</div>
<?php
		}
?>
</div>