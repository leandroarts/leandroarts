<?php get_header(); ?>

<!-- CONTAINER -->
<div class="container">

    <!-- MAIN -->
    <div id="main" role="main">

        <!-- CONTENT -->
        <div class="content" style="width: 100%; margin: 0px;">

            <!-- NAVIGATOR -->
            <div class="galleryNavigator">
                
                <div class="prevLink">
                    <?php $prevLinkm = next_post_link('%link', '<img src="'.get_bloginfo("template_url").'/images/icons/fast-backward.png" /> PREVIOUS PROJECT'); echo $prevLink; ?>
                </div>

                <div class="nextLink">                   
                    <?php $nextLinkm = previous_post_link('%link', '<img src="'.get_bloginfo("template_url").'/images/icons/fast-forward.png" /> NEXT PROJECT'); echo $nextLink; ?>
                </div>

            </div>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <h1><?php the_title(); ?></h1>

                <?php the_content(); ?>

                <!-- Back to home -->
                <a style="position: relative; display: block; clear: both; color: #999;" href="<?php bloginfo('url'); ?>"><img style="position: relative; top: 2px; margin-right: 8px;" src="<?php bloginfo('template_url'); ?>/images/icons/home.png" /> Return to Main Menu</a>

            <?php endwhile; endif; ?>


        </div><!-- ..content -->

    </div><!-- ..main -->

</div><!-- ..container -->

<?php get_footer(); ?>