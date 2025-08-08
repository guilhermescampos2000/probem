<?php get_header(); ?>
<main id="primary" class="site-main">
    <div class="container single-post-container">
        <?php while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                    <div class="entry-meta">
                        <span class="posted-on">Postado em <?php echo get_the_date(); ?></span>
                        <span class="byline"> por <a class="url fn n" href="#"><?php the_author(); ?></a></span>
                    </div>
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="post-thumbnail"><?php the_post_thumbnail('large'); ?></div>
                    <?php endif; ?>
                </header>
                <div class="entry-content"><?php the_content(); ?></div>
                <footer class="entry-footer">
                    <?php if ( get_the_tag_list() ) : ?>
                        <div class="tags-links"><?php echo get_the_tag_list( '', ', ', '' ); ?></div>
                    <?php endif; ?>
                </footer>
            </article>
            <?php if ( comments_open() || get_comments_number() ) : comments_template(); endif; ?>
        <?php endwhile; ?>
    </div>
</main>
<?php get_footer(); ?>