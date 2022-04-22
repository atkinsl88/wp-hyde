<?php get_header(); ?>

<section class="page-hero">
  <div class="container-fluid">
    <div class="page-hero-text">
      <h2><?php the_title(); ?></h2>
    </div>
  </div>
</section>

<section>
  <div class="container-fluid">
    <p><?php the_content() ?></p>
  </div>
</section>

<?php get_footer(); ?>