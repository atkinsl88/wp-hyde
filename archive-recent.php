<?php
  /* 
  Template Name: Archive Recent
  */
?>

<?php get_header(); ?>

<section class="page-hero">
  <div class="container-fluid">
    <div class="page-hero-text">
      <h1>Recent Work</h1>
    </div>
  </div>
</section>

<section class="recent-main">
  <div class="container-fluid">
    <?php
      $sandboxPage = new WP_Query(array(
        'posts_per_page' => 13,
        'post_type' => 'recent',
      ));
      while($sandboxPage->have_posts()) {
        $sandboxPage->the_post(); ?>
          <div class="recent-projects-main">
            <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
            <p><?php the_field('recent_date') ?></p>
          </div>
     <?php }
     echo paginate_links();
     ?>
  </div>
</section>

<?php get_footer(); ?>