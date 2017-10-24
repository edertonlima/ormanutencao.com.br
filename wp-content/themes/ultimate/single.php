<?php get_header(); ?>

		<div class="header-tit">
			<div class="image-header" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg_header.jpg');"></div>

			<h2><?php the_title(); ?></h2>

			<ul class="breadcrumbs">
				<li><a href="<?php echo get_home_url(); ?>" title="Home">Home</a></li>
				<li><a href="<?php echo get_home_url(); ?>/noticias" title="Notícias">Notícias</a></li>
				<li><strong><?php the_title(); ?></strong></li>
			</ul>
		</div>
	</header>

	<?php while ( have_posts() ) : the_post();

		get_template_part( 'content', get_post_format() ); ?>

	<?php endwhile; ?>

<?php get_footer(); ?>