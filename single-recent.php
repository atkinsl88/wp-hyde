<?php get_header(); ?>

<section class="page-hero container-fluid">
  <div class="container">
    <div class="page-hero-text">
      <h1><?php the_title(); ?></h1>
      <div class="dynamic">
        <a href="<?php the_field('recent_url') ?>" target=”_blank”><button>View Site</button></a>
        <a href="<?php the_field('recent_repo') ?>" target=”_blank”><button>View Repo</button></a>
      </div>
    </div>
  </div>
</section>

<section class="container-fluid">
  <div class="container">
    <?php the_content() ?>
  </div>
</section>

<?php get_footer(); ?>