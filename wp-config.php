<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Otraining' );

/** MySQL database username */
define( 'DB_USER', 'training' );

/** MySQL database password */
define( 'DB_PASSWORD', 'training1234' );

/** MySQL hostname */
define( 'DB_HOST', 'ec2-3-86-149-137.compute-1.amazonaws.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'p/Q72!hM0-Oa^)!r8cX7cRYew|FU%53U`P>)3aF|l_-l(4Xs$UF^X{C<F|BUW0kS');
define('SECURE_AUTH_KEY',  'AiK|bLT+4QXW1O<-yqQ+r%W&>+~.x#khv+h03;4tGnGLy)J&)?aZ=?w)pv4p=*)h');
define('LOGGED_IN_KEY',    'Sxa~2r|`hWn-<j;:e-P=F%K!FQT6B =<1Y|Iv$YM0g#Q&Z}VN+X+a5MaI}lkj$|x');
define('NONCE_KEY',        'r6Q`}*Q,oT+wQW0 G~D$?$JfaWuEv/Ul2k9]J}Zc3-{e4F@o(*:}?510I^U$,.3Y');
define('AUTH_SALT',        '+>6{aZz|@zV wf>mxBS.Dgwg_xye/c1aE7yAgm5R*P_h?O0WpAZL|y<FL%L|FKSL');
define('SECURE_AUTH_SALT', 'TO1@)Irkk`GDA;HFZLHxUeaX7uLfp]$E:wdx4k5r25EQ~?xOrN8Yz(jm!5-?tS~|');
define('LOGGED_IN_SALT',   ')~fT{i%?rM.VoLF/xJn|Z&{ hzV8jprn*b7Pr!|$cE({:Zdv0(lmDk^[~qxOdBp+');
define('NONCE_SALT',       '47Dr-<,|K$_.B%/G YQ0jSl$}M;nw{:L,(9AE1+aqJFr`/8w|DbpB/(WFS!Lwzj@');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

// https://www.php.net/manual/fr/function.rtrim.php
define('WP_HOME', rtrim('http://localhost/otraining/wp_Otraining/', '/'));
define('WP_SITEURL', WP_HOME . '/wp');
define( 'WP_CONTENT_URL', WP_HOME . '/content' );
define( 'WP_CONTENT_DIR', dirname( ABSPATH ) . '/content' );

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/*
Sachant que WordPress ne nous permet pas de gérer l'environnement dans lequel est exécuté notre WordPress, nous mettons la fonctionnalité en place nous-même en créant une constante qui n'est comprise que pas notre code.
*/
define( 'ENVIRONMENT', 'development' );
// define( 'ENVIRONMENT', 'staging' );
// define( 'ENVIRONMENT', 'production' );
/**
 * Additionnal configuration constants
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php
 */
if ( defined( 'ENVIRONMENT' ) ) { // Je vérifie que la constante ENVIRONMENT existe
    if ( ENVIRONMENT === 'development' ) {
        define( 'WP_DEBUG_DISPLAY', true ); // Affichage des erreurs PHP/WordPress directement dans le code HTML
        define( 'WP_DEBUG_LOG', false );
        define( 'DISALLOW_FILE_MODS', false ); // Activation de l'ajout des fichiers de traduction, thèmes et plugins
        define( 'FS_METHOD', 'direct' ); // Activation du téléchargement direct des fichiers de traduction, plugins et thèmes
        define( 'WP_POST_REVISIONS', false ); // Désactivation du sytème de révions des contenus
        define( 'SCRIPT_DEBUG', true ); // Activation du débogage des CSS et JS de WordPress
        define( 'EMPTY_TRASH_DAYS', 0 ); // Désactivation de la corbeille
    } elseif ( ENVIRONMENT === 'staging' ) {
        define( 'WP_DEBUG_DISPLAY', false );
        define( 'WP_DEBUG_LOG', true ); // Ecriture des erreurs PHP/WordPress dans un fichier de log
        define( 'DISALLOW_FILE_MODS', true ); // Désactivation de l'ajout et des mises à jour des thèmes et plugins dans le backoffice
        define( 'WP_POST_REVISIONS', 10 ); // Limitation du nombre de révions des contenus
        define( 'SCRIPT_DEBUG', false );
        define( 'EMPTY_TRASH_DAYS', 60 ); // Limitation du nombre de jours de conservation des contenus dans la corbeille
    } elseif ( ENVIRONMENT === 'production' ) {
        define( 'WP_DEBUG_DISPLAY', false );
        define( 'WP_DEBUG_LOG', true );
        define( 'DISALLOW_FILE_MODS', true );
        define( 'WP_POST_REVISIONS', 10 );
        define( 'SCRIPT_DEBUG', false );
        define( 'EMPTY_TRASH_DAYS', 60 );
    } else {
        echo 'La valeur de la constante ENVIRONMENT n\'est pas valide. Les valeurs possibles sont development, staging ou production.';
        exit;
    }
} else {
    echo 'La constante ENVIRONMENT n\'est pas définie.';
    exit;
}
define( 'DISALLOW_FILE_EDIT', true ); // Désactivation de l'éditeur embarqué de thèmes et plugins
define( 'AUTOMATIC_UPDATER_DISABLED', true ); // Désactivation des mises à jour automatiques de WordPress
define( 'WP_AUTO_UPDATE_CORE', false ); // Désactivation des mises à jour du cœur de WordPress
/* That's all, stop editing! Happy publishing. */

//JWT
define('JWT_AUTH_SECRET_KEY', 's`S(+AY37!&B+-g#}y3Zj+6+.C9c1SwTrwgsrfauSrYVa!L?PVU+_^J%eB@+C;GY');
define('JWT_AUTH_CORS_ENABLE', true);

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
