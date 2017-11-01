	<section class="box-content box-page box-page-sobre">
		<div class="container">
			
			<div class="row">
				<div class="col-text">
					
					<div class="col-12">
						<?php $imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
						<img src="<?php echo $imagem[0]; ?>" alt="<?php the_title(); ?>" class="img-sobre">
				
						<?php the_content(); ?>

						<a href="<?php echo get_permalink(get_page_by_path('atendimento')); ?>?orcamento=<?php echo $post->ID; ?>" class="solicitar-orcamento">Solicitar Orçamento</a>
						
					</div>

				</div>
			</div>

			<div class="row galeria-servico">

				<?php 

				$images = get_field('galeria_servico');
				$size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)

				if( $images ): ?>
					
						<?php foreach( $images as $image ): ?>
							<div class="col-4 item-galeria">

								<a href="<?php echo $image['url']; ?>" class="fancybox" data-fancybox="galeria">
									<img src="<?php echo $image['sizes']['thumbnail']; ?>" />
								</a>

							</div>
						<?php endforeach; ?>
					
				<?php endif; ?>
				
			</div>

		</div>
	</section>	


<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/fancybox/fancybox.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function() {		
		jQuery('.fancybox').fancybox();	
	});
</script>