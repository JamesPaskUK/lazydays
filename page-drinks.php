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
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                            <?php
                                if ( has_post_thumbnail() ) {
                                    the_post_thumbnail( 'normal', array(
                                	'class' => 'img-fluid'
                                ) );
                                }
                             ?>
                            <h2 class="mt-2"><?php the_title(); ?></h2> 
                            <?php the_content(); ?> 
                        </article>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'lazy_days' ); ?></p>
                <?php endif; ?>
            </div>
            <div class="card-columns">
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
                        <div <?php post_class( 'card rounded shadow' ); ?> id="post-<?php the_ID(); ?>">
                            <?php
                                if ( has_post_thumbnail() ) {
                                    the_post_thumbnail( 'normal', array(
                                	'class' => 'card-img-top img-fluid drink-image'
                                ) );
                                }
                             ?>
                            <div class="card-body">
                                <h4 class="card-title"><?php the_title(); ?></h4>
                                <p class="card-text"><?php echo get_field( 'description' ); ?></p>
                            </div>
                            <div class="card-footer">
                                <a href="<?php echo esc_url( get_permalink() ); ?>">
                                    <button type="button" class="badge-pill badge-info btn">
                                        <?php _e( 'Nutritional Info', 'lazy_days' ); ?>
                                    </button>
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