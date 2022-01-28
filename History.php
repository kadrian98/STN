<?php
/*
Template Name: History
*/
?>

<?php 

get_header();


while(have_posts()) {
          the_post(); ?>
          

  <div class="generic-content">
  
  <div class="col-md-6 text-justify m-auto py-4">
    <?php  the_content(); ?>
  </div>
</div>

<?php
}



get_footer();



?>
