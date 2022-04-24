<?php get_header(); ?>

<section class="page-hero container-fluid">
  <div class="container">
    <div class="page-hero-text">
      <h2><?php the_title(); ?></h2>
    </div>
  </div>
</section>

<section class="container-fluid">
  <div class="container">
    <p><?php the_content() ?></p>
  </div>
</section>

<?php get_footer(); ?>