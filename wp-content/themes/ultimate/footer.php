	


<div id="footer">
	<div class="footer-container">
		<div class="footer-logo">
			<img src="<?php the_field('logo_footer', 'option'); ?>" alt="<?php the_field('titulo', 'option'); ?>">
			<h5>©Copyright <?php echo date('Y'); ?> - <?php the_field('titulo', 'option'); ?><br>
			Todos os direitos reservados.</h5>
		</div>
		<div class="footer-mapa">
		  	<h1>MAPA DO SITE</h1>
			<ul>
				<li class="menu-home">
					<a href="<?php echo get_home_url(); ?>" title="Home">- Home</a>
				</li>

				<li class="menu-sobre">
					<a href="<?php echo get_permalink(get_page_by_path('sobre-nos')); ?>" title="Sobre">- Sobre nós</a>
				</li>

				<li class="menu-servicos">
					<a href="<?php echo get_permalink(get_page_by_path('servicos')); ?>" title="Serviços">- Serviços</a>
				</li>

				<li class="">
					<a href="<?php echo get_permalink(get_page_by_path('atendimento')); ?>" title="Atendimento">- Atendimento</a>
				</li>
			</ul>
		</div>
		<div class="footer-servicos">
		  <h1>SERVIÇOS</h1>
		      <ul>
		        <li><a href="#">- Instalação Ar Condicionado</a></li>
		        <li><a href="#">- Manutenção Ar Condicionado</a></li>
		        <li><a href="#">- Eletricista Residencial</a></li>
		        <li><a href="#">- Eletricista Predial</a></li>
		        <li><a href="#">- Eletricista Comercial</a></li>
		      </ul>
		</div>
		<div class="footer-contato">
		  <h1>FALE CONOSCO</h1>
		    <h2><?php the_field('telefone_1', 'option'); ?></h2>
		    <p><?php the_field('endereco', 'option'); ?></p>
		    <p><?php the_field('email', 'option'); ?></p>
		    <a href="<?php the_field('facebook_rodape', 'option'); ?>"><?php the_field('facebook_rodape', 'option'); ?></a>
		</div>
		<div class="ultimate">
			<a href="http://www.ultimate.com.br" target="_blank" title="ULTIMATE"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_ultimate.png" alt="<?php the_field('titulo', 'option'); ?>"></a>
		</div>

	</div>
</div>






























	<footer class="footer" style="display: none;">
		<div class="msg">
			<div class="container">
				<h3>Venha nos conhecer, ficaremos feliz em te receber!</h3>
			</div>
		</div>
		<div class="container">
			<div class="row">

				<div class="col-4">
					<h3><?php the_field('titulo_footer','option'); ?></h3>
					<?php the_field('texto_footer','option'); ?>
				</div>

				<div class="col-5">
					<div class="item">
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
						<span>
							Quer falar conosco?
							<strong><?php the_field('email','option'); ?></strong>
						</span>
					</div>

					<div class="item">
						<i class="fa fa-comment-o" aria-hidden="true"></i>
						<span>
							Ligue para nós
							<strong><?php the_field('telefone_1','option'); ?></strong>
						</span>
					</div>

					<div class="item endereco">
						<p><?php the_field('endereco','option'); ?></p>
					</div>
				</div>

				<div class="col-3">
					<?php if( get_field('facebook_rodape','option') ): ?>
						<div class="fb-page" 
						data-href="<?php the_field('facebook_rodape','option'); ?>"
						data-width="380" 
						data-hide-cover="false"
						data-show-facepile="false"></div>
					<?php endif; ?>
				</div>
				
			</div>
		</div>

		<div class="copy">

			<?php if( have_rows('redes_sociais','option') ): ?>
				<div class="redes">						
					<?php while ( have_rows('redes_sociais','option') ) : the_row(); ?>

						<a href="<?php the_sub_field('url','option'); ?>" title="<?php the_sub_field('nome','option'); ?>" target="_blank">
							<?php the_sub_field('icone','option'); ?>
						</a>
					<?php endwhile; ?>

					<a href="javascript:" class="item_bar" id="gotop"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
					
				</div>
			<?php endif; ?>

			<p><i class="fa fa-copyright" aria-hidden="true"></i> <?php echo date('Y') ?> <?php the_field('titulo','option'); ?></p>
		</div>
		
	</footer>

	<script type="text/javascript">
		
		jQuery.noConflict();

		jQuery(document).ready(function(){
			jQuery(".scroll").click(function(event){
				event.preventDefault();
				jQuery('.menu-mobile').removeClass('active');
				jQuery('.header').removeClass('active');
				jQuery('.nav').css('top','-110vh');
				jQuery('html,body').animate( { scrollTop:jQuery(this.hash).offset().top } , 1000);
			});

			jQuery("#gotop").click(function(event){
				event.preventDefault();
				jQuery('html,body').animate( { scrollTop: 0 } , 1000);
			});


			// FORM
			jQuery(".enviar").click(function(){
				jQuery('.enviar').html('ENVIANDO').prop( "disabled", true );
				jQuery('.msg-form').removeClass('erro ok').html('');
				var nome = jQuery('#nome').val();
				var email = jQuery('#email').val();
				var telefone = jQuery('#telefone').val();
				var assunto = jQuery('#assunto').val();
				var mensagem = jQuery('#texto').val();
				var para = '<?php get_field('email', 'option'); ?>';
				var nome_site = '<?php get_field('titulo', 'option'); ?>';

				if(email!=''){
					jQuery.getJSON("<?php echo get_template_directory_uri(); ?>/mail.php", { nome:nome, email:email, telefone:telefone, assunto:assunto, mensagem:mensagem, para:para, nome_site:nome_site }, function(result){		
						if(result=='ok'){
							resultado = 'Enviado com sucesso! Obrigado.';
							classe = 'ok';
						}else{
							resultado = result;
							classe = 'erro';
						}
						jQuery('.msg-form').addClass(classe).html(resultado);
						jQuery('form').trigger("reset");
						jQuery('.enviar').html('CADASTRAR').prop( "disabled", false );
					});
				}else{
					jQuery('.msg-form').addClass('erro').html('Por favor, digite um e-mail válido.');
					jQuery('.enviar').html('CADASTRAR').prop( "disabled", false );
				}
			});
		});

	</script>

</body>
</html>