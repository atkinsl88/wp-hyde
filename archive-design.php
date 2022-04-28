<?php
  /* 
  Template Name: Archive Design
  */
?>

<?php get_header(); ?>

<section class="page-hero container-fluid">
  <div class="container">
    <div class="page-hero-text">
      <h1>Design</h1>
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

<section class="design-main container-fluid">
  <div class="container">
    <div class="card-deck">

  <?php
    $designPage = new WP_Query(array(
      'posts_per_page' => 13,
      'post_type' => 'design',
      'order' => 'DEC',
    ));
    while($designPage->have_posts()) {
      $designPage->the_post(); ?>
        <div class="card">
          <img class="card-img-top" src="<?php the_field('design_image') ?>" alt="Card image cap">
          <div class="card-body">
            <a href="<?php the_field('design_url') ?>" target=”_blank”><h4><?php the_title(); ?></h4></a>
            <?php the_content(); ?>
          </div>
        </div>
    <?php }
    echo paginate_links();
    ?>

    </div>
  </div>
</section>

<?php get_footer(); ?>