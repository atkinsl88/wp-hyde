<?php get_header(); ?>

<section class="page-hero container-fluid">
  <div class="container">
    <div class="page-hero-text">
      <h1><?php the_title(); ?></h1>
    </div>
    <div class="dynamic">

      <?php
      $sandbox_url = get_field('sandbox_url');
      
      if ($sandbox_url!='') { ?>
        <a href="<?php the_field('sandbox_url') ?>" target=”_blank”><button class="btn-secondary">View Site</button></a>
      <?php } else { ?>
      <?php } ?>

      <?php
      $sandbox_design = get_field('sandbox_design');

      if ($sandbox_design!='') { ?>
        <a href="<?php the_field('sandbox_design') ?>" target=”_blank”><button class="btn-secondary">View Design</button></a>
      <?php } else { ?>
      <?php } ?>

      <?php
      $sandbox_repo = get_field('sandbox_repo');
      if ($sandbox_repo!='') { ?>
        <a href="<?php the_field('sandbox_repo') ?>" target=”_blank”><button class="btn-secondary">View Repo</button></a>
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