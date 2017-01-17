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
define('DB_NAME', 'tomio');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'vertrigo');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '{TG#}%=N]S=Mwxm{X+.K2Fw<y;3!(n71!jzXXD)~#Q^I`fSm`YN|qAZ*~Z=Y!Ec_');
define('SECURE_AUTH_KEY',  'PtK0n.Ft`x`V}(hf7c0[[jRaGSv$Ek)!:0Ulp@J1ix/ 5q66jY:&@1j+M?89Atxw');
define('LOGGED_IN_KEY',    'e{ALcV[Z_}F}33m<?VC$F}FW{s!+R=6FG**Kb>B{>)ut>V] !q}Y-VxDuo%zlSgD');
define('NONCE_KEY',        '(`BWE,cc!&Oh[W>&aG%u4/2U<;-.BY%1R*?K+P*vyEpjU 2Dp<koZ.#ot;Dq0gTp');
define('AUTH_SALT',        'T0itps!5YeFJ,i.$w{wYxT6`U9XJ3tEW<@6|A8&_~EjNhq jQrPV`eS64m-XJv[w');
define('SECURE_AUTH_SALT', 'E|[di>B0P;s.0~R2)MZn!skF42P!Smua<ok!}@#}Yy^e@.>^Pl*=8$n}y7j3>r^:');
define('LOGGED_IN_SALT',   'Kp9Mj,04S~010{2&O4L&|JqYB,%W:N><*P0y7r]v}W [zB){.}PMUTR3mv`2>`PV');
define('NONCE_SALT',       './;ixX5vb+kB]:OILF4#2Og#]S]I/02;Ammhz&*rAZ9`o@tSfc1xQVl{VV=ixn$[');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wpxyz_';

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
