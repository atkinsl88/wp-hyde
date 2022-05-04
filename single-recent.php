<?php get_header(); ?>

<section class="page-hero container-fluid">
  <div class="container">
    <div class="page-hero-text">
      <h1><?php the_title(); ?></h1>
    </div>
    <div class="dynamic">

      <?php
      $recent_url = get_field('recent_url');
      
      if ($recent_url!='') { ?>
      <a href="<?php the_field('recent_url') ?>" target=”_blank”><button class="btn-secondary">View Site</button></a>
      <?php } else { ?>
      <?php } ?>

      <?php
      $recent_design = get_field('recent_design');

      if ($recent_design!='') { ?>
      <a href="<?php the_field('recent_design') ?>" target=”_blank”><button class="btn-secondary">View Design</button></a>
      <?php } else { ?>
      <?php } ?>

      <?php
      $recent_repo = get_field('recent_repo');
      if ($recent_repo!='') { ?>
      <a href="<?php the_field('recent_repo') ?>" target=”_blank”><button class="btn-secondary">View Repo</button></a>
      <?php } else { ?>
      <?php } ?>

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