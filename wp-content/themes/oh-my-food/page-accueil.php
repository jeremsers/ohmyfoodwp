<?php
/**
* Template Name: Accueil
*/

get_header();

?>
<!-- le contenu de la page d'accueil -->

<?php get_template_part('template-parts/home/hero'); ?>
<?php get_template_part('template-parts/home/restaurants'); ?>
<?php get_template_part('template-parts/home/confiance'); ?>
<?php get_template_part('template-parts/home/popup'); ?>
<?php
get_footer();
