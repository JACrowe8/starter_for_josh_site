<?php
    /*
    Template Name: Home page
    */
    ?>

<?php get_header();?>   <!--  Tells WordPress to include header.php -->

    <section class="container-fluid aboutbg text-center">
        <div class="container">
        <h2><?php the_field('titleforaboutme'); ?></h2><!--  custom field for the aboutme content-->
        <p class="particle"><?php the_field('subtitleforaboutme'); ?></p>
        <p class="about-text"><?php the_field('paragraphforaboutme'); ?></p>

<div class="blocker"></div>
        </div> <!-- container -->

      </section>

    <section class="container-fluid articlesbg">
    <div class="container">
    <h3 class="text-center"><?php the_field('titleforarticles'); ?></h3>
      <div class="row">

        <div class="col-md-4">
        <img class="img-fluid" alt=“portait” src="<?php the_field('articleimage');?>">
        <h4 class="article-title"><?php the_field('articletitle'); ?></h4>
        <p class="date" ><?php the_field('articledate'); ?></p>
        <p class="article-p"><?php the_field('articleexcerpt'); ?> </p>
        <a href="#">CONTINUE READING </a>
        </div> <!-- col-md-4 -->

        <div class="col-md-4">
        <img class="img-fluid" alt=“portait” src="<?php the_field('articleimage');?>">
        <h4 class="article-title"><?php the_field('articletitle'); ?></h4>
        <p class="date" ><?php the_field('articledate'); ?></p>
        <p class="article-p"><?php the_field('articleexcerpt_2'); ?> </p>
          <a href="#">CONTINUE READING </a>
          </div> <!-- col-md-4 -->

          <div class="col-md-4">
            <img class="img-fluid" alt=“portait” src="<?php the_field('articleimage');?>">
            <h4 class="article-title"><?php the_field('articletitle'); ?></h4>
            <p class="date" ><?php the_field('articledate'); ?></p>
            <p class="article-p"><?php the_field('articleexcerpt_3'); ?> </p>
            <a href="#">CONTINUE READING </a>
            </div> <!-- col-md-4 -->
      
      
      </div> <!-- row -->
    </div> <!-- container -->

  </section>
  <?php get_footer();?>   <!-- Tells WordPress to include footer.php   -->