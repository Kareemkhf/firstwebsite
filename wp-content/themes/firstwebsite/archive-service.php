<?php
/**
 * Archive Services Template
 */
get_header();
?>

<section style="padding: 60px 0;">
    <div class="container">
        <h1><?php esc_html_e( 'Our Services', 'firstwebsite' ); ?></h1>
        
        <div class="services-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 30px; margin-top: 40px;">
            <?php
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post();
                    ?>
                    <div class="card service-card" style="background: #2a2a2a; border-radius: 8px; overflow: hidden; padding: 30px; transition: all 0.3s ease; border-left: 4px solid #d4af37;">
                        <?php if ( has_post_thumbnail() ) { ?>
                            <div style="height: 150px; overflow: hidden; margin-bottom: 20px; border-radius: 4px;">
                                <?php the_post_thumbnail( 'medium' ); ?>
                            </div>
                        <?php } ?>
                        
                        <h3><?php the_title(); ?></h3>
                        
                        <p style="color: #999; margin: 15px 0;">
                            <?php echo wp_trim_words( get_the_excerpt(), 20 ); ?>
                        </p>
                    </div>
                    <?php
                }
            } else {
                echo '<p>' . esc_html_e( 'No services found.', 'firstwebsite' ) . '</p>';
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
