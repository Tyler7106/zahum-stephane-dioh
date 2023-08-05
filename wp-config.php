<?php
define( 'WP_CACHE', true );
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'capitaine' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '0b@!zuln[sHhT`lX<0&BmKQ7Z<tR;hPE/mHraQ:-+tIno>jjROG]owt`Ar!t~5S$' );
define( 'SECURE_AUTH_KEY',  'rvu5hP!A)fT$@OQ8,yW}Xwq?+=5_{GfyN[fE~PVY~~-d`$Ri3I/R}_$zjVLIqEe4' );
define( 'LOGGED_IN_KEY',    '0Nj%[+U7P<A}:>JZ-]{3P@|.OpLMY{bp@^c`T.#ZN}CIV)%eEFv,X<o;,`nk%XK<' );
define( 'NONCE_KEY',        'H$~l)w&76CUT4m077?~em25)6?WM/#rG|,HGw>[p@zMo3p6=dV+oro.qvD_t}w<!' );
define( 'AUTH_SALT',        '},8!?[F^,hpwWa)$=~~Tg4HWPq7SB&yuH]xrCP,&R~NGQKcN32aSj.+pym.%Zv(p' );
define( 'SECURE_AUTH_SALT', 'v^$^F: Nl/ZR42O)%[~|vH!Mn(wr1b@LG[R}d)P`f-@vI{Ax-vZ*_RG^FF(uz5J<' );
define( 'LOGGED_IN_SALT',   'JDS5Q!&nQ_|0cB{rAdD{Dl s4%<B}bVDUb6[}-$cUv->/]8RpL=f+|W8w614e8jU' );
define( 'NONCE_SALT',       'b5$:g1nD&P:!Hj@p#C3 _;ZUK,D0kT8)C@rMPcO$|1f~g#ll 9.AGPMP:klf0I.v' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
