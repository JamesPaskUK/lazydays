<?php
get_header(); ?>

<div class="alert alert-success container">
    <strong><?php _e( 'single-recipe.php', 'lazy_days' ); ?></strong>
</div>
<section class="mt-4">
    <div class="container">
        <div class="row">
            <article>
                <h1><?php _e( 'Food and Recipes', 'lazy_days' ); ?></h1>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" alt="First slide" src="http://pinegrow.com/placeholders/img14.jpg"/>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" alt="Second slide" src="http://pinegrow.com/placeholders/img18.jpg"/>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" alt="Third slide" src="http://pinegrow.com/placeholders/img16.jpg"/>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only"><?php _e( 'Previous', 'lazy_days' ); ?></span> </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only"><?php _e( 'Next', 'lazy_days' ); ?></span> </a>
                        </div>
                        <p><?php _e( 'We work hard to bring you the freshest flavours to our cafe and we want you to be able to replicate some of our favourites at home. Here are some of our favourite recipes.', 'lazy_days' ); ?></p>
                        <div class="row">
                            <div class="col">
                                <hr>
                            </div>
                            <div class="col-auto">
                                <?php _e( 'FA Icon', 'lazy_days' ); ?>
                            </div>
                            <div class="col">
                                <hr>
                            </div>
                        </div>                                     
                        <h2 class="mb-3"><?php _e( 'Banana and Raisin Tea Bread', 'lazy_days' ); ?></h2>
                        <img src="https://images.unsplash.com/photo-1497534547324-0ebb3f052e88?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max&ixid=eyJhcHBfaWQiOjIwOTIyfQ&s=61d1010523ff0f2db88318218e35eb87" class="d-block recipe-image">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <h3><?php _e( 'Timing and Servings', 'lazy_days' ); ?></h3>
                        <p><?php _e( 'Preparation Time: 10 minutes', 'lazy_days' ); ?><br><?php _e( 'Cooking Time: 50 mins to 1 hour', 'lazy_days' ); ?><br><?php _e( 'Oven Temperature: 180C (350F) Gas Mark 4', 'lazy_days' ); ?><br><?php _e( 'Serves: 12', 'lazy_days' ); ?></p>
                        <h3><?php _e( 'Ingredients', 'lazy_days' ); ?></h3>
                        <ul>
                            <li>
                                <?php _e( '75g low-fat spread, plus a little for greasing', 'lazy_days' ); ?>
                            </li>
                            <li>
                                <?php _e( '150g (5 oz) self-raising wholemeal flour', 'lazy_days' ); ?>
                            </li>
                            <li>
                                <?php _e( '75g (3 oz) plain wholemeal flour', 'lazy_days' ); ?>
                            </li>
                            <li>
                                <?php _e( '1 tsp baking powder', 'lazy_days' ); ?>
                            </li>
                            <li>
                                <?php _e( '1 tsp ground cinnamon', 'lazy_days' ); ?>
                            </li>
                            <li>
                                <?php _e( '75g soft brown sugar', 'lazy_days' ); ?>
                            </li>
                            <li>
                                <?php _e( '3 bananas, well mashed', 'lazy_days' ); ?>
                            </li>
                            <li>
                                <?php _e( '100g raisins', 'lazy_days' ); ?>
                            </li>
                            <li>
                                <?php _e( '2 eggs, beaten', 'lazy_days' ); ?>
                            </li>
                        </ul>                                     
                    </div>
                    <div class="col-md-7">
                        <h3><?php _e( 'Instructions', 'lazy_days' ); ?></h3>
                        <ol>
                            <li>
                                <?php _e( 'Grease a 900g loaf tin.', 'lazy_days' ); ?>
                            </li>
                            <li>
                                <?php _e( 'Melt the spread in a small saucepan over a low heat.', 'lazy_days' ); ?>
                            </li>
                            <li>
                                <?php _e( 'Sift the flours, baking powder and cinnamon into a large bowl.', 'lazy_days' ); ?>
                            </li>
                            <li>
                                <?php _e( 'Stir in the sugar, mashed bananas, melted spread, raisins and eggs and beat for about 3 minutes until smooth.', 'lazy_days' ); ?>
                            </li>
                            <li>
                                <?php _e( 'Turn the mixture into the prepared tin and bake in a pre-heated oven for 50 minutes to an hour or until a skewer inserted into the centre comes out clean.', 'lazy_days' ); ?>
                            </li>
                            <li>
                                <?php _e( 'Stand the tin on a wire rack to cool slightly before turning out.', 'lazy_days' ); ?>
                            </li>                                         
                        </ol>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>            

<?php get_footer(); ?>