<?php
get_header(); ?>

<div class="alert alert-success container">
    <strong><?php _e( 'page-history.php', 'lazy_days' ); ?></strong>
</div>
<section class="mt-4">
    <div class="container">
        <h1 class="display-4 text-center pb-5"><?php echo get_theme_mod( 'page_title', __( 'Heritage', 'lazy_days' ) ); ?></h1>
        <img src="<?php echo wp_get_attachment_image_url( get_theme_mod( 'page_image', 'assets/olivier-collet-417248-unsplash.jpg' ), 'normal' ) ?>" class="d-block mx-auto polaroid-images w-75">
        <article>
            <div class="row pt-3">
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <div <?php post_class( 'two-columns pt-3 dropcap' ); ?> id="post-<?php the_ID(); ?>"> 
                            <?php the_content(); ?> 
                        </div>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'lazy_days' ); ?></p>
                <?php endif; ?>
            </div>
        </article>
    </div>
</section>            

<?php get_footer(); ?>