<?php
define('WP_CACHE', true); // WP-Optimize Cache
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
define( 'DB_NAME', 'chalets_eddess' );
/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'chalets_eddess' );
/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'y0v7eNF&amp;amp;#+' );
/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'sql-server.k8s-c9q1v5c0' );
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
define( 'AUTH_KEY',         'mwY5ov>})=_nWj=,(%M(QM2.%#hf2UQM0gi}EIz[xkLEc~+7$91eTgeI6a2EhvLP' );
define( 'SECURE_AUTH_KEY',  'mo<?73cDD+rIl<578|ezhJ7rg{Q38@!fT|I9SfDwc,X3fmo@-&CHZY%-UbR(={t?' );
define( 'LOGGED_IN_KEY',    'aDDM4AFT,u1v00$(`Pw)NlvB}30-r)/7R:B:Sw6d8zn-2<7B-om>=lzS]5bpy<BR' );
define( 'NONCE_KEY',        ']q.[{7 5DQ4#Vlk%(&Pf|UjG 5W8O7<WzSsJKne=jM?Ay@)r&CvMuu*z(jx$;C*T' );
define( 'AUTH_SALT',        'J9?&~>;dak:ND-_]`re6VS(%.dB @;x:yZG4;R*|Q3za+,bTg|[tZi.4e,wC6@l:' );
define( 'SECURE_AUTH_SALT', 'Ugw*W}35~Vf+&G{_$)vM+zSzy;vs[4`4+_FxOSQ=y_Gmc2c><$O3=<QdXE!{rl}3' );
define( 'LOGGED_IN_SALT',   '_A3ku.^p3@|6&U-XiF1ca8EL_+Q<i9%[Y>[mL0Wm{k$RYIu]c~g8J=Se5v&vBx:b' );
define( 'NONCE_SALT',       'aL3xm5sF4Cu;h<P]5mc];!]y~*o:$d>Ry~TxqZK/{.TLbrQ42Bx)Re5(`7CZQ(/C' );
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