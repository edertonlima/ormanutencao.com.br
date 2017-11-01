<?php 
	$imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' );
?>

<?php get_header(); ?>

	<header class="header-title">
		<div class="container">
					
			<h1><?php the_title(); ?></h1>

		</div>
	</header>

	<section class="box-content box-page box-page-servico">
		<div class="container">
			
			<div class="row">
				<div class="col-text">

					<div class="col-12">
						<div class="text-detalhe">
							<?php the_content(); ?>
						</div>
					</div>

				</div>
			</div>

		</div>
	</section>

	<section class="box-content box-page box-page-servico box-list-servico">			
		<div class="row">

			<div class="col-12">

				<?php
				// Start the loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					get_template_part( 'content-servicos', 'page' );

				// End the loop.
				endwhile;
				?>
	
			</div>

		</div>

	</div>
</section>

<?php get_footer(); ?>