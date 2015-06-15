<div id="ctnEmpresas">
<div class="row" style="margin-bottom:15px;">
	<div class="col-md-12">
		<a class="btn btn-success pull-right" href="<?php echo base_url() . "index.php/admin/nuevaempresa" ?>"> Agregar Empresa</a>
	</div>
</div>

<div class="row" style="margin-bottom:15px;">
	<div class="col-md-6">
		Filtrar por :
	</div>
	<div class="col-md-6">
		<select id="cmbFilterCategorias" name="cmbFilterCategorias" class="form-control">
			<option value="">- Seleccione Categoria -</option>
			<?php
			foreach ($categorias->result() as $categoria) {
			?>
				<option value="<?php echo $categoria->id; ?>"><?php echo $categoria->categoria; ?></option>
			<?php
			}
			?>
		</select>
	</div>
</div>

<?php
		foreach ($empresas->result() as $empresa) {
?>
<div class="row" style="  padding-bottom: 15px;">
	<div class="col-md-12">
		<div class="col-md-6  pull-left">
		<a href="<?php echo base_url() . "index.php/empresa/view/" . $empresa->id . "/" . $empresa->categoria_id; ?>">
			<img width="159" height="159" class="img-responsive" src="<?php echo base_url(); ?>assets/uploads/empresas/logo/<?php echo $empresa->logotipo; ?>" alt="<?php echo $empresa->razonsocial; ?>">
		</a>
		</div>
		<div class="col-md-6">
		<?php 
			if ($this->session->userdata('cargo') == 'ADMIN') {
		?>
			<a class="btn btn-danger pull-right" href="<?php echo base_url() . "index.php/admin/eliminarempresa/" . $empresa->id; ?>">Eliminar</a>
		<?php
			}
		?>
			<a class="btn btn-default pull-right" href="<?php echo base_url() . "index.php/admin/editarempresa/" . $empresa->id; ?>">Editar</a>
		
		</div>

	</div>

</div>
<?php
		}
?>
</div>
