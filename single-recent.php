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
    <a href="<?php the_field('recent_url') ?>" target=”_blank”><p>View Site</p></a>
    <a href="<?php the_field('recent_repo') ?>" target=”_blank”><p>View Repo</p></a>
  </div>
</section>

<?php get_footer(); ?>