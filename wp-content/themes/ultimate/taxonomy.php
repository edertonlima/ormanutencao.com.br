<?php get_header(); ?>

	<?php $terms = wp_get_post_terms( $post->ID, $post->post_type.'_taxonomy' ); ?>
	<?php $post_type = get_post_type_object( $post->post_type ); ?>

	<header class="header-title">
		<div class="container">
			
			<h1>
				<span>
					<a href="<?php echo get_post_type_archive_link($post_type->name); ?>" title="Serviço <?php echo $post_type->labels->singular_name; ?>">Serviço <?php echo $post_type->labels->singular_name; ?></a>
				</span>
				<?php echo single_term_title(); ?>
			</h1>
		</div>
	</header>

	<section class="box-content box-page box-page-servico box-list-servico">
		<div class="container">		
			<div class="row">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content-servico_list', get_post_format() ); ?>

				<?php endwhile; ?>
				
			</div>
		</div>
	</section>

<?php get_footer(); ?>