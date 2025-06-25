<?php
/**
* Template Name: Restaurant
*/

get_header();

?>
<!-- le contenu de la page  -->

    <div class="entry-content">
		<p>Bienvenue sur notre site !</p>
		<p>Ceci est un exemple de contenu pour votre page d’accueil. Vous pouvez y présenter votre entreprise, vos services ou toute information pertinente pour vos visiteurs.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ullamcorper, lorem nec facilisis vehicula, nunc magna pharetra urna, vitae consequat libero dolor non orci. Donec id sapien in lorem faucibus fermentum.</p>
		<?php
		/* 
		Vous pouvez ajouter ici un bouton ou un lien pour diriger les visiteurs vers une page spécifique.
		Par exemple, un lien vers une page "À propos" :
		*/
		?>
		<p><a class="btn" href="<?php echo esc_url( home_url( '/a-propos/' ) ); ?>">A propos</a></p>
	</div><!-- .entry-content -->

<?php

get_footer();
