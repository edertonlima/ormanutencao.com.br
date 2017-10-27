<!DOCTYPE html>
<html lang="pt-br">
<head>

<?php 
	$titulo_princ = get_field('titulo', 'option');
	$descricao_princ = get_field('descricao', 'option');
	$imagem_princ = get_field('imagem_principal', 'option');
	$url = get_home_url();
	$imgPage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' );

	if(is_tax()){
		$terms = get_queried_object();
		$titulo = $terms->name;
		$descricao = $terms->description;
		$imagem = get_field('imagem_listagem',$terms->taxonomy.'_'.$terms->term_id);
		$url = get_term_link($terms->term_id);
	}

	if(is_archive()){
		$titulo = get_field('titulo_pagina','option');
		$descricao = get_field('descricao_pagina','option');
		$imagem = get_field('imagem_pagina','option');
		$url = $url.'/produtos';
	}

	if(is_single()){
		$titulo = get_the_title();
		$descricao = get_the_excerpt();
		
		if($imgPage[0] != ''){
			$imagem = $imgPage[0];	
		}			
		$url = get_the_permalink();
	}

	if($titulo == ''){
		$titulo = $titulo_princ;
	}else{
		$titulo = $titulo.' - '.$titulo_princ;
	}
	
	if($descricao == ''){
		$descricao = $descricao_princ;
	}

	$autor = '';
?>

<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="shortcut icon" href="<?php the_field('favicon', 'option'); ?>" type="image/x-icon" />
<link rel="icon" href="<?php the_field('favicon', 'option'); ?>" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="pt" />
<meta name="rating" content="General" />
<meta name="description" content="<?php echo $descricao; ?>" />
<meta name="keywords" content="" />
<meta name="robots" content="index,follow" />
<meta name="author" content="<?php echo $autor; ?>" />
<meta name="language" content="pt-br" />
<meta name="title" content="<?php echo $titulo; ?>" />

<!-- SOCIAL META -->
<meta itemprop="name" content="<?php echo $titulo; ?>" />
<meta itemprop="description" content="<?php echo $descricao; ?>" />
<meta itemprop="image" content="<?php echo $imagem; ?>" />

<html itemscope itemtype="<?php echo $url; ?>" />
<link rel="image_src" href="<?php echo $imagem; ?>" />
<link rel="canonical" href="<?php echo $url; ?>" />

<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo $titulo; ?>" />
<meta property="og:type" content="article" />
<meta property="og:description" content="<?php echo $descricao; ?>" />
<meta property="og:image" content="<?php echo $imagem; ?>" />
<meta property="og:url" content="<?php echo $url; ?>" />
<meta property="og:site_name" content="<?php echo $titulo_princ; ?>" />
<meta property="fb:admins" content="<?php echo $autor; ?>" />
<meta property="fb:app_id" content="1205127349523474" /> 

<meta name="twitter:card" content="summary" />
<meta name="twitter:url" content="<?php echo $url; ?>" />
<meta name="twitter:title" content="<?php echo $titulo; ?>" />
<meta name="twitter:description" content="<?php echo $descricao; ?>" />
<meta name="twitter:image" content="<?php echo $imagem; ?>" />
<!-- SOCIAL META -->

<title><?php echo $titulo; ?></title>

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" media="screen" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css" type="text/css" media="screen" />

<!-- JQUERY -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>


