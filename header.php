<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width", initial-sclae="1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <nav class="container-fluid">
    <div class="navigation container">
      <div class="navigation-title">
        <a href="http://localhost/wordpress-portfolio/"><p>Hy-de</p></a>
      </div>
      <div class="navigation-burger">
        <div class="burger" onclick="myFunction()">
          <div class="line"></div>
          <div class="line"></div>
        </div>
        <div class="title">
          <p>Menu</p>
        </div>
      </div>
    </div>
  </nav>