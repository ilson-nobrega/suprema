<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'hosti093_suprema');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'hosti093_suprema');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'suprema');

/** nome do host do MySQL */
define('DB_HOST', 'inobrega.com.br');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '8M)=Tm5y+z,M(9r!9!]m{[K&r%.:tjaIET|SgD@6hPDDO! v)86iK)t4hf`K+?-[');
define('SECURE_AUTH_KEY',  'U)%$l{j ^35m10d!f|x`hfz/^Dq*wm=tx0}CJEI=+-F2-;pIx+Zk,Ee=glp{v(Xj');
define('LOGGED_IN_KEY',    'W%Yt-R(ZhuecG9$^]AJ+-OG.P>N|V2w#_HrzxH(ikgL!&CTQZed f@ll|sW|)[Y/');
define('NONCE_KEY',        'dMf5iciCA.`%B({h8%GWt2/FS(Dz5$<ytFkE-MW=xeZNx-7++a83geNn~ho# qDD');
define('AUTH_SALT',        '75a}[w4(g:(*hSNMq-~gL.6DCMH#>nX1&W.1SAyVR@Z;f.!.580HJEQkO+{&.+~6');
define('SECURE_AUTH_SALT', 'CWbFBf)~07|:`Lw:PlROb5Pe#7,DH7[O>oe4Q/aUOL:LNJu,~lLqAOM)u^yU;tOk');
define('LOGGED_IN_SALT',   ' ZwE7a:M,+~c=|GpW7gxKp`P,D.j0Ph0EjYccb}FA|$@Z<N%GNE5rj4-~oO@vvr`');
define('NONCE_SALT',       'Xgj?<&Am<,*ZD7W,3qj]hl+Q:eM}%?}QlgBj|boB8k^dyYEc4bpb8tg:2E9uqmr_');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
