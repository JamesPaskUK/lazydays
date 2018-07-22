<?php
get_header(); ?>

<div class="card w-50 mx-auto">
    <?php
        if ( has_post_thumbnail() ) {
            the_post_thumbnail( 'medium', array(
        	'class' => 'card-img-top img-fluid'
        ) );
        }
     ?>
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <div class="card-body">
                <h2 class="card-title"><?php the_title(); ?></h2>
                <p class="card-text"><?php echo get_field( 'description' ); ?></p>
            </div>
        <?php endwhile; ?>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.', 'lazy_days' ); ?></p>
    <?php endif; ?>
    <div class="card-footer">
        <table class="table table-light table-striped"> 
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
                    <td><span class="badge badge-info badge-pill"><?php echo get_field( 'fat' ); ?></span></td> 
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
</div>            

<?php get_footer(); ?>