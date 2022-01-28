<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="Kadrian98, https://github.com/kadrian98">

  
  <?php wp_head(); ?>


</head>
<body>


  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">

        <a href="<?php echo site_url('/'); ?>"><img class="photo" src="<?php bloginfo('template_directory'); ?>/img/stn2.png" style="width:200px;"></a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('/'); ?>">Strona główna</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('/wydarzenia'); ?>">Wydarzenia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('/dokumenty'); ?>">Dokumenty</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('/kola-naukowe'); ?>">Koła Naukowe</a>
            </li>
            <li class="nav-item dropdown">
		          <a class="nav-link  dropdown-toggle" data-bs-toggle="dropdown">O Nas</a>
		    <ul class="dropdown-menu">
			  <li><a class="dropdown-item" href="<?php echo site_url('/zarzad'); ?>">Zarząd</a></li>
			  <li><a class="dropdown-item" href="<?php echo site_url('/historia'); ?>">Historia</a></li>		  
		    </ul>
		</li>
    <li class="nav-item">
              <?php echo do_shortcode('[gtranslate]'); ?>
            </li>
    
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>

    <div class="page-hero bg-image overlay-dark" style="background-image: url(<?php $pageBannerImage = get_field('background_image'); echo $pageBannerImage['sizes']['large'] ?>);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn" data-wow-duration="2s">
        <span class="subhead"><?php echo is_front_page() ? "Pomorski Uniwersytet Medyczny" : NULL?></span>

        <h1 class="font-size-base"><?php echo is_front_page() ? "Studenckie Towarzystwo Naukowe" : wp_title(''); ?></h1>
        
      </div>
    </div>
  </div>

  
  </header>