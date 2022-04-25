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

<section class="container-fluid">
  <div class="container">
    <div class="page-content">
      <?php the_content(); ?>
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
                <h4><?php the_field('company_name') ?></h4>
                <div class="role-info">
                  <p><?php the_field('company_role') ?></p>
                  <p><?php the_field('company_dates') ?></p>
                </div>
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

<section class="page-hero container-fluid">
  <div class="container">
    <div class="page-hero-text">
      <h1>Education</h1>
    </div>
  </div>
</section>

<section class="education-main container-fluid">
  <div class="container">
    <div class="education-projects">
      <div class="educatio -content">
        <div class="company_info">
          <h4>Oxford Brookes University, English, 2:1</h4>
          <h4>General Assembly, Software Engineering Immersive</h4>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>