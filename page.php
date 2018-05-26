<?php
get_header(); ?>

<div class="alert alert-success container">
    <strong><?php _e( 'page.php', 'lazy_days' ); ?></strong>
</div>
<section class="mt-4">
    <div class="container">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="row">
                    <article>
                        <?php the_post_thumbnail( null, array(
                            	'class' => 'img-fluid rounded'
                        ) ); ?>
                        <h2 class="mt-2"><?php the_title(); ?></h2> 
                        <?php the_content(); ?> 
                    </article>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.', 'lazy_days' ); ?></p>
        <?php endif; ?>
    </div>
</section>            

<?php get_footer(); ?>