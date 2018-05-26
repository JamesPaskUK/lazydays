<?php
get_header(); ?>

<div class="alert alert-success container">
    <strong><?php _e( 'front-page.php', 'lazy_days' ); ?></strong>
</div>
<section class="bgimage">
    <div class="d-flex container">
        <div class="py-5 my-auto"> 
            <h1 class="text-center display-4"><?php _e( 'Delicious-ness and freshness stuffed into a small cafe. Perfection!', 'lazy_days' ); ?></h1>
            <p class="lead text-center"><?php _e( 'Relax and unwind with our artisan coffees and food in our tranquil surroundings.', 'lazy_days' ); ?></p>
        </div>
    </div>
</section>
<section class="mt-4">
    <div class="container">
        <?php
            $post1args_args = array(
            	'posts_per_page' => '1',
            	'offset' => '0'
            )
        ?>
        <?php $post1args = new WP_Query( $post1args_args ); ?>
        <?php if ( $post1args->have_posts() ) : ?>
            <?php while ( $post1args->have_posts() ) : $post1args->the_post(); ?>
                <div class="row">
                    <article class="col-md-4">
                        <?php the_post_thumbnail( null, array(
                            	'class' => 'img-fluid rounded'
                        ) ); ?>
                        <h2 class="mt-2 text-center"><?php the_title(); ?></h2> 
                        <?php the_excerpt( ); ?> 
                    </article>
                    <?php
                        $post2args_args = array(
                        	'posts_per_page' => '1',
                        	'offset' => '1'
                        )
                    ?>
                    <?php $post2args = new WP_Query( $post2args_args ); ?>
                    <?php if ( $post2args->have_posts() ) : ?>
                        <?php while ( $post2args->have_posts() ) : $post2args->the_post(); ?>
                            <article class="col-md-4">
                                <?php the_post_thumbnail( null, array(
                                    	'class' => 'img-fluid rounded'
                                ) ); ?>
                                <h2 class="mt-2 text-center"><?php the_title(); ?></h2> 
                                <?php the_excerpt( ); ?> 
                            </article>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.', 'lazy_days' ); ?></p>
                    <?php endif; ?>
                    <?php
                        $post3args_args = array(
                        	'posts_per_page' => '1',
                        	'offset' => '2'
                        )
                    ?>
                    <?php $post3args = new WP_Query( $post3args_args ); ?>
                    <?php if ( $post3args->have_posts() ) : ?>
                        <?php while ( $post3args->have_posts() ) : $post3args->the_post(); ?>
                            <article class="col-md-4">
                                <?php the_post_thumbnail( null, array(
                                    	'class' => 'img-fluid rounded'
                                ) ); ?>
                                <h2 class="mt-2 text-center"><?php the_title(); ?></h2> 
                                <?php the_excerpt( ); ?> 
                            </article>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.', 'lazy_days' ); ?></p>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.', 'lazy_days' ); ?></p>
        <?php endif; ?>
    </div>
</section>            

<?php get_footer(); ?>