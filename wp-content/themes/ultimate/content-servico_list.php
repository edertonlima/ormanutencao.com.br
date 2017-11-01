<div class="col-4 list-servicos item">
	<div class="box-galeria">
		<?php $imgPage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
		<?php if($imgPage){ ?>
			<img src="<?php if($imgPage[0]){ echo $imgPage[0]; } ?>" alt="<?php the_title(); ?>">
		<?php } ?>
	</div>
	<h4><?php the_title(); ?></h4>
	<p><?php the_excerpt(); ?></p>
	<a href="<?php echo get_permalink(); ?>" class="galeria orcamento" title="Ver mais">Ver mais</a>
</div>