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
define( 'DB_NAME', 'wordpress_cousteau' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         '|x?|)P)iHq{QJg:Y#x!ooc7TbZa]0Zyh_vkO4d/~2DCV,)uKN{2/>LNOF5Vl2_Ns' );
define( 'SECURE_AUTH_KEY',  'JumCWL&K([nHG:(O5nI7)u4+**4gEN},1daSi`1cmH1@ZC&uq^r8N i6JmK(SR_C' );
define( 'LOGGED_IN_KEY',    ' 4>CDDSPnmxL1ng|}xA?loaua~?i]`j#/YxKd8(w,fZzLFMc?QqPSv6I./#4P.}a' );
define( 'NONCE_KEY',        'NAmk!p)RPK^ENkbeK(sR!Q8GGko hLwQa$N=gdptnH1p<+C5Me XE2dDEkC;>]!d' );
define( 'AUTH_SALT',        'y{crRnjvkU-^LRy@i>>E$U 2Qh@DhWKb@f{Z|-kUV)$&,`T-Q95Lsa(?d]ZKu.p`' );
define( 'SECURE_AUTH_SALT', '6zh<som*1;Ou(y*Ic0!~*dH|<N#Ba7h6=?R5=Q~%tlElf9e4X40 #S@%*1wPN/}+' );
define( 'LOGGED_IN_SALT',   'xZW.XxfE}TA%<-}(?SowXt2#|qm0G:s2<&]X&jXF/{[iC uSMYEY)}br. 5z#!{u' );
define( 'NONCE_SALT',       '[;+?*W@[u$C+j1(p,NQ=k?F[biDZ{xiu,(cH{BIV?^Nmcc->dDcou&]o.Y;@&HaR' );
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
