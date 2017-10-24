
<section class="box-content box-page box-page-sobre">
	<div class="container">
		
		<div class="row">
			<div class="col-text-sobre">
				<div class="col-12">

					<div class="text-detalhe">
						<?php the_content(); ?>
					</div>

				</div>

				<?php if( have_rows('servicos') ):
					while ( have_rows('servicos') ) : the_row(); ?>

						<div class="col-12">
							<h4><?php the_sub_field('titulo'); ?></h4>
							<?php the_sub_field('texto'); ?>
						</div>

					<?php endwhile;
				endif; ?>
			
			</div>
			</div>
		</div>

	</div>
</section>

<script type="text/javascript">
	jQuery(document).ready(function(){	    

	});

	jQuery(window).resize(function(){

	});
</script>