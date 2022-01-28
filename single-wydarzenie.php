<?php 

get_header();


while(have_posts()) {
          the_post(); ?>


  <div class="generic-content">
  
  <div class="col-md-8 col-12 text-justify flex-wrap m-auto py-4">
    <?php the_content();?>
    <a href="<?php the_field('link'); ?>"><?php the_field('text_to_link'); ?></a>
  </div>
  <div class="col-md-8 col-12 text-justify flex-wrap m-auto py-4">
    <img class="img-fluid text-center" src="<?php $pageBannerPost = get_field('event_picture'); echo $pageBannerPost['sizes']['large'] ?>"> 
  </div>
  


</div>

<?php
}



get_footer();



?>