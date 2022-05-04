<?php
  /* 
  Template Name: Archive Sandbox
  */
?>

<?php get_header(); ?>

<section class="page-hero container-fluid">
  <div class="container">
    <div class="page-hero-text fade-in">
      <h1>Sandbox</h1>
    </div>
  </div>
</section>

<section class="container-fluid">
  <div class="container">
    <div class="page-content">
    <?php
      $sandboxPage = get_page_by_title( 'sandbox' );
      $sandboxContent = apply_filters('the_content', $sandboxPage->post_content); 
      echo $sandboxContent;
    ?>
    </div>
  </div>
</section>

<section class="sandbox container-fluid">
  <div class="sandbox-projects">
    <?php
    $sandboxPage = new WP_Query(array(
      // 'posts_per_page' => 6,
      'post_type' => 'sandbox',
    ));
    while($sandboxPage->have_posts()) {
      $sandboxPage->the_post(); ?>
        <div class="sandbox-project container-fluid">
          <div class="container">
            <div class="project-info">
              <div class="project-info-bio">
                <h3><?php the_title(); ?></h3>
                <p><?php the_field('sandbox_categories') ?></p>
                <img class="fade-in-image" src="<?php the_field('sandbox_image') ?>" alt="<?php the_title(); ?>">
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