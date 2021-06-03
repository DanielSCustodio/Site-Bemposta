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
define( 'DB_NAME', 'bemposta' );

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
define( 'AUTH_KEY',         '>>^:Cko|x9LQQ_cT%[RlL9AdV<E3qny?LcO^_yc;QG?Mk,<CJZU9Q7Q-`%9TNe+j' );
define( 'SECURE_AUTH_KEY',  'zImGl?4;Lszd5AMlH32d *PF,B({KlD~5eN{]vKf/l0^U)R^&x4zTq9/x02f,yy8' );
define( 'LOGGED_IN_KEY',    ';f3;1,CXbE2{T`_6wl~WzQ*uNwHN|pI#oc6A[,7?%8,BO(RT]?JDY$j~~:|O9=sa' );
define( 'NONCE_KEY',        '8x+[nI.`CPgH~pJCYVy~IYCM0bfx/:{tb(%w3i|;~k>:.C2~oPEZEypPlU#Wg_wV' );
define( 'AUTH_SALT',        'gjlcBQ^gcvHl7uh%iz`OaztsFqFB9Dgt&6VZ@b!o^1S?6_Xnsk3lUOy>o{n09/61' );
define( 'SECURE_AUTH_SALT', '1F -zuQnz?v~Y3qZiZEL*Do$o<s1!5Q%9&vPfyhEqfRDDEFp)06C&pbXfF}}YN);' );
define( 'LOGGED_IN_SALT',   'uyUy3x^5?t5V>?8>SQ*5KvDPP;^q_]!U;RX}g`sG_pxQ4S<iXJ|$G%v(lfe--n68' );
define( 'NONCE_SALT',       '>oUfp|`!C,>,nw@63M<kAKz{Z)GI:UgZ^*np0}Axvi+$J#i[]A=zU{>T7^:<5dK]' );

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
