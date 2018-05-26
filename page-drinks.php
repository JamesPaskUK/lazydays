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
                <button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal1">
                    <?php _e( 'Label', 'lazy_days' ); ?>
                </button>                             
            </article>
        </div>
        <div class="row">
            <?php
                $drink_args = array(
                	'post_type' => 'drink',
                	'nopaging' => true,
                	'order' => 'ASC',
                	'orderby' => 'date'
                )
            ?>
            <?php $drink = new WP_Query( $drink_args ); ?>
            <?php if ( $drink->have_posts() ) : ?>
                <?php $drink_item_number = 0; ?>
                <?php while ( $drink->have_posts() ) : $drink->the_post(); ?>
                    <article class="card card-body col-4<?php if( $drink_item_number == 0) echo ' first'; ?> <?php echo join( ' ', get_post_class( '' ) ) ?>" id="post-<?php the_ID(); ?>">
                        <a href=""> <?php
                                if ( has_post_thumbnail() ) {
                                    the_post_thumbnail( 'normal', array(
                                	'class' => 'img-fluid rounded'
                                ) );
                                }
                             ?> <h2 class="mt-2"><?php the_title(); ?></h2> </a>
                        <div></div>                                     
                    </article>
                    <?php $drink_item_number++; ?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'lazy_days' ); ?></p>
            <?php endif; ?>
            <article class="card card-body col-4">
            <a href="">
                    <?php $image_attributes = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ) );
if( $image_attributes ) : ?>
                    <img src="<?php echo $image_attributes[0]; ?>" class="img-fluid rounded" width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>">
                <?php endif; ?>
                <h2 class="mt-2"><?php _e( 'Drink Name', 'lazy_days' ); ?></h2>
                </a>
                <div></div>                             
            </article>
            <article class="card card-body col-4">
            <a href="">
                    <?php $image_attributes = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ) );
if( $image_attributes ) : ?>
                    <img src="<?php echo $image_attributes[0]; ?>" class="img-fluid rounded" width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>">
                <?php endif; ?>
                <h2 class="mt-2"><?php _e( 'Drink Name', 'lazy_days' ); ?></h2>
                </a>
                <div></div>                             
            </article>
        </div>
    </div>
</section>            

<?php get_footer(); ?>