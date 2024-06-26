<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_skeleton' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '7Nz5xK;>f%_3~Jj!46$j>z@C%Ls`6QbM=,]CfA<=fsnxp 8?A_SasWo~FV-5&;z#' );
define( 'SECURE_AUTH_KEY',  '8}[v~~~D_yJui(-k/r=`/m$)Ipz#<wU$/Mo8Z/~6y}Pc)!_l4]Aj~WA,k/nsR<`;' );
define( 'LOGGED_IN_KEY',    '#ma}&LxOpE`j=%:r]h@p;;#bA<NU#Uq8?PmReBa9t)kisVIulG`m<19{5mn.K_1^' );
define( 'NONCE_KEY',        'krS5+G}4=aKrE|J,Yo$BP2<1L!_wU+V.u^$:w>VXbEGDjL3!I4>Oy|*CM*~k8Wp~' );
define( 'AUTH_SALT',        'Srr7AYxpEkOQI=i&b5%9Cy>i@UGH%B~&/.wnI/](fNLLx|N,6WmKukFsm[b0Y~=W' );
define( 'SECURE_AUTH_SALT', '3UGZK}w*]43J>oAZ,)V7:mNElY_#,MQwbUS0>w1C_cP+EsF)11Jg8Q}R`p[bmv7I' );
define( 'LOGGED_IN_SALT',   'rP_1k.F,BQd1h+83u$XWR,fXv/UYe>kdaA7A }1dbV3Ih7+BpM[Axi.2:nwPaY?N' );
define( 'NONCE_SALT',       'R6{@(=2@QgTOg-tLN.4(rG:N4Rm]qdlx%>5:4~jL}+gfDVOc]9c5hePN+CiXaNvr' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'itsoul_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */

/* SSL */
//define( 'FORCE_SSL_LOGIN', true );
//define( 'FORCE_SSL_ADMIN', true );


/* Specify maximum number of Revisions. */
define( 'WP_POST_REVISIONS', '2' );
/* Media Trash. */
define( 'MEDIA_TRASH', true );
/* Trash Days. */
define( 'EMPTY_TRASH_DAYS', '10' );


/* Multisite. */
define( 'WP_ALLOW_MULTISITE', false );


/* WordPress debug mode for developers. */
define( 'WP_DEBUG',         false );
define( 'WP_DEBUG_LOG',     true );
define( 'WP_DEBUG_DISPLAY', false );
define( 'SCRIPT_DEBUG',     false );
define( 'SAVEQUERIES',      false );


/* PHP Memory */
define( 'WP_MEMORY_LIMIT', '64M' );
define( 'WP_MAX_MEMORY_LIMIT', '256M' );


/* WordPress Cache */
define( 'WP_CACHE', false );


/* Compression */
define( 'COMPRESS_CSS',        false );
define( 'COMPRESS_SCRIPTS',    false );
define( 'CONCATENATE_SCRIPTS', false );
define( 'ENFORCE_GZIP',        false );


/* Updates */
define( 'WP_AUTO_UPDATE_CORE', false );
define( 'DISALLOW_FILE_MODS', false );
define( 'DISALLOW_FILE_EDIT', false );


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
