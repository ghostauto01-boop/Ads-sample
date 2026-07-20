<?php
/**
 * Main index file (classic PHP fallback)
 */
get_header(); ?>

<main id="primary" class="site-main wrap" style="padding: 100px 24px; min-height: 70vh;">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="margin-bottom: 40px;">
                <header class="entry-header">
                    <h2 class="entry-title" style="font-size: 28px; margin: 0 0 10px;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </header>
                <div class="entry-content" style="color: var(--muted); line-height: 1.6;">
                    <?php the_excerpt(); ?>
                </div>
            </article>
            <?php
        endwhile;
        the_posts_navigation();
    else :
        ?>
        <p>No content found.</p>
        <?php
    endif;
    ?>
</main>

<?php get_footer(); ?>
