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


</style>

	<div class="row">	
		<div class="col-xs-9 col-md-9">
			<img src="http://localhost/pss_ci/assets/img/promperu1.gif" width="300" height="95" alt="Perú Service"> 
			<hr>
		</div>
		<div class="col-md-3">
			<span></span>
		</div>
	</div>
	<div class="row">
		
	<?php
	if ($empresas) {

		foreach ($empresas->result() as $empresa) {
	?>

		<div class="col-xs-8 col-sm-4 placeholder">
		  <img data-src="holder.js/100x100/auto/vine" class="img-responsive" alt="100x100" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDIwMCAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgZmlsbD0iIzM5REJBQyIvPjxnPjx0ZXh0IHg9Ijc1LjUiIHk9IjEwMCIgc3R5bGU9ImZpbGw6IzFFMjkyQztmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMHB0O2RvbWluYW50LWJhc2VsaW5lOmNlbnRyYWwiPjIwMHgyMDA8L3RleHQ+PC9nPjwvc3ZnPg==" data-holder-rendered="true">
		  <h2><?php echo $empresa->razonsocial; ?></h2>
		  <p class="text-muted" style="text-align: justify;"><?php echo $empresa->descripcion; ?></p>
		  <p><a class="btn btn-default" href="<?php echo base_url() . "index.php/empresa/view/" . $empresa->id; ?>" role="button">Ver Detalles »</a></p>
		</div>

	<?php
		}
	}else{
		echo "<p> No existen Empresas con la Categoria seleccionada. </p>";
	}
	?>



	</div>
</div>