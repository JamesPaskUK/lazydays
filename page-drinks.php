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
        <?php if ( have_posts() ) : ?>
            <div class="row">
                <?php while ( have_posts() ) : the_post(); ?>
                    <article>
                        <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'post_thumbnail', array(
                            	'class' => 'img-fluid rounded'
                            ) );
                            }
                         ?>
                        <h2 class="mt-2"><?php the_title(); ?></h2> 
                        <?php the_content(); ?>
                        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal1">
                            <?php _e( 'Label', 'lazy_days' ); ?>
                        </button>                                     
                    </article>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.', 'lazy_days' ); ?></p>
        <?php endif; ?>
        <div class="row">
            <?php
                $single_drinks_loop_args = array(
                	'post_type' => 'drink'
                )
            ?>
            <?php $single_drinks_loop = new WP_Query( $single_drinks_loop_args ); ?>
            <?php if ( $single_drinks_loop->have_posts() ) : ?>
                <?php while ( $single_drinks_loop->have_posts() ) : $single_drinks_loop->the_post(); ?>
                    <article class="card card-body col-4">
                    <a href="<?php echo esc_url( the_permalink() ); ?>">
                            <?php $image_attributes = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ) );
if( $image_attributes ) : ?>
                            <img src="<?php echo $image_attributes[0]; ?>" class="img-fluid rounded" width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>">
                        <?php endif; ?>
                        <h2 class="mt-2"><?php the_title(); ?></h2>
                        </a>
                        <div></div>                                     
                    </article>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
            <article class="card card-body col-4">
            <a href="<?php echo esc_url( the_permalink() ); ?>">
                    <?php $image_attributes = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ) );
if( $image_attributes ) : ?>
                    <img src="<?php echo $image_attributes[0]; ?>" class="img-fluid rounded" width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>">
                <?php endif; ?>
                <h2 class="mt-2"><?php the_title(); ?></h2>
                </a>
                <div></div>                             
            </article>
            <article class="card card-body col-4">
            <a href="<?php echo esc_url( the_permalink() ); ?>">
                    <?php $image_attributes = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ) );
if( $image_attributes ) : ?>
                    <img src="<?php echo $image_attributes[0]; ?>" class="img-fluid rounded" width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>">
                <?php endif; ?>
                <h2 class="mt-2"><?php the_title(); ?></h2>
                </a>
                <div></div>                             
            </article>
        </div>
    </div>
</section>            

<?php get_footer(); ?>