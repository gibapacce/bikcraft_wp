<?php get_header(); ?>

	<section class="introducao-interna interna_contato">
		<div class="container">
			<h1 data-anime="400" class="fadeInDown">Contato</h1>
			<p data-anime="800" class="fadeInDown">tire suas dúvidas com a gente</p>
		</div>
	</section>

	<section class="contato container fadeInDown" data-anime="1200">
		<form id="form_orcamento" method="POST" action="./enviar.php" class="contato_form grid-8 formphp">
			<label for="nome">Nome</label>
			<input type="text" id="nome" name="nome" required>
			<label for="email">E-mail</label>
			<input type="email" id="email" name="email" required>
			<label for="telefone">Telefone</label>
			<input type="tel" id="telefone" name="telefone" required>
			<!--Anti-spam-->
			<label class="nao-aparece">Se você não é um robô, deixe em branco.</label>
			<input type="text" class="nao-aparece" name="leaveblank">
			<label class="nao-aparece">Se você não é um robô, não mude este campo.</label>
			<input type="text" class="nao-aparece" name="dontchange" value="http://">
			<!--Fim Anti-spam-->
			<label for="mensagem">Mensagem</label>
			<textarea id="mensagem" name="mensagem" required></textarea>
			<button id="enviar" name="enviar" type="submit" class="btn btn-preto">Enviar</button>
		</form>
		<div class="contato_dados grid-8">
			<h3>Dados</h3>
			<span>+55 51 93223 3232</span>
			<span>orcamento@bikcraft.com</span>
			<span>Rua Ali Perto - Centro</span>
			<span>Porto alegre - RS - Brasil</span>
			<h3>Redes Sociais</h3>
			<ul>
				<li><a href="http://facebook.com" target="_blank"><img src="img/redes-sociais/facebook.svg" alt="Facebook"></a></li>
				<li><a href="http://instagram.com" target="_blank"><img src="img/redes-sociais/instagram.svg" alt="Instagram"></a></li>
				<li><a href="http://twitter.com" target="_blank"><img src="img/redes-sociais/twitter.svg" alt="Twitter"></a></li>
			</ul>
		</div>
	</section>

	<div class="container contato_mapa fadeInDown" data-anime="1600">
		<a href="http://google.com" target="_blank" class="grid-16"><img src="img/endereco-bikcraft.jpg" alt="Endereço da Bikcraft"></a>
	</div>

<?php get_footer(); ?>