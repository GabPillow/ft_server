<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'wordpress' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '1234' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'K Ml8DMy RW-O;`&-{(ifQ*oUZ*U#O$Uaoa}T];Ol@5+mG;H[7MGS)j>pB(o;).>' );
define( 'SECURE_AUTH_KEY',  ' irjOrQm(BH}?0@*ofOjDL0Xhb5UC|).V=w%pWHTg%E^!Z*,E/=$y7/0-Wq02Hk;' );
define( 'LOGGED_IN_KEY',    '+=]#nE|o[Jf#XP4(B6$*xsz1+Ar}I8%I(dm;AAF?N}*D-9 ^vqIk*gPb6lbk)ZZf' );
define( 'NONCE_KEY',        'G[zWxa)i!ZWo$2G=1+)A,4r~0?iz/9q<J%:N%?S@MARj{~of!eHvIo3OCw#?c9{J' );
define( 'AUTH_SALT',        '6?DIt`X=O6+t>={|JC{U#l~Q-0,p>`&-f1qZ3V<dM/hsVF:Hy>VK:!VOs,yC:f*D' );
define( 'SECURE_AUTH_SALT', '$95A{+;&W6CiW&5 5gfON;?B4#FsCUCZPa!^QrNH;r#}a)TsGX.|XJj5qrZ$m.yS' );
define( 'LOGGED_IN_SALT',   '=[I6+Sh;|B{ gPlVb;U!LPde*6N0&b*d9aAh_hrYMJySYQgyPjMu3IQgSBXnbOcw' );
define( 'NONCE_SALT',       'OQ<*JP@YL [_Roc!P5uOiHmU1JAeF^B*<qrrvy&39j^]Fx%6K}U6$lQiM17@.(J^' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

