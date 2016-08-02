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
define('DB_NAME', 'ponto-db');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '2s6V^b|50qO+XC7vA&}t%-]KWa8cLy`pJ5P;C&%b*m[p~qq;6!AY:Q9Mc*zlqSB`');
define('SECURE_AUTH_KEY',  ')[ccpimE}m_$m&Iw]u;[nkXEc,Opb4soymbb$!3vAHHA(2M^jY_+t]^ed6X)LEc<');
define('LOGGED_IN_KEY',    '&!OI#MJYT@6@@;NY+H>`cqJ`a*%{$|LQ2rxLxNC^3n+*^`zId*ifJRlbg1AlZgzo');
define('NONCE_KEY',        'ouU[je8Q3PLrfA(>o;S.r_Wh``30=P73c7/q5.;%whW*B~`N.`*9qF[KAtkp:4l2');
define('AUTH_SALT',        '!dmpj;)Ny_XVH:(fUwnQS.1X4KWPMO{kPz/t_tc4Ihu]VVRUuD)IO.S(#_Wa8dUe');
define('SECURE_AUTH_SALT', 'qHqla)aMZv~o]%1^FI:X|SvYHuSoO_ep0ARz21G5j]t~Rb0tsU0RL7LwIo`?.g$P');
define('LOGGED_IN_SALT',   '/)1tk#Oc]7LR)wJma3cTK469#,;)0}co{J{WB?FR5<=}%7`*?1/0tq3lcAq{=),h');
define('NONCE_SALT',       '3]ty|whk_{k|P? nchb&:KhRNKnq7Ni(H?QN:w{QA>]W)Gj.w@1T(0kzS*,sg1W@');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'mmgv_';


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
