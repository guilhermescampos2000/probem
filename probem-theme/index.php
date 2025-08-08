<?php get_header(); ?>
<main id="primary" class="site-main">
    <div class="container">
        <h1 class="page-title blog-archive-title">Blog do Instituto ProbEM</h1>
        <div class="blog-grid blog-archive-grid">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="blog-card">
                    <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
                    <?php endif; ?>
                    <div class="card-content">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p class="post-date"><?php echo get_the_date(); ?></p>
                        <p><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                        <a href="<?php the_permalink(); ?>" class="link-saibamais">Leia mais</a>
                    </div>
                </div>
            <?php endwhile; else : ?>
                <p>Nenhum post encontrado.</p>
            <?php endif; ?>
        </div>
        <?php the_posts_pagination(); ?>
    </div>
</main>
<?php get_footer(); ?>