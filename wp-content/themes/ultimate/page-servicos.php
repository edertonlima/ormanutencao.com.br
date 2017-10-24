<?php 
	$imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' );
?>

<?php get_header(); ?>

		<div class="header-tit">
			<div class="image-header" style="background-image: url('<?php echo $imagem[0]; ?>');"></div>

			<h2><?php the_title(); ?></h2>

			<ul class="breadcrumbs">
				<li><a href="<?php echo get_home_url(); ?>" title="Home">Home</a></li>
				<li><strong><?php the_title(); ?></strong></li>
			</ul>
		</div>
	</header>

	<?php
	// Start the loop.
	while ( have_posts() ) : the_post();

		// Include the page content template.
		//get_template_part( 'content-servicos', 'page' );

	// End the loop.
	endwhile;
	?>

<?php get_footer(); ?>