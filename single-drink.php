<?php
get_header(); ?>

<div class="container">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <div class="row">
                <article class="col-12"> 
                    <?php the_post_thumbnail( null, array(
                        	'class' => 'img-fluid rounded'
                    ) ); ?>
                    <h2 class="mt-2"><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                    <div class="container col-lg-6 col-12 pg-empty-placeholder">
                        <table class="table-striped table"> 
                            <caption>
                                <?php _e( 'Nutritional Values', 'lazy_days' ); ?>
                            </caption>
                            <thead> 
                                <tr> 
                                    <th><?php _e( 'Energy', 'lazy_days' ); ?></th> 
                                    <th><?php _e( 'Per Cup', 'lazy_days' ); ?></th> 
                                </tr>                                             
                            </thead>                                         
                            <tbody> 
                                <tr> 
                                    <td><?php _e( 'Calories', 'lazy_days' ); ?></td> 
                                    <td><span class="badge badge-info badge-pill"><?php echo get_field( 'calories' ); ?></span></td> 
                                </tr>
                                <tr> 
                                    <td><?php _e( 'Fat', 'lazy_days' ); ?></td> 
                                    <td></td> 
                                </tr>
                                <tr> 
                                    <td><?php _e( 'of which saturates', 'lazy_days' ); ?></td> 
                                    <td><span class="badge badge-info badge-pill"><?php echo get_field( 'saturated-fat' ); ?></span></td> 
                                </tr>
                                <tr> 
                                    <td><?php _e( 'Carbohydrates', 'lazy_days' ); ?></td> 
                                    <td><span class="badge badge-info badge-pill"><?php echo get_field( 'carbs' ); ?></span></td> 
                                </tr>
                                <tr> 
                                    <td><?php _e( 'of which sugars', 'lazy_days' ); ?></td> 
                                    <td><span class="badge badge-info badge-pill"><?php echo get_field( 'sugar-carbs' ); ?></span></td> 
                                </tr>
                                <tr> 
                                    <td><?php _e( 'Fibre', 'lazy_days' ); ?></td> 
                                    <td><span class="badge badge-info badge-pill"><?php echo get_field( 'fibre' ); ?></span></td> 
                                </tr>
                                <tr> 
                                    <td><?php _e( 'Protein', 'lazy_days' ); ?></td> 
                                    <td><span class="badge badge-info badge-pill"><?php echo get_field( 'protein' ); ?></span></td> 
                                </tr>
                                <tr> 
                                    <td><?php _e( 'Salt', 'lazy_days' ); ?></td> 
                                    <td><span class="badge badge-info badge-pill"><?php echo get_field( 'salt' ); ?></span></td> 
                                </tr>                                             
                            </tbody>                                         
                        </table>
                    </div>
                </article>
            </div>
        <?php endwhile; ?>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.', 'lazy_days' ); ?></p>
    <?php endif; ?>
</div>            

<?php get_footer(); ?>