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

	<footer id="colophon" class="site-footer">
	<?php 
		// Inclusion d'un template part pour les widgets du footer.
		// Le fichier 'footer-widgets.php' situé dans le dossier template-parts/footer/
		// contient le code qui affiche les zones de widgets du pied de page.
		// ce contenu est modifiable dans l'administration de WordPress, dans Apparence > Widgets.
		get_template_part( 'template-parts/footer/footer-widgets' ); 
	?>
	<div class="copyright">2025 ohmyfood</div>

	</footer><!-- #colophon -->

</div><!-- #page : Fin du conteneur principal de la page -->

<?php 
// Permet à WordPress et aux plugins d'insérer du code avant la fermeture de la balise </body> (scripts, etc.)
wp_footer(); 
?>

</body>
</html>