<script type="text/javascript">
	jQuery.noConflict();

	jQuery(document).ready(function(){

		jQuery('.menu-mobile').click(function(){
			if(jQuery(this).hasClass('active')){
				jQuery('.nav').css('top','-110vh');
				jQuery(this).removeClass('active');
				jQuery('.header').removeClass('active');
			}else{
				jQuery('.nav').css('top','0px');
				jQuery(this).addClass('active');
				jQuery('.header').addClass('active');
			}
		});

		if(jQuery('body').height() <= jQuery(window).height()){
			jQuery('.footer').css({position: 'absolute', bottom: '0px'});
		}else{
			jQuery('.footer').css({position: 'relative'});
		}

		scroll_body = jQuery(window).scrollTop();
		if(scroll_body > 400){
			jQuery('.header').addClass('scroll_menu');
		}
	});	

	jQuery(window).resize(function(){
		jQuery('.menu-mobile').removeClass('active');
		jQuery('.header').removeClass('active');
		jQuery('.nav').css('top','-110vh');
		if(jQuery('body').height() <= jQuery(window).height()){
			jQuery('.footer').css({position: 'absolute', bottom: '0px'});
		}else{
			jQuery('.footer').css({position: 'relative'});
		}
	});

	jQuery(window).scroll(function(){
		scroll_body = jQuery(window).scrollTop();
		if(scroll_body > 400){
			jQuery('.header').addClass('scroll_menu');
		}else{
			jQuery('.header').removeClass('scroll_menu');
		}
	});
</script>

<!--Start of Zendesk Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="https://v2.zopim.com/?5DMUomtQYB7tpRzyDChimsc9ZVLfMlJ8";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zendesk Chat Script-->

</head>
<body <?php body_class(); ?>>

	<div id="wrapper">
		<div id="header">
			<div class="sombra-logo"></div>
			<div class="logo">
				<a href="<?php echo get_home_url(); ?>" title="<?php the_field('titulo', 'option'); ?>">
					<img src="<?php the_field('logo_header', 'option'); ?>" alt="<?php the_field('titulo', 'option'); ?>">
				</a>
			</div>
			<div class="fone-top">
				<?php if( have_rows('redes_sociais','option') ): ?>
					<div class="redes">						
						<?php while ( have_rows('redes_sociais','option') ) : the_row(); ?>

							<a href="<?php the_sub_field('url','option'); ?>" title="<?php the_sub_field('nome','option'); ?>" target="_blank">
								<?php the_sub_field('icone','option'); ?>
							</a>
						<?php endwhile; ?>						
					</div>
				<?php endif; ?>
				<span class="fone-topo">
					<strong><?php the_field('telefone_1', 'option'); ?><br></strong>
					<?php the_field('email', 'option'); ?><br>
				</span>
			</div>
			<div id="menu">
				<ul>
					<li class="menu-home">
						<a href="<?php echo get_home_url(); ?>" title="Home">Home</a>
					</li>

					<li class="menu-sobre">
						<a href="<?php echo get_permalink(get_page_by_path('sobre-nos')); ?>" title="Sobre">Sobre nós</a>
					</li>

					<li class="menu-servicos">
						<a href="<?php echo get_permalink(get_page_by_path('servicos')); ?>" title="Serviços">Serviços</a>
					</li>

					<li class="menu-atendimento">
						<a href="<?php echo get_permalink(get_page_by_path('atendimento')); ?>" title="Atendimento">Atendimento</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<?php if(!is_front_page()){ ?>

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

	<?php } ?>

<?php /*

	<header class="header">

		<div class="topbar">
			<div class="container">
				<div class="item_bar tit_bar">
					Tem alguma pergunta?
				</div>

				<div class="item_bar">
					<i class="fa fa-phone" aria-hidden="true"></i>
					<?php the_field('telefone_1','option'); ?>
				</div>

				<div class="item_bar">
					<i class="fa fa-envelope-o" aria-hidden="true"></i>
					<?php the_field('email','option'); ?>
				</div>

				<?php if( have_rows('redes_sociais','option') ): ?>
					<div class="redes">						
						<?php while ( have_rows('redes_sociais','option') ) : the_row(); ?>

							<a href="<?php the_sub_field('url','option'); ?>" class="item_bar" title="<?php the_sub_field('nome','option'); ?>" target="_blank">
								<?php the_sub_field('icone','option'); ?>
							</a>
						<?php endwhile; ?>						
					</div>
				<?php endif; ?>
			</div>
		</div>

		<div class="container">

			<a href="javascript:" class="menu-mobile"><span><em>X</em></span></a>

			<h1>

			</h1>

			<nav class="nav">
				<ul class="menu-principal">

				</ul>
			</nav>

		</div>	
*/ ?>