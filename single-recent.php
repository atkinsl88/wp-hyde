<?php get_header(); ?>

<section class="page-hero container-fluid">
  <div class="container">
    <div class="page-hero-text">
      <h1><?php the_title(); ?></h1>
    </div>
    <div class="dynamic">
        <a href="<?php the_field('recent_url') ?>" target=”_blank”><button class="btn-secondary">View Site</button></a>
        <a href="<?php the_field('recent_design') ?>" target=”_blank”><button class="btn-secondary">View Design</button></a>
        <a href="<?php the_field('recent_repo') ?>" target=”_blank”><button class="btn-secondary">View Repo</button></a>
      </div>
  </div>
</section>

<section class="container-fluid">
  <div class="container">
    <div class="page-content">
      <?php the_content(); ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>