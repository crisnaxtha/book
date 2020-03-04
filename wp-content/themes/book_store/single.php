<?php get_header(); ?>
<div class="container">
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
                <h5>Publisher: <?php the_field('publisher') ?>( <?php the_field('year_of_publication') ?>)</h5>
                <h5>Price: $<?php the_field('price_'); ?></h5>
                <?php the_content(); ?>

            </div>   
          </div>  
        <?php } ?>     
        </div>
    </div>
  </div>
  <hr>

  <?php $ids = get_field('related_articles', false, false);
  $i = 1;
   $relatedArticles = new WP_Query(array(
      'post_type'       => 'book',
      'posts_per_page'  => 4,
      'post__in'			  => $ids,
      'post_status'		  => 'publish',
      'orderby'        	=> 'rand',
  ));?>
  <div class="row">
    <div class="col-lg-12 col-md-12 columns">
      <div class="products">
        <?php 
        if(isset($relatedArticles)): 
        while($relatedArticles->have_posts() ) {
          $relatedArticles->the_post();
        ?>
        <div class="col-lg-3 col-md-3 col-xs-12 product end">
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail( 'square-150'); ?>
            <h3><?php the_title(); ?></h3>
          </a>
        </div>
        <?php $i++;
        }  endif;
          if($i < 5):
          $rand_books = new WP_Query(array(
              'post_type'       => 'book',
              'posts_per_page'  => (5 - $i),
              'post__not_in'			  => $ids,
              'post_status'		  => 'publish',
              'orderby'        	=> 'rand',
          ));
          while($rand_books->have_posts() ) {
          $rand_books->the_post();
        ?>
        <div class="col-lg-3 col-md-3 col-xs-12 product end">
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail( 'square-150'); ?>
            <h3><?php the_title(); ?></h3>
          </a>
        </div>
        <?php
        }
         endif; ?>
      </div>
    </div>
  </div>

</div>
<?php get_footer(); ?>