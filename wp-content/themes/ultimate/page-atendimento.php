<?php
	if(isset($_GET['orcamento'])){
		$orcamento = $_GET['orcamento'];

		//$rows = get_field('servicos',129);
		//$specific_row = $rows[$orcamento];
		//$servico = $specific_row['titulo']; 
		$servico = get_the_title( $orcamento ); 
		$post = get_post( $orcamento );
		$post_type = get_post_type_object( $post->post_type );
	}else{
		$orcamento = '';
	}
?>

<?php get_header(); ?>

	<header class="header-title">
		<div class="container">

			<?php 
				global $orcamento;

				if((is_page(202)) and ($orcamento != '')){ ?>
					<h1>Orçamento de Serviço</h1>
				<?php }else{ ?>
					
					<h1><?php the_title(); ?></h1>

				<?php }
			?>
		</div>
	</header>

	<?php
	// Start the loop.
	while ( have_posts() ) : the_post();

		// Include the page content template.
		get_template_part( 'content-atendimento', 'page' );

	// End the loop.
	endwhile;
	?>

<?php get_footer(); ?>