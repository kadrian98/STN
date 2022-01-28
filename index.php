<?php
/*
Template Name: Wydarzenia
*/
?>

<?php get_header(); ?>


<div class="page-section bg-light">
  <div class="container">
    <div class="m-auto col-lg-8 col-12 row mt-5">

<?php
        
        $homepagePosts = new WP_Query(array(

          
          'post_type' => array(
            'my-post-type' => 'wydarzenie',
            
          )
          
        ));
        
        while($homepagePosts->have_posts()) {
          $homepagePosts->the_post(); ?>

          
        <div class="app-wrapper wow zoomIn" data-wow-duration="2s">
  <div class="card  mb-3">
    <div class="card-content-wrapper">
      <h2 class="card-title">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </h2>
      <div class="card-content">
        <?php echo wp_trim_words(get_the_content(), 30); ?>
      </div>
      <div class="card-link-wrapper">
        <a href="<?php the_permalink(); ?>" class="card-link">Czytaj więcej...</a>
      </div>
    </div>   
      <img class="img-fluid text-center" src="<?php $pageBannerPost = get_field('event_picture'); echo $pageBannerPost['sizes']['large'] ?>"> 
  </div>
</div>

       <?php }

echo paginate_links();

?>

      </div>
    </div>
  </div>

<?php get_footer();?>

 