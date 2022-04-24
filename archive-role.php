<?php
  /* 
  Template Name: Archive Roles
  */
?>

<?php get_header(); ?>

<section class="page-hero container-fluid">
  <div class="container">
    <div class="page-hero-text">
      <h1>Roles</h1>
    </div>
  </div>
</section>

<section class="roles-main container-fluid">
  <div class="container">
    <?php
      $sandboxPage = new WP_Query(array(
        'posts_per_page' => 13,
        'post_type' => 'role',
        'order' => 'ASC',
      ));
      while($sandboxPage->have_posts()) {
        $sandboxPage->the_post(); ?>
          <div class="roles-projects">
            <div class="roles-content">
              <div class="company_info">
                <p><?php the_field('company_name') ?></p>
                <p><?php the_field('company_role') ?></p>
                <p><?php the_field('company_dates') ?></p>
              </div>
              <div class="company_bio">
                <p><?php the_content() ?></p>
              </div>
            </div>
          </div>
     <?php }
     echo paginate_links();
     ?>
  </div>
</section>

<?php get_footer(); ?>