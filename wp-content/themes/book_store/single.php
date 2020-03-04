<?php get_header(); ?>

<div class="row">
        <div class="col-lg-12 col-md-12 columns">
            <div class="single-product">
            <?php
            while(have_posts()) {
                the_post(); ?>
              <div class="col-lg-12 col-md-12 col-xs-12 columns product end">
                <div class="col-lg-5 col-md-5 col-xs-5 columns product end">
                <?php the_post_thumbnail( 'square-150' ); ?>
                </div>
                <div class="col-lg-7 col-md-7 col-xs-7 columns product end">
                    <h2><?php the_title(); ?></h2>
                    <h4>Author: <?php the_field('author'); ?></h4>
                    <h5>Price: $<?php the_field('price_'); ?></h5>
                    <?php the_content(); ?>
                    <button class="btn btn-primary btn-xs">Buy Now</button>

                </div>   
              </div>  
            <?php } ?>     
            </div>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-lg-12 col-md-12 columns">
          <div class="products">
            <div class="col-lg-3 col-md-3 col-xs-12 product end">
              <img src="./img/img-1.png">
              <h3>Blue Shirt</h3>
              <h4>$9.99</h4>
              <button class="btn btn-primary btn-xs">Details</button>
            </div>
            <div class="col-lg-3 col-md-3 col-xs-12 product end">
              <img src="./img/img-2.png">
              <h3>Red Shirt</h3>
              <h4>$19.99</h4>
              <button class="btn btn-primary btn-xs">Details</button>
            </div>
            <div class="col-lg-3 col-md-3 col-xs-12 product end">

              <img src="./img/img-3.jpg">
              <h3>Red Shirt</h3>
              <h4>$19.99</h4>
              <button class="btn btn-primary btn-xs">Details</button>
            </div>
            <div class="col-lg-3 col-md-3 col-xs-12 product end">
              <img src="./img/img-4.jpg">
              <h3>Red Shirt</h3>
              <h4>$19.99</h4>
              <button class="btn btn-primary btn-xs">Details</button>
            </div>
          </div>
        </div>
      </div>

<?php get_footer(); ?>