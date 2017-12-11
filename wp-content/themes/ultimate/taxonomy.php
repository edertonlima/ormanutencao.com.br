<?php get_header(); ?>

	<?php $terms = wp_get_post_terms( $post->ID, $post->post_type.'_taxonomy' ); ?>
	<?php $post_type = get_post_type_object( $post->post_type ); ?>

	<header class="header-title">
		<div class="container">
			
			<h2>
				<?php echo get_cat_name(1); ?>
				<ul class="breadcrumb">
					<li><a href="<?php echo get_home_url(); ?>" title="Home">Home</a></li>
					<li><a href="<?php echo get_post_type_archive_link($post_type->name); ?>" title="Serviço <?php echo $post_type->labels->singular_name; ?>"><?php echo $post_type->labels->singular_name; ?></a></li>
					<li><a href="<?php echo get_post_type_archive_link($post_type->name); ?>" title="Serviço <?php echo $post_type->labels->singular_name; ?>"><?php echo single_term_title(); ?></a></li>
					<li><span><?php the_title(); ?></span></li>
				</ul>
			</h2>

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