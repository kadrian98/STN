<?php
/*
Template Name: files
*/
?>

<?php get_header(); ?>



<div class="bg-light">
  <div class="container-management">
  <div class="row-management">

          

          <?php

        $filesPagePost = new WP_Query(array(

          'post_type' => array(
            'my-post-type' => 'dokumenty',
            
          )
          
        ));
        
        while($filesPagePost->have_posts()) {
          $filesPagePost->the_post(); ?>

            
              <div class="card-doctor my-5 wow zoomIn">
                <div class="header">
                  <?php the_post_thumbnail('file'); ?>
                  <div class="meta text-center">
                    <a href="<?php the_field('link_do_pliku');?>"><span class="mai-arrow-down-circle"></span></a>
                  </div>
                </div>
                <div class="body">
                  <p class="text-s mb-0"><?php the_title(); ?></p>
                </div>
              </div>
                     

          <?php } ?>
          
          

        
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

<?php get_footer(); ?>