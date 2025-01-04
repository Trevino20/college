<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'vbf' );

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
define( 'AUTH_KEY',         '#,coSL:BaVGUg*5Y_j47iLbix~+}29=0%<=tl.:ztQS7hgD^C/<4(GA};,}nKa@V' );
define( 'SECURE_AUTH_KEY',  ')YN0I,Sp)8 {ahn&^QP-Wf6dCrET;X?uHl+:U0(efz|P3G<Y:{L`?dw(kxh#`IJ*' );
define( 'LOGGED_IN_KEY',    'AWiL1`qv-mlO@8)p&[qPH[Z/z<qEFw=vC]R*1/&)84qzY6E0ZnCt`@f{jaYB_pGO' );
define( 'NONCE_KEY',        'zU^*2Vfc|Cl#WM3Inh*v0~HucYI6$6r MR-vHmi{5VtB[@{m0Q6e5u}.s.]X8GPT' );
define( 'AUTH_SALT',        'DZnXe1D?+>)m]l<M&:?ty--<$,|8VCng>>L}U}ip}t3ac#7([^Pr$m ~VAgMBGYD' );
define( 'SECURE_AUTH_SALT', 'Tv7mHJQEb>=K940fGtH~HcCgx*U<y+/CBdF__f,j@$?SV/]J}f}NJ3eBg0S_K]8]' );
define( 'LOGGED_IN_SALT',   'Zw%Z<SlE_77NEeGmq4RP8awd-c3dRr3S3cv<?5ZU@)_/i$.F{s@ {mA}U{]?Aa[|' );
define( 'NONCE_SALT',       '0xP~:-#{=i*bE+gOy!3d6kc;!zB0Q0{<G*2tbLPrjI}|$6Up*w0[9l}U,;0&DMww' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
