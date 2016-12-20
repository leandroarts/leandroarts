<!doctype html>
<html lang="en" class="no-js">
<head>

  <!-- LEANDROARTS.com -->
  <title><?php wp_title(); ?> | <?php bloginfo('name'); ?></title>
  <meta charset="utf-8">
  <meta name="description" content="<?php bloginfo('description'); ?>" />
  <meta name="author" content="LEANDROARTS">
  <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">

  <link rel="shortcut icon" href="/favicon.ico">
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_url'); ?>/style.css" />  

  <?php include(TEMPLATEPATH . '/core-scripts.php'); ?>

  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <?php wp_head(); ?>

</head>

<!-- EPIC BODY TAG  -->
  <!--[if IE 6]><script type="text/javascript">window.onload = function(){ alert("You are using an obsolete verison of Internet Explorer. It is recommended that you upgrade to a current browser for added security and to experience the advanced features available on modern websites. We recommend Firefox.com, its free!"); }</script><![endif]--> 
  <!--[if lt IE 7 ]> <body <?php body_class('ie6'); ?>> <![endif]-->
  <!--[if IE 7 ]>    <body <?php body_class('ie7'); ?>> <![endif]-->
  <!--[if IE 8 ]>    <body <?php body_class('ie8'); ?>> <![endif]-->
  <!--[if lt IE 9]> <div style=' clear: both; height: auto; padding:46px; text-align: center; font-weight: bold; font-size: 1.2em; line-height: 1.3em; position: relative; background: #000;'> <a href="http://www.firefox.com" style="color: #fff;">You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today by clicking here.</a></div> <![endif]-->
  <!--[if IE 9 ]>    <body <?php body_class('ie9'); ?>> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> <body <?php body_class('ie6'); ?>> <!--<![endif]-->

  <!-- HEADER -->
    <header id="header">
    
      <div class="center">
    
          <!-- LOGO -->
          <h1 class="logo"><a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a></h1> 
          
          <!-- NAVIGATION --> 
         <?php
              $urlCHECK = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
              $blogCHECK = get_bloginfo('url') . '/';
              
              if ($urlCHECK == $blogCHECK ){ 
                include(TEMPLATEPATH . '/navigation.php'); 
              }

              if ($urlCHECK != $blogCHECK ){ 
                include(TEMPLATEPATH . '/navigation-single.php');
              }
         ?>

      </div><!-- ..center -->
    
    </header>

