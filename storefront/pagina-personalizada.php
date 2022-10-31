<?php
	//Template Name: Página Personalizada 
	get_header();
?>
	<style type = "texte/css">
		.woocommerce-loop-product__title{
			color: blue!important;
		}
	</style>

		<ul class="products">
			<?php
				$args = array(
					'post_type'=> 'product',
					'post_per_page' => 12
				);
				
			$loop =  new WP_Query($args);
			if ($loop -> have_posts()){ 
				while($loop->have_posts())	: $loop->the_post();
					wc_get_template_part('content','product');
					endwhile;
			}else{
				echo ('Nenhum produto encontrado...');
			}
				wp_reset_postdata();
			?>
		</ul>
<?php
	get_footer();
?>