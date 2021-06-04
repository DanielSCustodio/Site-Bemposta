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

define('FS_METHOD', 'direct');

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'site-bemposta' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'cVaK!{g3NOvqM3c(Y</*YwyNO9@e&*lrvlBKun?mef-737}Ts~Ob=fn$;Uc1*T,f' );
define( 'SECURE_AUTH_KEY',  'b05^kPt{p/ynj9}ByMTVj5]HWkNV@sa9w]Lx%7U<v*ftqQtE?3K=qtE]Uh8RJ2sI' );
define( 'LOGGED_IN_KEY',    'ot.,X~lVsBBhBQq,>LW|4Vd2t%p&Mw_`iP<px0sd,-N8Bf7ke,E|%4:{lh+vLD`f' );
define( 'NONCE_KEY',        'S$CNp8TO.p]lD/me*.$Q uFWD4?;:>2!yg(qial3{m7MX>imHS?@?htAFyR]N+;8' );
define( 'AUTH_SALT',        'I%CDfbM!2Yuudiu=rIY;*R*#O8I=JLlO%t4r!$2h;1M&kDpAJK`}@xerFO]0@,af' );
define( 'SECURE_AUTH_SALT', ' pwDyn=OBi=)qtFn*lr],k>8SXf^r{4gpL*sK`O<mk&T.Dvpl2QH%yM;*{1Et5l)' );
define( 'LOGGED_IN_SALT',   'O^!S_MTfhweH`Vs0=tmH6N*U-cZyp(3JY,6ZeatbK<jpX+bKq,>5jhy;}WgMS^.f' );
define( 'NONCE_SALT',       'mf;$}S8T?zdQy*{)9kgG`nfS1t(Pc@KC-|0^R)P}lFIjKBTdvu%q^!:hd49Y@0Ee' );

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
