

			<div class="col-text">

				<div class="owl-carousel owl-theme servicos-home">

					<div class="list-servicos item">
						<div class="box-galeria">
							<?php $image = get_field('imagem_comercial','option'); ?>
							<img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="Serviço Comercial">
						</div>
						<h4>Serviço Comercial</h4>
						<p><?php the_field('resumo_comercial','option'); ?></p>
						<a href="<?php echo get_home_url(); ?>/servicos/comercial" class="galeria orcamento" title="Ver mais">Ver mais</a>
					</div>

					<div class="list-servicos item">
						<div class="box-galeria">
							<?php $decorativo = get_field('imagem_decorativo','option'); ?>
							<img src="<?php echo $decorativo['sizes']['thumbnail']; ?>" alt="Serviço Decorativo">
						</div>
						<h4>Serviço Decorativo</h4>
						<p><?php the_field('resumo_decorativo','option'); ?></p>
						<a href="<?php echo get_home_url(); ?>/servicos/decorativo" class="galeria orcamento" title="Ver mais">Ver mais</a>
					</div>

					<div class="list-servicos item">
						<div class="box-galeria">
							<?php $industrial = get_field('imagem_industrial','option'); ?>
							<img src="<?php echo $industrial['sizes']['thumbnail']; ?>" alt="Serviço Industrial">
						</div>
						<h4>Serviço Industrial</h4>
						<p><?php the_field('resumo_industrial','option'); ?></p>
						<a href="<?php echo get_home_url(); ?>/servicos/industrial" class="galeria orcamento" title="Ver mais">Ver mais</a>
					</div>

					<div class="list-servicos item">
						<div class="box-galeria">
							<?php $predial = get_field('imagem_predial','option'); ?>
							<img src="<?php echo $predial['sizes']['thumbnail']; ?>" alt="Serviço Predial">
						</div>
						<h4>Serviço Predial</h4>
						<p><?php the_field('resumo_predial','option'); ?></p>
						<a href="<?php echo get_home_url(); ?>/servicos/predial" class="galeria orcamento" title="Ver mais">Ver mais</a>
					</div>

					<div class="list-servicos item">
						<div class="box-galeria">
							<?php $residencial = get_field('imagem_residencial','option'); ?>
							<img src="<?php echo $residencial['sizes']['thumbnail']; ?>" alt="Serviço Residencial">
						</div>
						<h4>Serviço Residencial</h4>
						<p><?php the_field('resumo_residencial','option'); ?></p>
						<a href="<?php echo get_home_url(); ?>/servicos/residencial" class="galeria orcamento" title="Ver mais">Ver mais</a>
					</div>

				</div>
			
			</div>


<script type="text/javascript">
	jQuery(document).ready(function(){	    

	});

	jQuery(window).resize(function(){

	});
</script>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/fancybox/fancybox.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function() {		
		jQuery('.fancybox').fancybox();	
	});
</script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js" type="text/javascript"></script>
<script type="text/javascript">
	jQuery('.owl-carousel.servicos-home').owlCarousel({
		loop: false,
		center: false,
		nav: true,
		margin: 20,
		navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 2
			},
			768: {
				items: 3
			},
			1000: {
				items: 4
			}
		}
	}) 
</script>