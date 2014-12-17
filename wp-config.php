<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'matthieuposnic_made');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', '91428');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'matthieu78');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'mysql1.alwaysdata.com');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ':IS7,CJEZ%SASf2b;{q1zm#fu_ZU#76c%)lK:wlY3yau-{N_1.WZZwn~:!o%.h00');
define('SECURE_AUTH_KEY',  ' 7WmDPCI|afTnC-}vU>{kLWx4a?6wLw.aQdW~r3siq.-E+`uAs4;)8QcE]j3UBfv');
define('LOGGED_IN_KEY',    'S[J;e_9)$:<F3z,M0~B6moKp*|C0j*~bT$x.z*UdE25n,.jw.!y^K)Vw:Ts~n<zc');
define('NONCE_KEY',        '4ly2[!JLoFhJl/y$c uuPW.i`a=r)Lj$]*8b;cluxBhaXUFH0G dbaPN0JdE5+Qt');
define('AUTH_SALT',        'JRN(BFt/EKg5l6W|+qqVT}%RS-jbd_ ++NU,%*m,oO#H|.Yh_e0Z{[J7|AG0SM_!');
define('SECURE_AUTH_SALT', 'scS/O3x?+/G59A5hqY!~2qg+2cnmRH-,n9!e5uWJ]Vy%Em.yUh jow$;8o)nF*BE');
define('LOGGED_IN_SALT',   'DM3<Gd+L59N>.!>|5+3-%GTF$bR}{>pb9AfcI(L+,IW+d5Yx)[<&G4DQx[jD9F~]');
define('NONCE_SALT',       't]W~#jFn$*+nEM#b)tCDG:7*AF<{#5=TmY wIT v5^LCZb&Vjw79:$KzTZalh649');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');