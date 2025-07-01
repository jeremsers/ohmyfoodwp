<?php
/**
* Template Name: Restaurant
*/

get_header();

?>
<!-- le contenu de la page  -->
<?php get_template_part('template-parts/restaurant/hero'); ?>
<?php get_template_part('template-parts/restaurant/tabs'); ?>
<div class="info-tab-container active-tab">
<?php get_template_part('template-parts/restaurant/esprit'); ?>
<?php get_template_part('template-parts/restaurant/info'); ?>
<?php get_template_part('template-parts/restaurant/temoignages'); ?>
</div>
<div class="menu-tab-container inactive-tab">
<?php get_template_part('template-parts/restaurant/menu'); ?>
</div>


<?php

get_footer();
