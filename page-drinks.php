<?php
/*
 Template Name: Drinks Menu
 */
?>
<?php
get_header(); ?>

<div class="container">
    <div class="alert alert-success container">
        <strong><?php _e( 'page-drinks.php', 'lazy_days' ); ?></strong>
    </div>
    <section class="mt-4">
        <div class="container">
            <div class="row">
                <article>
                    <?php
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail( 'post_thumbnail', array(
                        	'class' => 'img-fluid'
                        ) );
                        }
                     ?>
                    <h2 class="mt-2"><?php _e( 'Our Drinks', 'lazy_days' ); ?></h2> 
                    <p><?php _e( 'We\'re proud of the quality of our drinks. Here are some of our favourites which we can make for you.', 'lazy_days' ); ?></p> 
                </article>
            </div>
            <div class="row">
                <?php
                    $Drink_args = array(
                    	'post_type' => 'Drink',
                    	'nopaging' => true,
                    	'order' => 'ASC',
                    	'orderby' => 'date'
                    )
                ?>
                <?php $Drink = new WP_Query( $Drink_args ); ?>
                <?php if ( $Drink->have_posts() ) : ?>
                    <?php while ( $Drink->have_posts() ) : $Drink->the_post(); ?>
                        <div <?php post_class( 'col-md-3' ); ?> id="post-<?php the_ID(); ?>">
                            <div class="card mb-3">
                                <a href="<?php echo esc_url( get_permalink() ); ?>">
                                    <?php
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail( 'normal', array(
                                        	'class' => 'card-img-top'
                                        ) );
                                        }
                                     ?>
                                    <div class="card-body">
                                        <h4 class="card-title"><?php the_title(); ?></h4>
                                        <?php the_excerpt( ); ?>
                                        <p class="card-text"><small class="text-muted"><?php _e( 'Last updated 3 mins ago', 'lazy_days' ); ?></small></p>
                                    </div>
                                </a>
                            </div>                                         
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'lazy_days' ); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </section>
</div>            

<?php get_footer(); ?>