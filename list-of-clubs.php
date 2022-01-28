<?php
/*
Template Name: list-of-clubs
*/
?>

<?php 

get_header();


while(have_posts()) {
          the_post(); ?>         
  
  <div class="table-responsive">
    <?php  the_content(); ?>
  </div>

<?php
}



get_footer();



?>
