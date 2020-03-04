<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 columns">
            <div class="product-details">
                <?php
                $home_books = new WP_Query(array(
                    'posts_per_page' => 16,
                    'post_type' => 'book'
                ));
           
                while($home_books->have_posts()) {
                    $home_books->the_post();?>

                     <div class="col-lg-3 col-md-3 col-xs-12 product end">
                        <h3><?php the_title(); ?></h3>
                        <?php the_post_thumbnail( 'square-150' ); ?>
                        <a class="btn btn-primary btn-xs" href="<?php the_permalink(); ?>">Details</a>
                    </div>

                <?php 
                }?>
               
            </div>
        </div>
    </div>   
</div>
<?php get_footer(); ?>