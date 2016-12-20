<?php
/*
Template Name: Wide
*/
?>

<?php get_header(); ?>


<!-- CONTAINER -->
<div class="container">

    <div id="main" role="main">
        
        <div class="content" style="width: auto;">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <article class="post" id="post-<?php the_ID(); ?>">

              <header>

                <h2><?php the_title(); ?></h2>

              </header>
            
              <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

              <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
            
            </article>

            <?php endwhile; endif; ?>

            <!-- COMMENTS -->
            <?php comments_template( '', true ); ?>

        </div><!-- ..content -->

    </div><!-- ..main -->


</div><!-- ..container -->

<?php get_footer(); ?>