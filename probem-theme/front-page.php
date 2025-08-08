<?php
/**
 * Template Name: Página Inicial
 */
get_header(); ?>
<main id="primary" class="site-main">
    <?php
    get_template_part('template-parts/content-home-banner');
    get_template_part('template-parts/content-home-o-que-e');
    get_template_part('template-parts/content-home-missao');
    get_template_part('template-parts/content-home-como-ajudamos');
    get_template_part('template-parts/content-home-blog');
    ?>
</main>
<?php get_footer(); ?>