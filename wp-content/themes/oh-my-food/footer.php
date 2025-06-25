<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
?>
			</main><!-- #main : Fin de la zone principale de contenu -->
		</div><!-- #primary : Fin de la zone principale (contenu) -->
	</div><!-- #content : Fin du conteneur global du contenu -->

	<!-- Newsletters -->
	<div class="newsletter-box">
		<p class="newsletter-title">TITRE</p>
		<p class="newsletter-text">
			TEXTE
		</p>
		<!-- Appel via un short code a contact form 7, attention ça doit correspondre a votre newsletter -->
		<?php echo do_shortcode( '[contact-form-7 id="8cccb11" title="Formulaire newsletters"]' ); ?>
	</div>
	<?php 
		// Inclusion d'un template part pour les widgets du footer.
		// Le fichier 'footer-widgets.php' situé dans le dossier template-parts/footer/
		// contient le code qui affiche les zones de widgets du pied de page.
		// ce contenu est modifiable dans l'administration de WordPress, dans Apparence > Widgets.
		get_template_part( 'template-parts/footer/footer-widgets' ); 
	?>

	<footer id="colophon" class="site-footer">
		<?php 
		// Si un menu est assigné à l'emplacement 'footer', on l'affiche.
		if ( has_nav_menu( 'footer' ) ) : 
		?>
			<nav aria-label="<?php esc_attr_e( 'Secondary menu', 'twentytwentyone' ); ?>" class="footer-navigation">
				<ul class="footer-navigation-wrapper">
					<?php
					// Affiche le menu de l'emplacement 'footer'
					// 'items_wrap' définit le format d'affichage des éléments de menu sans conteneur additionnel.
					// 'container' à false signifie qu'aucune balise container ne sera générée autour du menu.
					// 'depth' à 1 limite l'affichage aux éléments de premier niveau.
					// 'link_before' et 'link_after' ajoutent des balises <span> autour de chaque lien.
					// 'fallback_cb' à false empêche l'affichage d'un menu par défaut si aucun menu n'est assigné.
					// ce contenu est modifiable dans l'administration de WordPress, dans Apparence > Menus.
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'items_wrap'     => '%3$s',
							'container'      => false,
							'depth'          => 1,
							'link_before'    => '<span>',
							'link_after'     => '</span>',
							'fallback_cb'    => false,
						)
					);
					?>
				</ul><!-- .footer-navigation-wrapper : Conteneur de la navigation du footer -->
			</nav><!-- .footer-navigation -->
		<?php endif; ?>

		<div class="site-info">
			<div class="site-name">
				<?php 
				// Vérifie si le site a un logo personnalisé.
				// S'il y en a un, affiche-le ; sinon, affiche le nom du site.
				if ( has_custom_logo() ) : 
				?>
					<div class="site-logo"><?php the_custom_logo(); // Affiche le logo personnalisé ?></div>
				<?php else : ?>
					<?php 
					// Si le nom du site existe et que l'affichage du titre et slogan est activé dans les réglages,
					// affiche le nom du site. Pour la page d'accueil sans pagination, le nom est affiché en texte simple,
					// sinon il est affiché en tant que lien vers la page d'accueil.
					if ( get_bloginfo( 'name' ) && get_theme_mod( 'display_title_and_tagline', true ) ) : 
						if ( is_front_page() && ! is_paged() ) : 
							bloginfo( 'name' );
						else : ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
						<?php endif; 
					endif; 
					?>
				<?php endif; ?>
			</div><!-- .site-name -->

			<?php
			// Affiche le lien vers la politique de confidentialité si la fonction existe.
			if ( function_exists( 'the_privacy_policy_link' ) ) {
				the_privacy_policy_link( '<div class="privacy-policy">', '</div>' );
			}
			?>

			<div class="powered-by">
				<?php
				// Affiche le message "Proudly powered by WordPress" avec un lien vers wordpress.org.
				// La chaîne est traduisible grâce à la fonction esc_html__ et au domaine de texte 'twentytwentyone'.
				printf(
					/* translators: %s: WordPress. */
					esc_html__( 'Proudly powered by %s.', 'twentytwentyone' ),
					'<a href="' . esc_url( __( 'https://wordpress.org/', 'twentytwentyone' ) ) . '">WordPress</a>'
				);
				?>
			</div><!-- .powered-by -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page : Fin du conteneur principal de la page -->

<?php 
// Permet à WordPress et aux plugins d'insérer du code avant la fermeture de la balise </body> (scripts, etc.)
wp_footer(); 
?>

</body>
</html>
