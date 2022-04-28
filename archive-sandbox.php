<?php
  /* 
  Template Name: Archive Sandbox
  */
?>

<?php get_header(); ?>

<section class="page-hero container-fluid">
  <div class="container">
    <div class="page-hero-text">
      <h1>Sandbox</h1>
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

<section class="sandbox-main container-fluid">
  <div class="container">
    <?php
      $sandboxPage = new WP_Query(array(
        'posts_per_page' => 13,
        'post_type' => 'sandbox',
        'order' => 'ASC',
      ));
      while($sandboxPage->have_posts()) {
        $sandboxPage->the_post(); ?>
          <div class="sandbox-projects">
            <a href="<?php the_field('sandbox_url') ?>" target=”_blank”><h4><?php the_title(); ?></h4></a>
            <p><?php the_field('sandbox_categories') ?></p>
          </div>
     <?php }
     echo paginate_links();
     ?>
  </div>
</section>

<?php get_footer(); ?>