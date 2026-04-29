<?php
/**
 * Index Template (Blog Posts)
 */
get_header();
?>

<section style="padding: 60px 0;">
    <div class="container">
        <h1><?php esc_html_e( 'Blog', 'firstwebsite' ); ?></h1>
        
        <div style="margin-top: 40px;">
            <?php
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="margin-bottom: 40px; padding-bottom: 40px; border-bottom: 1px solid #333;">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p style="color: #999; font-size: 14px;">
                            <?php echo get_the_date( 'F j, Y' ); ?> by <?php the_author(); ?>
                        </p>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="btn">Read More</a>
                    </article>
                    <?php
                }
            }
            ?>
        </div>
        
        <!-- Pagination -->
        <div style="text-align: center; margin-top: 40px;">
            <?php the_posts_pagination(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
