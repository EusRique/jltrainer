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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'henri107_jltrainer');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'henri107_root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '*Q8@z+QL@w.x');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'ztPoMe-+la`fStx{kU9U2D_@QWsAd84vFe[^{P<)$0h1l6lrMiXHbMQ-ZsML!YOu');
define('SECURE_AUTH_KEY',  '!TnZtncevsreR(nS3fm.A~s49:4hKCAuZD^@mgR3.}#UGF+dZC28T5fnU2QLTcR^');
define('LOGGED_IN_KEY',    'VYpB?@P,`+}xxXgcN.kd|,_F/YF$eR!g0W=Ljbw%UDDB1G,6!JaCc8}o.]5n~ <`');
define('NONCE_KEY',        'z7 r~3R9i_RN9p`>c} c#?:AYXj*ZEj<;xv7JnnXi/m(d$@n)4UM2F1u7ka)_e/W');
define('AUTH_SALT',        'U#gfMYE8$_WIw76#76s4F+:!6hhLMqj@c~G,Vo?6VN`.HDq+SKk0J_(D0Em%SA/t');
define('SECURE_AUTH_SALT', 'k}hGHah=?Sq2 5pe?-Q%T;arcO8aE;GF]]efSGHg[y(y<GN!<h$xGnbgw.lmgG8a');
define('LOGGED_IN_SALT',   'I;P0W;Jh;F}esJ4JNqh16i>Fh-HOA0t2Dbh2jyUwGcYOQ/_}s_VaEfv>k2J]~3wq');
define('NONCE_SALT',       'CXknF:jMb/$sgjC#w`o(CN.pEW_D^+hNB?%g.S?J.sU/|KK{]N*>J1t/*{ue:1!F');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
