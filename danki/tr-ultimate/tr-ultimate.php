<?php

	/*
			**Plugin Name: TR Ultimate
			**Description: Este plugin ira te ajudar a estilizar suas páginas
	*/	
	function myShortCode(){
		$shortCode = "<h2>Aqui vai o conteúdo do seu plugin</h2>";
			return $shortCode;
	}

	add_shortcode('danki1','myShortCode');
	
	function myMenu(){
		add_menu_page('TR Ultimate Plugin','Tr Ultimate','manage_options','Danki-TR-plugin','Danki_page','',200);
	}
	
	add_action('admin_menu','myMenu');
	
	function Danki_page(){
		if(array_key_exists('acao',$_POST)){
			update_option('conteudo_html',$_POST['conteudo_html']);
			echo '<div class="notice notice-success is-dismissible"> 
						<p><strong>Alterações salvas com sucesso!</strong></p>
					<button type="button" class="notice-dismiss">
					<span class="screen-reader-text">Fechar.</span>
					</button>
				</div>';
		}
		$conteudo_html = get_option('conteudo_html');
		echo '
		<div class="wrap">
			<h2>Bem-vindo(a) ao TR Ultimate</h2>
			<form method="post">
				<label for ="none">Conteúdo HTML:</label>
				<textarea name = "conteudo_html" class = "large-text" placeholder = "Conteúdo HTML">'.$conteudo_html.'</textarea>
				<input type= "submit" name = "acao" value = "Enviar" class = "button button-primary"/>
			</form>
		
		</div>
		';
	}
	function getConteudoHead(){
		$conteudo_html = get_option('conteudo_html');
		echo $conteudo_html;
	}
	function getConteudoFooter(){
		$conteudo_html = get_option('conteudo_html');
		echo $conteudo_html;
	}
	
	add_action ('wp_head','getConteudohead');
	//add_action ('wp_footer','getConteudoFooter');

?>