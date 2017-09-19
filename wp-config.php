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
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'O>1#kfBhXi~fk.0eAO{f:jbo8YFW]i,!e;/>PziJ,/#fD@x:P37c>z0[KH*Hubq$');
define('SECURE_AUTH_KEY',  'Y#-:(q|Vok|ct3/7Rof0N8A*bz6;m,j3v(T_]J uyFe??Bsz`b`T+x1c2<r7Al)q');
define('LOGGED_IN_KEY',    'TKo&i&COc|}N8e^_[d7LqQKW,7+MmZ;>6CfNa6,!U]S:KR3BTE_;J`h&0`0]ga/*');
define('NONCE_KEY',        'XE&}#&[lL~w@r`+?Wk!K$4uZ4En*<)zOE_H%dUldo8Z5>0,z,`fKm;8Fsj)&[7MH');
define('AUTH_SALT',        'zc_pK&la&Kq]Y}{vXqhIlf80+AdrTEItlVYGXhpW4}q4])cPSh!)13ErSi$m>Agb');
define('SECURE_AUTH_SALT', 'o2`/mLqJK,p9B1R~x:?Ojo|Ma;z?,DC)_BJn4+ksS]!C^w$JvG+{o.Tmb>>]bIue');
define('LOGGED_IN_SALT',   'vvs8R4Rgfd,I+,wUYJ]ck7lRK2KNvi[gC[Q`q[{xOipLZus|gXAXT3WV+YA= R7P');
define('NONCE_SALT',       'fJ5WVM]m,L>8[Ir[vWDR2hY:Gh*R_]7A_s>`8$_Wex1;uus,g.|/A+LK@wT0>)-X');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');