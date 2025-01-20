<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title><?php the_title(); ?></title>
    <link rel="canonical" href="<?php echo esc_url("https://getbootstrap.com/docs/5.3/examples/carousel/"); ?>">
    <link rel="stylesheet" href="<?php echo esc_url("https://cdn.jsdelivr.net/npm/@docsearch/css@3"); ?>">
    <link rel="icon" type="image/x-icon" href="<?php echo esc_url(get_template_directory_uri()."/assets/images/favicon.png"); ?>">
    <link href="<?php echo esc_url(get_template_directory_uri()."/assets/css/bootstrap.min.css"); ?>" rel="stylesheet">
<!-- Custom styles for this template -->
<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
    </style>

    <link href="<?php echo esc_url(get_template_directory_uri()."/assets/css/custome.css"); ?>" rel="stylesheet">
     <?php wp_head(); ?>
     <link href="<?php echo esc_url(get_template_directory_uri()."/style.css"); ?>" rel="stylesheet">
     <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url(get_template_directory_uri()."/assets/images/apple-touch-icon.png"); ?>">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url(get_template_directory_uri()."/assets/images/favicon-32x32.png"); ?>">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url(get_template_directory_uri()."/assets/images/favicon-16x16.png"); ?>">
<link href="<?php echo esc_url(get_template_directory_uri()."/assets/css/menu.css"); ?>" rel="stylesheet">


</head>
<body>

<header class="menu-head" data-bs-theme="dark">

<nav class="navbar container">
            <section class="navbar-left">
               <a href="<?php bloginfo('url'); ?>" class="brand">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" class="img-fluid" width="200">
               </a>
               <div class="burger" id="burger">
                  <span class="burger-line"></span>
                  <span class="burger-line"></span>
                  <span class="burger-line"></span>
               </div>
            </section>
            <section class="navbar-center">
               <span class="overlay"></span>
               <div class="menu" id="menu">
                  <div class="menu-header">
                     <span class="menu-arrow"><i class="bx">X</i> </span>
                     <span class="menu-title"></span>
                  </div>
                  <?php
        wp_nav_menu( array(
                'menu'              => 'primary',
                'depth'             => 2,
                'container' => false,
                'container_class'   => '',
                'menu_class' => 'menu-inner',        
                'fallback_cb'   => false,
                'add_li_class'  => 'menu-item',
                'link_class'   => 'menu-link',
                'walker' => new Custom_Menu_Walker()
                )
            );
        ?>
          
          
               </div>
            </section>
            <section class="navbar-right">
                <a href="https://learn.kyureeus.com/" class="btn btn-outline-pink float-end" type="submit">Student Login</a>
                 <a href="<?php echo get_permalink('87'); ?>" class="btn btn-outline-pink float-end" type="submit">Contact Us</a>
            </section>
</header>
