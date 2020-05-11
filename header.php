<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and start of the <body> section
 *
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

  <header class="page-header">
      <div class=" page-header__wrapper">
        <a href="<?php echo get_home_url(); ?>" class="page-header__logo">
          <img src="<?php echo get_field('header_logo', 'options')?>" alt="" />
        </a>
        <nav class="page-header__nav--lg" id="navBar">
        <?php wp_nav_menu( array( 
        'menu' => 'large-menu',
        'container'   => ''       
        ) ); ?>  
        </nav>
        <div class="page-header__register">
          <button
            class="button-register"
            type="button"
            data-toggle="modal"
            data-target="#registerModal"
          >
            Register
          </button>
        </div>
        <button class="hamburger">
          <span>Menu</span>
        </button>
      </div>
      <nav class="page-header__nav" id="navBar">
      <?php wp_nav_menu( array( 
        'menu' => 'main-menu',
        'container'   => ''       
        ) ); ?>  
      </nav>
    </header>
    <main>
