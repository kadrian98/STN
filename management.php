<?php
/*
Template Name: management
*/
?>

<?php get_header(); ?>

  <div class="bg-light">
  <div class="container-management">
  <div class="row-management">

<?php

        $zarzadPostType = new WP_Query(array(

          'posts_per_page' => -1,
          'post_type' => array(
            'my-post-type' => 'zarzad',
            
          )
        ));
        
        while($zarzadPostType->have_posts()) {
          $zarzadPostType->the_post(); ?>
          

      <div class="card-management wow zoomIn" data-wow-duration="2s">
        <div class="card-header-management">
        <?php the_post_thumbnail('management'); ?>
        </div>       
        <div class="card-header text-center text-xl bg-dark text-primary"><?php the_field('position'); ?></div>
        <div class="card-body-management">
          <p class="text-xl mb-0"><?php the_field('name'); ?></p>
          <span class="text-sm text-grey"><a href="mailto:<?php the_field('contact'); ?>"><?php the_field('contact'); ?></a></span>
        </div>
      </div>

            
                
         <?php }
       ?>

       </div>
       </div>
      </div>
<?php get_footer(); ?>