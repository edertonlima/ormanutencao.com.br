<?php get_header(); ?>

</header>

<!-- slide -->
<section class="box-content box-slide">
	<div class="slide">
		<div class="carousel slide" data-ride="carousel" data-interval="6000" id="slide">

			<div class="carousel-inner" role="listbox">

				<?php if( have_rows('slide') ):
					$slide = 0;
					while ( have_rows('slide') ) : the_row();

						if(get_sub_field('imagem')){
							$slide = $slide+1; ?>

							<div class="item <?php if($slide == 1){ echo 'active'; } ?>" style="background-image: url('<?php the_sub_field('imagem'); ?>');">

								<div class="box-height">
									<div class="box-texto">

										<?php if(get_sub_field('texto')){ ?>
											<p class="texto"><?php the_sub_field('texto'); ?></p>
										<?php } ?>

										<?php if(get_sub_field('sub_texto')){ ?>
											<p class="sub-texto"><?php the_sub_field('sub_texto'); ?></p>
										<?php } ?>

									</div>
								</div>
								
							</div>

						<?php }

					endwhile;
				endif; ?>

			</div>

			<ol class="carousel-indicators">
				
				<?php for($i=0; $i<$slide; $i++){ ?>
					<li data-target="#slide" data-slide-to="<?php echo $i; ?>" class="<?php if($i == 0){ echo 'active'; } ?>"></li>
				<?php } ?>
				
			</ol>

		</div>
	</div>
</section>

<div id="container-bg">
	<div class="container">

		<div class="ar-condicionado">
			<div class="ar-condicionado-content">
			<div class="ar-condicionado-content-text">
			<h6><strong>Instalação</strong></h6>
			<h1><strong>Ar Condicionado</strong></h1>
			<p>Executamos a instalação para obras de pequenos e grandes portes.
			Com uma equipe especializada para a preparação da infra-estrutura e instalação de qualquer capacidade ou marca de ar condicionado.</p>
			</div>
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arcondicionado.jpg" alt="Instalação Ar Condicionado"> </div>
		</div>
		<div class="manutencao">
			<h6><strong>Manutenção</strong></h6>
			<h1><strong>Ar Condicionado</strong></h1>
			<p>Além de prolongar a vida dos equipamentos, garante a qualidade do ar que circula no interior do ambiente livrando-o de poluentes como fungos, poeira, bactérias, ácaros e bolor.
			A Zn Elétrica presta manutenção em todas as marcas de ar condicionado</p>
			<p><strong>Faça seu orçamento conosco.</strong></p>

			<a href="orcamento.html">
			<div class="orcamento">
			Orçamento Online
			</div>
			</a>
		</div>
	</div>

	<div class="servicos">
		<div class="cont-servicos">
			<div class="residencial">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/casa.png" alt="Eletricista Residencial">
			<h2>Eletricista Residencial</h2><br>
			<p>Instalaçã e Manutenção elétrica em geral, como padrão de energia com aprovação Celesc, instalação de Luminárias em Gesso ou Drywall. Entre outros serviços.</p>
			</div>
			<div class="predial">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/contador.png" alt="Eletricista Residencial">
			<h2>Eletricista Predial</h2><br>
			<p>Quadros Elétricos, Projetos Elétricos, tubulação em lajes, Contatores, Disjuntores, Caixas de distribuição, infraestrutura de telefônia e lógica.</p>
			</div>

			<div class="comercial">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/homen.png" alt="Eletricista Residencial">
			<h2>Eletricista Comercial</h2><br>
			<p>Instalação de Luminárias, Quadros Elétricos, Projetos Completos de Instalações Elétrica, Decoração em Gesso, preventivos conra incêndio e câmeras de segurança. </p>
			</div>
		</div>
	</div>

	<div class="container">

		<div id="atendimento">
			<h1><strong>ATENDIMENTO <?php the_field('telefone_1', 'option'); ?></strong></h1>
		</div>

	</div>

	<?php get_footer(); ?>

</div>












<section class="box-content box-areaatuacao" style="display: none;">
	<div class="container">

		<?php $page = get_page_by_path( 'sobre' ); ?>
		<div class="list-post-home">
			<h4><?php the_field('titulo_home',$page->ID); ?></h4>
		</div>

		<div class="row">

			<?php if( have_rows('areas_de_atuacao',$page->ID) ): ?>
								
				<?php while ( have_rows('areas_de_atuacao',$page->ID) ) : the_row(); ?>

					<div class="col-4">				
						<div class="item-areaatuacao">
							<div class="icon-content">
								<div class="icon">
									<i class="fa fa-star-o" aria-hidden="true"></i>
								</div>
							</div>
							<div class="desc_wrapper">
								<h3><?php the_sub_field('titulo'); ?></h3>
								<p><?php the_sub_field('texto'); ?></p>
							</div>
						</div>
					</div>

				<?php endwhile; ?>

			<?php endif; ?>

			<div class="home-sobre-nos">
				<div class="col-6">
					<p><strong><?php the_field('destaque_home',$page->ID); ?></strong></p>

					<?php the_field('texto_home',$page->ID); ?>

					<a href="<?php echo get_permalink(get_page_by_path('sobre')); ?>" title="Leia mais" class="leia-mais">
						<i class="fa fa-file-text-o" aria-hidden="true"></i>
						Leia mais
					</a>
				</div>

				<div class="col-6">

					<?php 
						$imagem = wp_get_attachment_image_src( get_post_thumbnail_id($page->ID), '' );
					?>
					<img src="<?php echo $imagem[0]; ?>" alt="Conheça um pouco sobre nós">
				</div>
			</div>

		</div>
	</div>	
</section>

<section class="box-content box-post box-projetos" style="display: none;">
	<div class="list-post-home">
		<h3>Conheça nossos projetos</h3>

		<ul class="row list-post">

			<?php
				query_posts(
					array(
						'post_type' => 'projetos',
						'posts_per_page' => 3
					)
				);

				while ( have_posts() ) : the_post();

					get_template_part( 'content-list-projetos' );

				endwhile;
				wp_reset_query();
			?>

		</ul>

	</div>
</section>

<section class="box-content box-post" style="display: none;">
	<div class="container">

		<div class="list-post-home">
			<h4>Últimas notícias</h4>
		</div>

		<ul class="row list-post">

			<?php
				query_posts(
					array(
						'post_type' => 'post',
						'posts_per_page' => 3
					)
				);

				while ( have_posts() ) : the_post();

					get_template_part( 'content-list' );

				endwhile;
				wp_reset_query();
			?>

		</ul>

	</div>
</section>	



<script type="text/javascript">
	jQuery(document).ready(function(){
	});

	jQuery(window).resize(function(){
	});
</script>