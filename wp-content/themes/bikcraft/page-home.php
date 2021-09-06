
<?php 
// Template Name: Home
get_header(); 
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<section class="introducao">
		<div class="container">
			<h1 data-anime="400">Bicicletas Feitas a Mão</h1>
			<blockquote data-anime="800" class="quote-externo fadeInDown">
				<p>“não tenha nada em sua casa que você não considere útil ou acredita ser bonito”</p>
				<cite>WILLIAM MORRIS</cite>
			</blockquote>
			<a data-anime="1200" href="produtos.html" class="btn">Orçamento</a>
		</div>
	</section>

	<section class="produtos container fadeInDown" data-anime="1600">
		<h2 class="subtitulo">Produtos</h2>
		<ul class="produtos_lista">

			<li class="grid-1-3">
				<div class="produtos_icone">
					<img src="img/produtos/passeio.svg" alt="Bikcraft Passeio">
				</div>
				<h3>Passeio</h3>
				<p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação.</p>
			</li>

			<li class="grid-1-3">
				<div class="produtos_icone">
					<img src="img/produtos/esporte.svg" alt="Bikcraft Passeio">
				</div>
				<h3>Esporte</h3>
				<p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação.</p>
			</li>

			<li class="grid-1-3">
				<div class="produtos_icone">
					<img src="img/produtos/retro.svg" alt="Bikcraft Passeio">
				</div>
				<h3>Retrô</h3>
				<p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação.</p>
			</li>

		</ul>

		<div class="call">
			<p>clique aqui e veja os detalhes dos produtos</p>
			<a href="produtos.html" class="btn btn-preto">Produtos</a>
		</div>

	</section>
	<!-- Fecha Produtos -->

	<section class="portfolio">
		<div class="container fadeInDown" data-anime="1600">
			<h2 class="subtitulo">Portfólio</h2>
			<ul class="portfolio_lista">
				<li class="grid-8"><img src="img/portfolio/retro.jpg" alt="Bicicleta Retrô"></li>
				<li class="grid-8"><img src="img/portfolio/passeio.jpg" alt="Bicicleta Passeio"></li>
				<li class="grid-16"><img src="img/portfolio/esporte.jpg" alt="Bicicleta Esporte"></li>
			</ul>
			<div class="call">
				<p>conheça mais o nosso portfólio</p>
				<a href="portfolio.html" class="btn">Portfólio</a>
			</div>
		</div>
	</section>

	<section class="qualidade container fadeInDown" data-anime="2000">
		<h2 class="subtitulo">Qualidade</h2>
		<img src="img/bikcraft-qualidade.svg" alt="Bikcraft">
		<ul class="qualidade_lista">
			<li class="grid-1-3">
				<h3>Durabilidade</h3>
				<p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação renovação renovação</p>
			</li>
			<li class="grid-1-3">
				<h3>Design</h3>
				<p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação renovação renovação</p>
			</li>
			<li class="grid-1-3">
				<h3>Sustentabilidade</h3>
				<p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação renovação renovação</p>
			</li>
		</ul>
		<div class="call">
			<p>conheça mais a nossa história</p>
			<a href="sobre.html" class="btn btn-preto">Sobre</a>
		</div>
	</section>
<?php endwhile; else: endif; ?>

<?php get_footer(); ?>
