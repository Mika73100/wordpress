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

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'or2o!eupwRigGB?$#VJ$sP-#Py@bk&{P)>^inJk|UF7e)0t}YblBxVJffnojJ1RK' );
define( 'SECURE_AUTH_KEY',  '{v2DrCxi!kO&IZFQTY1L=U;8;B0%1CD|6Iw$P+vPdHYB[xNu:V&-hC)q*5-AicPO' );
define( 'LOGGED_IN_KEY',    '^rod.P{ =k[<5FTcGB2Kz?3hJ1V.Yy1-86}h:9|.$=xb~c!e5]k1QYVf?$ uYS6H' );
define( 'NONCE_KEY',        'AjY-e=#L8S;y3+a; /3*<6M8g0fsK.s!7[kS5Puk:BZb=OR!^fOk|vk3b_z-OV|5' );
define( 'AUTH_SALT',        '}F_ &j^]BIfLZDK2ZUwbCbwq}3>4y$bHM|-_U]*#Ff;N8i*jD}OQK5)y=ayn~fO)' );
define( 'SECURE_AUTH_SALT', '~LKYC(]Nm4Prv=jYazx{*#O8|@StcjPk3L)51Z}Sx8q8auo mB:{)>v({;$Wa-H6' );
define( 'LOGGED_IN_SALT',   'Fqw Zixpf+!sU(n;d7%a0*hk2t7+,a>r6k3x A-v#@%}jmu^}lE0!I$3nJemH^GC' );
define( 'NONCE_SALT',       'F-FLc-^vWJq|JL/_nb/.sI+]^+x6}>oK;?PqJX1LHX+?OH]T;#*eU|[Am:pBrnGA' );
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
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
