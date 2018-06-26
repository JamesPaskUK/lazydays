<?php
/*
 Template Name: Drinks Menu
 */
?>
<?php
get_header(); ?>

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
                    	'class' => 'img-fluid rounded'
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
                <?php $Drink_item_number = 0; ?>
                <?php while ( $Drink->have_posts() ) : $Drink->the_post(); ?>
                    <article class="card card-body col-4<?php if( $Drink_item_number == 0) echo ' first'; ?> <?php echo join( ' ', get_post_class( '' ) ) ?>" id="post-<?php the_ID(); ?>">
                        <a href="<?php echo '#drink-'.$Drink_item_number ?>"> <?php
                                if ( has_post_thumbnail() ) {
                                    the_post_thumbnail( 'normal', array(
                                	'class' => 'img-fluid rounded'
                                ) );
                                }
                             ?> <h2 class="mt-2"><?php the_title(); ?></h2> </a>
                    </article>
                    <?php $Drink_item_number++; ?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'lazy_days' ); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>            

<?php get_footer(); ?>