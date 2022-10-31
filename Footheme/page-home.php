<?php
	// Template Name: Home
?>
<?php get_header();?>

<div class="clear"></div>
			<br />
			<br />
			<div class="w50 time-descricao">
				<h2><?php the_field('chamada_topo');?></h2>
				<p>Consultoria especializada em startups, empresas, principalmente, pessoas.</p>
				<a target="_blank" href="https://autocuidadoshop.com.br">Ver demonstração</a>
			</div><!--w50-->
			<div class="w50 time-imagem">
				<img src = "<?php the_field('imagem_topo');?>"/>
			</div><!--w50-->
			<div class="clear"></div>
		</div><!--center-->
	</section><!--topo-->
	<div class="circle"><i class="fas fa-angle-down"></i></div>

	<section class="clientes-slider">

		<div class="center">
		<div style="max-width: 700px;margin: 0 auto;overflow: hidden;" class="slider-container">
			<img src="<?php echo get_theme_root_uri();?>/Footheme/images/flamengo.jpg" />
			<img src="<?php echo get_theme_root_uri();?>/Footheme/images/atleticomg.png" />
			<img src="<?php echo get_theme_root_uri();?>/Footheme/images/botafogo.png" />
			<img src="<?php echo get_theme_root_uri();?>/Footheme/images/corinthians.png" />
			<img src="<?php echo get_theme_root_uri();?>/Footheme/images/cruzeiro.png" />
			<img src="<?php echo get_theme_root_uri();?>/Footheme/images/gremio.jpg" />
			<img src="<?php echo get_theme_root_uri();?>/Footheme/images/santos.png" />
			<img src="<?php echo get_theme_root_uri();?>/Footheme/images/palmeiras.png" />
			<img src="<?php echo get_theme_root_uri();?>/Footheme/images/vasco.png" />
			<img src = "<?php the_field('imagens_slider');?>"/>

		</div>
		</div><!--center-->
	</section>


	<section class="diferenciais">
			
			<div class="center">
				<h2>Contribuímos de ponta a ponta</h2>

				<div class="icons-diferenciais">

					<div class="box-single-diferenciais">
						<img src="<?php echo get_theme_root_uri();?>/Footheme/images/icon1.png" />
						<h3>Ambientes Mobile</h3>
						<p>Garanta que toda sua comunicação esteja alinhada com seu propósito, cada palavra conta.</p>
					</div><!--box-single-diferenciais-->

					<div class="box-single-diferenciais">
						<img src="<?php echo get_theme_root_uri();?>/Footheme/images/icon2.png" />
						<h3>Ambientes Mobile</h3>
						<p>Garanta que toda sua comunicação esteja alinhada com seu propósito, cada palavra conta.</p>
					</div><!--box-single-diferenciais-->

					<div class="box-single-diferenciais">
						<img src="<?php echo get_theme_root_uri();?>/Footheme/images/icon3.png" />
						<h3>Ambientes Mobile</h3>
						<p>Garanta que toda sua comunicação esteja alinhada com seu propósito, cada palavra conta.</p>
					</div><!--box-single-diferenciais-->

				</div><!--icons-diferenciais-->

			</div>

	</section>

	<section class="sobre-time">
		<div class="center">
			<div class="w50 time-descricao-2">
				<h2>Um time experiente,<br/>comunicador e coeso.</h2>
				<p>A Product Runt acredita que marcas fortes são construídas a partir de transformações importantes e positivas na vida dos consumidores. Exatamente como uma conversa que ganha forma, a ideia vira flâmula.
				<br /><br/>
				Comunicar bem, de forma coerente e clara não é algo fácil e estamos aqui para ajudar você e seu time. Você escolhe, remoto ou presencial, para seu cliente ou seu público interno, você determina como vamos te ajudar.</p>
			</div><!--w50-->
			<div class="w50 img-time">
				<img src= "<?php echo get_theme_root_uri();?>/Footheme/images/time.png" />
				<img src = "<?php the_field('editor_codigo');?>"/>
			</div>
			<div class="clear"></div>
		</div>
	</section>

	<section class="depoimentos">
		<div class="center">
			<h2>Depoimentos</h2>
			<div class="depoimentos-box">
				<div class="depoimento-single">
					<p>"Aliqua quis ut duis eiusmod laboris aliquip elit consequat incididunt occaecat minim in consequat ut id culpa veniam. Ut mollit culpa laboris reprehenderit esse id anim anim quis in sed laborum irure mollit culpa."</p>
					<p>Thales Rafael</p>
					<img src="<?php echo get_theme_root_uri();?>/Footheme/images/thales.jpg" />
				</div><!--depoimento-single-->
				<div class="depoimento-single">
					<p>"Aliqua quis ut duis eiusmod laboris aliquip elit consequat incididunt occaecat minim in consequat ut id culpa veniam. Ut mollit culpa laboris reprehenderit esse id anim anim quis in sed laborum irure mollit culpa."</p>
					<p>Thales Rafael</p>
					<img src="<?php echo get_theme_root_uri();?>/Footheme/images/thales.jpg" />
				</div><!--depoimento-single-->
				<div class="depoimento-single">
					<p>"Aliqua quis ut duis eiusmod laboris aliquip elit consequat incididunt occaecat minim in consequat ut id culpa veniam. Ut mollit culpa laboris reprehenderit esse id anim anim quis in sed laborum irure mollit culpa."</p>
					<p>Thales Rafael </p>
					<img src="<?php echo get_theme_root_uri();?>/Footheme/images/thales.jpg" />
				</div><!--depoimento-single-->
			</div><!--depoimentos-box-->
		</div>
	</section>
<?php
	get_footer();
?>
