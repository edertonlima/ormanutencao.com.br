<?php get_header(); ?>

	<?php $terms = wp_get_post_terms( $post->ID, $post->post_type.'_taxonomy' ); //var_dump($terms); ?>
	<?php //echo $terms[0]->taxonomy; //$post_type = get_post_type_object( $post->post_type ); ?>

	<header class="header-title">
		<div class="container">
			<h1>Serviço <?php the_archive_title(); ?></h1>
		</div>
	</header>

	<section class="box-content box-page box-page-servico">
		<div class="container">
			
			<div class="row">
				<div class="">

					<?php
						if(count($terms)){
							$args = array(
							    'taxonomy'      => $terms[0]->taxonomy,
							    'parent'        => 0,
							    'orderby'       => 'name',
							    'order'         => 'ASC',
							    'hierarchical'  => 1,
							    'pad_counts'    => true,
							    'hide_empty'    => 0
							);
							$categories = get_categories( $args );
							foreach ( $categories as $categoria ){ ?>

								<div class="col-4 list-servicos">
									<div class="box-galeria">
										<?php $image = get_field('imagem_categoria',$categoria->taxonomy.'_'.$categoria->term_id); ?>
										<img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $categoria->name; ?>">
									</div>
									<h4><?php echo $categoria->name; ?></h4>
									<p><?php echo $categoria->description; ?></p>
									<a href="<?php echo get_category_link($categoria->term_id); ?>" class="galeria orcamento" title="Ver mais">Ver mais</a>
								</div>
								
							<?php
							}
						}else{ ?>

							<div class="col-text">

								<div class="col-12">
									<div class="text-detalhe nenhum-encontrado">
										Nenhuma categoria encontrada.
									</div>
								</div>

							</div>

						<?php }
					?>

				</div>
			</div>

		</div>
	</section>

<?php get_footer(); ?>