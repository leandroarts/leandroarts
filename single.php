<?php get_header(); ?>


<!-- CONTAINER -->
<div class="container">

    <!-- MAIN -->
    <div id="main" role="main">

        <!-- CONTENT -->
        <div class="content">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <h1><?php the_title(); ?></h1>

                <?php the_content(); ?>

                <!-- Back to home -->
                <a href="<?php bloginfo('url'); ?>"><img style="position: relative; top: 2px; margin-right: 8px; color: #999;" src="<?php bloginfo('template_url'); ?>/images/icons/home.png" /> Return to Main Menu</a>

            <?php endwhile; endif; ?>

        </div><!-- ..content -->

        <!-- SIDEBAR ACTION -->
        <?php include(TEMPLATEPATH . '/sidebar.php'); ?>    

    </div><!-- ..main -->

</div><!-- ..container -->

<?php get_footer(); ?>