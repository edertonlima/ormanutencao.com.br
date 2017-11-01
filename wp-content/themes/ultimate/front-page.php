<?php get_header(); ?>

</header>

<!-- slide -->
<section class="box-content box-slide">
	<div class="slide">
		<div class="carousel slide" data-ride="carousel" data-interval="6000" id="slide">

			<div class="carousel-inner" role="listbox">

				<?php if( have_rows('slide') ):
					$slide = 0;
					while ( have_rows('slide') ) : the_row();

						if(get_sub_field('imagem')){
							$slide = $slide+1; ?>

							<div class="item <?php if($slide == 1){ echo 'active'; } ?>" style="background-image: url('<?php the_sub_field('imagem'); ?>');">

								<div class="box-height">
									<div class="box-texto">

										<?php if(get_sub_field('texto')){ ?>
											<p class="texto"><?php the_sub_field('texto'); ?></p>
										<?php } ?>

										<?php if(get_sub_field('sub_texto')){ ?>
											<p class="sub-texto"><?php the_sub_field('sub_texto'); ?></p>
										<?php } ?>

									</div>
								</div>
								
							</div>

						<?php }

					endwhile;
				endif; ?>

			</div>

			<ol class="carousel-indicators">
				
				<?php for($i=0; $i<$slide; $i++){ ?>
					<li data-target="#slide" data-slide-to="<?php echo $i; ?>" class="<?php if($i == 0){ echo 'active'; } ?>"></li>
				<?php } ?>
				
			</ol>

		</div>
	</div>
</section>

<div id="container-bg">

	<section class="box-content box-page">
		<div class="container">

			<div class="ar-condicionado">
				<div class="ar-condicionado-content">

					<div class="row">
						
						<div class="col-6">
							<div class="dest-home">
								<div class="ar-condicionado-content-text">
									<h1><strong><?php the_field('titulo','option'); ?></strong></h1>
									<p><?php the_field('destaque_home',5); ?></p>
								</div>
							</div>
						</div>
						<div class="col-6">
							<?php 
								$imagem = wp_get_attachment_image_src( get_post_thumbnail_id(5), '' );
							?>
							<img src="<?php echo $imagem[0]; ?>" alt="OR Manutenções">
						</div>

					</div>

				</div>
			</div>
			<div class="manutencao">
				<h1><strong><?php the_field('titulo_home',5); ?></strong></h1>
				<p><?php the_field('texto_home',5); ?></p>
				<a href="<?php echo get_permalink(get_page_by_path('sobre-nos')); ?>" title="Saiba Mais" class="orcamento">Saiba Mais</a>
			</div>
		</div>
	</section>

<?php /*	<div class="servicos">
		<div class="cont-servicos">
			<div class="residencial">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/casa.png" alt="Eletricista Residencial">
			<h2>Eletricista Residencial</h2><br>
			<p>Instalaçã e Manutenção elétrica em geral, como padrão de energia com aprovação Celesc, instalação de Luminárias em Gesso ou Drywall. Entre outros serviços.</p>
			</div>
			<div class="predial">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/contador.png" alt="Eletricista Residencial">
			<h2>Eletricista Predial</h2><br>
			<p>Quadros Elétricos, Projetos Elétricos, tubulação em lajes, Contatores, Disjuntores, Caixas de distribuição, infraestrutura de telefônia e lógica.</p>
			</div>

			<div class="comercial">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/homen.png" alt="Eletricista Residencial">
			<h2>Eletricista Comercial</h2><br>
			<p>Instalação de Luminárias, Quadros Elétricos, Projetos Completos de Instalações Elétrica, Decoração em Gesso, preventivos conra incêndio e câmeras de segurança. </p>
			</div>
		</div>
	</div> */ ?>

	<section class="box-content box-page box-page-servico">			
		<div class="row">

			<div class="col-12">
				<h2>Nossos Serviços</h2>

				<?php get_template_part( 'content-servicos', 'page' ); ?>

			</div>

		</div>
	</section>

	<?php get_footer(); ?>

</div>

<script type="text/javascript">
	jQuery(document).ready(function(){
		height_img = jQuery('.ar-condicionado-content').height();
		jQuery('.dest-home').height(height_img);
	});

	jQuery(window).resize(function(){
		height_img = jQuery('.ar-condicionado-content').height();
		jQuery('.dest-home').height(height_img);
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


<?php /* echo get_permalink(get_page_by_path('atendimento')); ?>?orcamento=<?php echo (get_row_index()-1); */ ?>