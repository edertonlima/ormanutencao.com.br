<?php get_header(); //var_dump($post); ?>

	<?php $terms = wp_get_post_terms( $post->ID, $post->post_type.'_taxonomy' ); ?>
	<?php $post_type = get_post_type_object( $post->post_type ); ?>
	
	<header class="header-title">
		<div class="container">
			
			<h1>
				<span>
					<a href="<?php echo get_post_type_archive_link($post_type->name); ?>" title="Serviço <?php echo $post_type->labels->singular_name; ?>">Serviço <?php echo $post_type->labels->singular_name; ?></a>
					<i class="fa fa-angle-right" aria-hidden="true"></i>
					<a href="<?php echo get_home_url(); ?>/servicos/comercial/<?php echo $terms[0]->slug; ?>" title="<?php echo $terms[0]->name; ?>"><?php echo $terms[0]->name; ?></a>
				</span>
				<?php the_title(); ?>
			</h1>

		</div>
	</header>

	<?php
	// Start the loop.
	while ( have_posts() ) : the_post();

		// Include the page content template.
		get_template_part( 'content', 'post' );

	// End the loop.
	endwhile;
	?>

<?php get_footer(); ?>