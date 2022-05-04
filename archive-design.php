<?php
  /* 
  Template Name: Archive Design
  */
?>

<?php get_header(); ?>

<section class="page-hero container-fluid">
  <div class="container">
    <div class="page-hero-text fade-in">
      <h1>Design</h1>
    </div>
  </div>
</section>

<section class="container-fluid">
  <div class="container">
    <div class="page-content">
      <?php
        $designPage = get_page_by_title( 'design' );
        $designContent = apply_filters('the_content', $designPage->post_content); 
        echo $designContent;
      ?>
    </div>
  </div>
</section>

<section class="design container-fluid">
  <div class="container">
    <div class="card-deck">

      <?php
        $designOrder = new WP_Query(array(
          'post_type' => 'design',
          // 'posts_per_page' => 3,
          'order' => 'DEC',
        ));
        while($designOrder->have_posts()) {
          $designOrder->the_post(); ?>
            <div class="card">
              <img class="card-img-top" src="<?php the_field('design_image') ?>" alt="Card image cap">
              <div class="card-body">
                <h3><?php the_title(); ?></h3>
                <?php the_content(); ?>
                <a href="<?php the_field('design_url') ?>" target=”_blank”><button class="btn-secondary">View design</button></a>
              </div>
            </div>
        <?php }
        echo paginate_links();
      ?>

    </div>
  </div>
</section>

<?php get_footer(); ?>