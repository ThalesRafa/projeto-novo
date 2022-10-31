<!DOCTYPE html>
<html>
<head>
	<?php
		wp_head();
	?>
	<?php
		$title = get_the_title();
		if($title==''){
			$title = 'Home';
		}
	?>


	<title><?php echo $title;?></title>
	<meta charset="utf-8">
	<link rel="icon" href="<?php echo get_theme_root_uri();?>/Danki/images/favicon1.ico" type="image/x-icon"/><!--inserir icon-->
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
	<link href="<?php echo get_theme_root_uri();?>/Danki/style.css" rel="stylesheet"><!-- código ativar no worpress-->
</head>
<body>

	<section class="topo">
		<div class="center">
			<header>
				<div class="logo"><a href="<?php echo get_site_url(); ?>'?>"><img src="<?php echo get_theme_root_uri();?>/Danki/images/logo1.png" /></a></div><!--logo-->
			</header>
			<ul class="menu-desktop">
				<li><a href="<?php echo get_site_url(); ?>">Home</a></li>
				<li><a href="<?php echo get_site_url(); ?>/sobre">Sobre</a></li>
				<li><a href="<?php echo get_site_url(); ?>/contato">Contato</a></li>
			</ul>
			<div class="menu-mobile">
			<i class="fas fa-align-right"></i>
				<ul>
				<li><a href="<?php echo get_site_url(); ?>">Home</a></li>
				<li><a href="<?php echo get_site_url(); ?>/sobre">Sobre</a></li>
				<li><a href="<?php echo get_site_url(); ?>/contato">Contato</a></li>
				</ul>
			</div><!--menu-mobile-->