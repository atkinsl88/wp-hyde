<?php
  /* 
  Template Name: Archive Recent
  */
?>

<?php get_header(); ?>

<section class="page-hero container-fluid">
  <div class="container">
    <div class="page-hero-text">
      <h1>Recent Work</h1>
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

<section class="recent-main">
  <?php
    $sandboxPage = new WP_Query(array(
      'posts_per_page' => 13,
      'post_type' => 'recent',
    ));
    while($sandboxPage->have_posts()) {
      $sandboxPage->the_post(); ?>
        <div class="recent-projects marquee">
          <span>
            <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
            <a href="<?php the_permalink(); ?>"><p><?php the_field('recent_description') ?></p></a>
          </span>
        </div>
    <?php }
    echo paginate_links();
    ?>
</section>

<?php get_footer(); ?>