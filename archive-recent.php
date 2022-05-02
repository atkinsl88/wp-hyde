<?php
  /* 
  Template Name: Archive Recent
  */
?>

<?php get_header(); ?>

<section class="page-hero container-fluid">
  <div class="container">
    <div class="page-hero-text fade-in">
      <h1>Recent</h1>
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

<section class="sandbox container-fluid">
  <div class="sandbox-projects">
    <?php
    $sandboxPage = new WP_Query(array(
      // 'posts_per_page' => 6,
      'post_type' => 'recent',
    ));
    while($sandboxPage->have_posts()) {
      $sandboxPage->the_post(); ?>
        <div class="sandbox-project container-fluid">
          <div class="container">
            <div class="project-info">
              <div class="project-info-bio">
                <h3><?php the_title(); ?></h3>
                <p><?php the_field('recent_description') ?></p>
                <img src="<?php the_field('recent_image') ?>" alt="<?php the_title(); ?>">
              </div>
              <div class="project-info-links">
                <a href="<?php the_permalink(); ?>"><button class="btn-secondary">Read more</button></a>
              </div>
            </div>
          </div>
        </div>
    <?php }
    echo paginate_links();
    ?>
  </div>
</section>

<?php get_footer(); ?>