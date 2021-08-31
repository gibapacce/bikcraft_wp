<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'bikcraft_db' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'wp_user' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '123456' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '+kk0H|iHA?yJyO#2-U5~qe>ec391A:#F)T.m!_-*&qgrJ>h6,JN~(l`S!-hj~Ldy' );
define( 'SECURE_AUTH_KEY',  '{|=QVk_MvU;G.I|E&k>;s5e74x7]6[*Z3RIZEFd3j^S0X k:f4l.:GhNiKVI> mq' );
define( 'LOGGED_IN_KEY',    'c=[7Hq{[f~jfS#fAMa@I>4re-#CH?S5}p3R>NJ0.mfK3V]gkKLN|y2KbDNIoHI|3' );
define( 'NONCE_KEY',        ']XYpn4^~OQOh}$SF%JUtGgs,y8w7HoG&]%d&Z f> O*tvF0o]pj3HJA?S6.m},e?' );
define( 'AUTH_SALT',        '7bvN=CqQ.d_pz9hzv7R/e wrV99%@d^MJLhL`B^i.Za22;&Qc#b)yM$b7D;S]rW*' );
define( 'SECURE_AUTH_SALT', 'ny>)[CbbiLXI1TVHW.8rl)X7@T_<`r$z$3>ok3[GE)tvz-1(D_Ql$OqN=az.k7(Y' );
define( 'LOGGED_IN_SALT',   'i(Pxc#$*qj04,4UO#Zv#:`?RD&3U@8)gLVDo.E57%Ab1ON68qD#PNi|e%c[R-@j{' );
define( 'NONCE_SALT',       ',5wE[ACuD^JgFw5@UM((z2RFl=`6V0Dfbfbo=7ypmKc1ad[%sO3?czJ}t&q&!aOT' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
