<?php get_header(); ?>

<!-- CONTAINER -->
<div class="container">
      
    <div id="main" role="main">

        <div class="content" style="width: 100%; margin: 0px;">

              <h1>Results</h1>

              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
              <!-- Cell -->
              <div class="loop_cell">
                 
                  <!-- Image -->
                  <a class="loop_cell_image" href="<?php the_permalink(); ?>" title="Read the full Article."><?php the_post_thumbnail( array(480,480) ); ?></a>

                  <!-- Details -->
                  <div class="loop_cell_details">
                    <h3><a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h3>
                    <h6><?php the_time('d M Y h:i a'); ?></h6>
                    <p><?php echo excerpt(40); ?></p>
                    <div>
                      <?php the_tags('Tags: ', ', ', '<br />'); ?> 
                      Posted in <?php the_category(', ') ?>
                      | <?php edit_post_link('Edit', '', ' | '); ?>
                      <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>              
                    </div>
                    <a class="loop_cell_more button" href="<?php the_permalink(); ?>" title="Read more">Read more</a>
                 </div><!-- ..details -->

              </div><!-- ..cell -->

          <?php endwhile; endif; ?>

          </div><!-- ..content -->

    </div><!-- ..main -->

</div><!-- ..container -->

<?php get_footer(); ?>