
<section class="box-content box-page box-page-sobre">
	<div class="container">
		
		<div class="row">
			<div class="col-text-sobre">
				<div class="col-12">

					<div class="text-detalhe">
						<?php the_content(); ?>
					</div>

				</div>
			</div>

			<div class="col-text-sobre">
				<?php $imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' ); ?>
				<img src="<?php echo $imagem[0]; ?>" alt="Conheça um pouco sobre nós" class="img-sobre">
			</div>

			<div class="col-text-sobre">
				<div class="col-4">
					<h4>Missão</h4>
					<?php the_field('missao'); ?>
				</div>
				<div class="col-4">
					<h4>Visão</h4>
					<?php the_field('visao'); ?>
				</div>
				<div class="col-4">
					<h4>Valores</h4>
					<?php the_field('valores'); ?>
				</div>
			</div>
		</div>

	</div>


	<div class="text-box-resp">
		<div class="row">
		
			<div class="col-6 resp-social">
				<h4>Responsabilidade Social</h4>
				<p><?php the_field('responsabilidade_social'); ?></p>
			</div>

			<div class="col-6 resp-ambiental">
				<h4>Responsabilidade Ambiental</h4>
				<p><?php the_field('responsabilidade_ambiental'); ?></p>
			</div>

		</div>
	</div>
</section>

<?php if( have_rows('areas_de_atuacao') ): ?>
	<section class="box-content box-post box-areaatuacao">
		<div class="container">
			<div class="row">

					
				<?php while ( have_rows('areas_de_atuacao') ) : the_row(); ?>

					<div class="col-4">				
						<div class="item-areaatuacao">
							<div class="icon-content">
								<div class="icon">
									<i class="fa fa-star-o" aria-hidden="true"></i>
								</div>
							</div>
							<div class="desc_wrapper">
								<h3><?php the_sub_field('titulo'); ?></h3>
								<p><?php the_sub_field('texto'); ?></p>
							</div>
						</div>
					</div>

				<?php endwhile; ?>

			</div>
		</div>
	</section>
<?php endif; ?>

<?php if( have_rows('equipe') ): ?>
	<section class="box-content box-post box-post-sobre">
		<div class="container">

			<div class="list-post-home">
				<h4>
					<?php the_field('titulo_equipe'); ?>
					<span><?php the_field('sub_titulo_equipe'); ?></span>
				</h4>
			</div>

			<ul class="row list-post">
				<?php while ( have_rows('equipe') ) : the_row(); ?>

					<li class="col-4">
						<a href="javascript:" style="background-image: url('<?php the_sub_field('imagem'); ?>');">
							<div class="mask">
								<i class="fa fa-link" aria-hidden="true"></i>
							</div>
						</a>

						<h3><?php the_sub_field('titulo'); ?></h3>
						<p><?php the_sub_field('texto'); ?></p>
					</li>

				<?php endwhile; ?>
			</ul>

		</div>
	</section>
<?php endif; ?>

<?php if( have_rows('parceiros') ): ?>
	<section class="box-content box-post parceiros">
		<div class="container">

			<div class="list-post-home">
				<h4>
					<?php the_field('titulo_parceiros'); ?>
					<span><?php the_field('sub_titulo_parceiros'); ?></span>
				</h4>
			</div>
			
			<div class="owl-carousel owl-theme parceiros">
				<?php while ( have_rows('parceiros') ) : the_row(); ?>
					<a href="<?php the_sub_field('link'); ?>" target="_blank" title="<?php the_sub_field('titulo'); ?>" class="item">
						<i class="fa fa-link" aria-hidden="true"></i>
						<img src="<?php the_sub_field('imagem'); ?>" alt="<?php the_sub_field('titulo'); ?>">
					</a>
				<?php endwhile; ?>
			</div>		

		</div>
	</section>	
<?php endif; ?>

<script type="text/javascript">

</script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js" type="text/javascript"></script>
<script type="text/javascript">
	jQuery('.owl-carousel.parceiros').owlCarousel({
		loop: false,
		center: false,
		nav: true,
		margin: 20,
		navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
		responsive: {
			0: {
				items: 1
			},
			768: {
				items: 6
			}
		}
	}) 
</script>