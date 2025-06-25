<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until <main>.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); // Ajoute des classes personnalisées au <html> ?>>
<head>
	<!-- Définit l'encodage du site selon la configuration WordPress -->
	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<!-- Configure le viewport pour un rendu adapté aux appareils mobiles -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- Permet aux plugins et au thème d'insérer des éléments dans le <head> (styles, scripts, etc.) -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); // Ajoute dynamiquement des classes CSS au <body> ?>>

	<?php wp_body_open(); // Hook permettant d'insérer du contenu dès l'ouverture du <body> (ex: messages d'accessibilité) ?>
	
	<div id="page" class="site">
		<!-- Lien pour les utilisateurs de lecteurs d'écran ou au clavier afin de passer directement au contenu -->
		<a class="skip-link screen-reader-text" href="#content">
			<?php
			/* Texte traduisible pour l'accessibilité */
			esc_html_e( 'Skip to content', 'twentytwentyone' );
			?>
		</a>

		<!-- Inclusion du fichier site-header.php situé dans template-parts/header/ -->
		<!-- 
			Ce fichier contient le code qui appelle les fonctions WordPress pour afficher le menu de navigation et le logo du header.
			Le menu est le logo est modifiable dans l'administration de WordPress, dans personalisez > identité du site.
		-->
		<?php get_template_part( 'template-parts/header/site-header' ); ?>

		<!-- Conteneur principal du contenu du site -->
		<div id="content" class="site-content">
			<div id="primary" class="content-area">
				<!-- Zone principale de contenu, marquée par la balise <main> pour l'accessibilité -->
				<main id="main" class="site-main">
