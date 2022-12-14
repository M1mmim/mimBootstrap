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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'teste1.0' );

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
define( 'AUTH_KEY',         'C&^U/R<o4h[%7U6Njxo2n;)IWz<W>SJ<yA-1_MEqK|gyi+J@vuCjQv%l1*&I9O6{' );
define( 'SECURE_AUTH_KEY',  'zCv@qQ?cy%/=0{~:skI{4x{Bt0;BkVckAG(~Ui7ru`VwTo]XR.,(e+ZM&4#dz!v%' );
define( 'LOGGED_IN_KEY',    'x[v)oSN#XW>&y32=?<S,blEl,o(f}c=i6h0EBlGv4$M@9NV:nH=F:1a:}AM~ru_.' );
define( 'NONCE_KEY',        ']{&ey4_oyY[=V;R E}s*l)~W~W[V$m^UM=$ZNEn-A,Z~HoFP<WO5GTi,H>STQUK:' );
define( 'AUTH_SALT',        '86cYV^&P2yh>P(Vy{`]>`*k^.R,rs]8s@kWDg)j$+GLrv|dt:=S$$+{XEEgWC7`.' );
define( 'SECURE_AUTH_SALT', '5~7j(_Ox@eev{ ]PIIL25AN-bynn|Dyz+QFt|l].|+jMDw|#G *8FllQ.Fry*c;O' );
define( 'LOGGED_IN_SALT',   'fN&OC+]`?QHy@`>wYm@Xh<v5;y+8HWv4}YA}|HNj+s|,c$Mk>&>5RPTBcyDdR}d%' );
define( 'NONCE_SALT',       'j$g.gk}7PJS@Z2uok)Zpn>T-45 pSy3FZwy,sxw%<.(R5.42>4zl}v^CIqWjB*NX' );

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
