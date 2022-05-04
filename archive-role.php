<?php
  /* 
  Template Name: Archive Roles
  */
?>

<?php get_header(); ?>

<section class="page-hero container-fluid">
  <div class="container">
    <div class="page-hero-text fade-in">
      <h1>Roles</h1>
    </div>
  </div>
</section>

<section class="container-fluid">
  <div class="container">
    <div class="page-content">
      <?php
        $rolePage = get_page_by_title( 'roles' );
        $roleContent = apply_filters('the_content', $rolePage->post_content); 
        echo $roleContent;
      ?>
    </div>
  </div>
</section>

<section class="roles container-fluid">
  <div class="container">
    <div class="roles-jobs">

      <?php
        $rolesOrder = new WP_Query(array(
          'post_type' => 'role',
          // 'posts_per_page' => 4,
          'order' => 'ASC',
        ));
        while($rolesOrder->have_posts()) {
          $rolesOrder->the_post(); ?>
          <div class="roles-content">
            <div class="company_info">
              <h3><?php the_field('company_name') ?></h3>
              <div class="role-info">
                <p><?php the_field('company_role') ?></p>
                <p><?php the_field('company_dates') ?></p>
              </div>
            </div>
            <div class="company_bio">
              <p><?php the_content() ?></p>
            </div>
          </div>
        <?php }
        echo paginate_links();
      ?>

    <h3>Education & Courses</h3>
    <p>Oxford Brookes University, English, 2:1 (2009 - 2011)</p>
    <p>General Assembly, Software Engineering Immersive (2020)</p>

    </div>
  </div>
</section>

<?php get_footer(); ?>