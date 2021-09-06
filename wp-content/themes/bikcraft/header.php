<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<!-- Title Até 70 caracteres -->
	<title><?php bloginfo('name'); ?></title>
	<!-- Description Até 140 caracteres -->
	<meta name="description" content="Compre a sua bicicleta personalizada na Bikcraft. Possuímos modelos, Passeio, Retrô e Esporte.">
	<!--OPEN GRAPHS-->
	<meta property="og:type" content="website" />
	<meta property="og:title" content="<?php bloginfo('name'); ?>" />
	<meta property="og:description" content="Compre a sua bicicleta personalizada na Bikcraft. Possuímos modelos, Passeio, Retrô e Esporte." />
	<meta property="og:url" content="http://bikcraft.com" />
	<meta property="og:image" content="http://bikcraft.com/img/og-image.png" />
	<!--ESCALA COM TAMANHO DO DISPOSITIVO - RESPONSIVO-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- FAVICON-->
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
	<script>document.documentElement.classList.add("js");</script>

  <!--Inicio WP Header-->
  <?php wp_head(); ?>
  <!--Final WP Header-->
</head>

<body>

	<header class="header">
		<div class="container">
			<a href="/origamid/bikcraft_wp/" class="grid-4">
				<img src="<?php echo get_template_directory_uri(); ?>/img/bikcraft.svg" alt="Bikcraft">
			</a>
			<nav class="grid-12 header_menu">
				<ul>
					<li><a href="/origamid/bikcraft_wp/sobre/">Sobre</a></li>
					<li><a href="/origamid/bikcraft_wp/produtos/">Produtos</a></li>
					<li><a href="/origamid/bikcraft_wp/portfolio/">Portfólio</a></li>
					<li><a href="/origamid/bikcraft_wp/contato/">Contato</a></li>
				</ul>
			</nav>
		</div>
	</header>