<?php get_header(); ?>


<!-- CONTAINER -->
<div class="container">
      
    <div id="main" role="main">

        <div class="content" style="width: 100%; margin: 0px;">

          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <h1><?php the_title(); ?></h1>
          
            <?php the_content(); ?>

          <?php endwhile; endif; ?>

          <!-- COMMENTS -->
          <?php comments_template( '', true ); ?>

      </div><!-- ..content -->


    </div><!-- ..main -->


</div><!-- ..container -->

<?php get_footer(); ?>