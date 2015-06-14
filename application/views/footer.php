


<div class="row">
	<footer>
		<div class="container-fluid">
			<div class="row">
				<img class="img-responsive" width="100%" src="<?php echo base_url(); ?>assets/img/IMG__linea_rojo.png" alt="Peru Service">
			</div>
		</div>
	</footer>
</div>


<div class="container">
	<div class="row row-centered">
		<div class="col-md-12">
			<img class="img-responsive" src="<?php echo base_url(); ?>assets/img/IMG__logo_promperu.png" alt="Promperu">
		</div>	
	</div>
</div>



<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>

<script type="text/javascript">

$(document).ready(function() {


	$('#btnShowEmpresas').click(function(event) {
			event.preventDefault();
			$('#ctnEmpresas').show();
			$('#cntDetalleCategoria').hide();
	});


	// $('.btnGuardarCategoria').click(function(event) {
	// 	alert('DD');
	// });


	// $('#btnCategorias').click(function(event) {
	// 	event.preventDefault();
	// 	$('#cntAdmin').html('some text');
	// });

	// $('.btnCategorias').click(function(event) {
	// 	event.preventDefault();
	// 	$('#cntAdmin').html('some textsss');
	// });

});


</script>

</body>
</html>