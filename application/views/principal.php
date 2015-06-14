<div class="container">

	<div class="row">	
		<div class="col-xs-12 col-md-12">
			<img src="http://localhost/pss_ci/assets/img/promperu1.gif" width="300" height="95" alt="Perú Service"> 
			<!-- <canvas id="canvas3" width="350" height="90" class="img-responsive"></canvas> -->
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="col-md-9 col-sm-7 hidden-xs">
			<!-- <img src="images/cubomagico.gif" alt="Perú Service"> -->	
			<canvas id="canvas" width="520" height="500" class="img-responsive"></canvas> 
		</div>
		<div class="col-md-3 col-sm-5">
				<aside class="zz1">
				<?php
						foreach ($categorias->result() as $categoria) {
							
						
				?>
					<a href="<?php echo base_url() . "index.php/categoria/view/" . $categoria->id; ?>">
						<img height="159" width="159" class="img-responsive" src="<?php echo base_url() ?>assets/uploads/categorias/<?php echo $categoria->icono;?>" alt="<?php echo $categoria->categoria; ?>">
					</a>
				<?php
						}
				?>
					<!-- 
          <a href="Page_menu/pagina2.html"> <img class="img-responsive" src="assets/img/menu/IMG__icono_editorial.png" alt="Editorial"></a>
          <a href="Page_menu/pagina3.html"> <img class="img-responsive" src="assets/img/menu/IMG__icono_BPO.png" alt="BPO"></a>
          <a href="Page_menu/pagina4.html"> <img class="img-responsive" src="assets/img/menu/IMG__icono_videojuego.png" alt="Videojuegos"></a>
          <a href="Page_menu/pagina5.html"><img class="img-responsive" src="assets/img/menu/IMG__icono_imprenta.png" alt="Imprenta"></a>
          <a href="Page_menu/pagina6.html"><img class="img-responsive" src="assets/img/menu/IMG__icono_franquicia.png" alt="Franquicia"></a>
          <a href="Page_menu/pagina7.html"> <img class="img-responsive" src="assets/img/menu/IMG__icono_marketing.png" alt="Publicidad"></a> -->
				</aside>
		</div>
		<div class="col-md-12">
			<hr>
		</div>
		
	</div>
</div>