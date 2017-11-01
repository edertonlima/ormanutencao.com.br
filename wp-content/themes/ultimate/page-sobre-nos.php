<?php 
	$imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' );
?>

<?php get_header(); ?>

	<header class="header-title">
		<div class="container">

			<h1><?php the_title(); ?></h1>

		</div>
	</header>

	<?php
	// Start the loop.
	while ( have_posts() ) : the_post();

		// Include the page content template.
		get_template_part( 'content-sobre-nos', 'page' );

	// End the loop.
	endwhile;
	?>

<?php get_footer(); ?>