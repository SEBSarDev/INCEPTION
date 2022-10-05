<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

  define( 'DB_NAME', getenv('WP_DATABASE') );

/** Utilisateur de la base de données MySQL. */
 define( 'DB_USER', getenv('WP_USER') );

/** Mot de passe de la base de données MySQL. */
 define( 'DB_PASSWORD', getenv('WP_PWD_USER') );

/** Adresse de l’hébergement MySQL. */
 define( 'DB_HOST', getenv('WP_HOST_NAME') );

/*********
 * define( 'WP_HOME', getenv('DOMAINE_NAME') );
/*********
 * define( 'WP_SITEURL', getenv('DOMAINE_NAME') );
/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
 define( 'DB_CHARSET', 'utf8' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+;om-!0qX}f<h[y}z`qHF/]4+K+~z_(xhk}+`++ ;If{-`db}>SY24q{6mE] 2)-');
define('SECURE_AUTH_KEY',  '=M+x|-R38-s,f07~qh0mlHIM(rQfi3bkduM_1)db4<O9&]qc[ZyTT+n]?n+mfeTP');
define('LOGGED_IN_KEY',    'hJ<rn@y(YB<xg+u|({`e|+|Avv`HC#?f(QZ=Ah^Y&4VE =eER0:twSZ;651Y$8{2');
define('NONCE_KEY',        ']Sec*NKI,|h]9}_+-thrL?WFZ=kT&$./lcM:TzL8Z5%w& *z3gl+R)$e!Es>rK~j');
define('AUTH_SALT',        'O%w~ZO_yEia/Rf+zaUq2*!I/S*$:1N=oJ-h6]m!+a2d;$2aad!<J|s$7<<%NaCRx');
define('SECURE_AUTH_SALT', '4TL-F62mU[PPQsC:+6y XuGe}NB67E]%t@WV`<?MVj+OT&;Xe[pGC^<tCI{MRQ;^');
define('LOGGED_IN_SALT',   '<v{6d]+J>zOQbEw5YX^M.aL}69?zVooFzE&^@D&#g<]}z7e2]#PWFRY|D( s6CqW');
define('NONCE_SALT',       '*$wgkYDcD2THFm=#)0)9]zjq4LntdR{s>8{Oo-~, ZiM(clsVir$P|4ln@Db29FA');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', '/tmp/wp-errors.log' );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
