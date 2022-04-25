<?php get_header(); ?>

<section class="hero container-fluid">
  <div class="container">
    <div class="hero-text-intro">
      <p>Ambitious digital creative.</p>
    </div>
    <div class="hero-text-1">
      <h2>Software Development</h2>
    </div>
    <div class="hero-text-2">
      <h2>Digital Design</h2>
    </div>
    <div class="hero-text-3">
      <h2>& Project Delivery</h2>
    </div>
  </div>
</section>

<section class="recent container-fluid">
  <div class="container">
    <div class="recent-title">
      <h3>Recent</h3>
    </div>
    <div class="recent-projects">

      <?php
        // Project One
        $recentOrder1 = new WP_Query(array(
          'post_type' => 'recent',
          'posts_per_page' => 1,
          'name' => 'dicktatorship'
        ));
        while($recentOrder1->have_posts()) {
          $recentOrder1->the_post(); ?>
          <div class="recent-content-one">
            <div class="content-one">
              <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
              <p><?php the_field('recent_description') ?></p>
            </div>
            <img src="<?php the_field('recent_image') ?>" alt="<?php the_title(); ?>">
          </div>
        <?php }
        echo paginate_links();
      ?>

      <?php
      // Project Two
        $recentOrder2 = new WP_Query(array(
          'post_type' => 'recent',
          'posts_per_page' => 1,
          'name' => 'zeldas-quest'
        ));
        while($recentOrder2->have_posts()) {
          $recentOrder2->the_post(); ?>
          <div class="recent-content-two">
            <div class="content-two">
              <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
              <p><?php the_field('recent_description') ?></p>
            </div>
            <img src="<?php the_field('recent_image') ?>" alt="<?php the_title(); ?>">
          </div>
        <?php }
        echo paginate_links();
      ?>

      <?php
      // Project Three
        $recentOrder3 = new WP_Query(array(
          'post_type' => 'recent',
          'posts_per_page' => 1,
          'name' => 'digilia'
        ));
        while($recentOrder3->have_posts()) {
          $recentOrder3->the_post(); ?>
          <div class="recent-content-three">
            <div class="content-three">
              <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
              <p><?php the_field('recent_description') ?></p>
            </div>
            <img src="<?php the_field('recent_image') ?>" alt="<?php the_title(); ?>">
          </div>
        <?php }
        echo paginate_links();
      ?>

    </div>
    <a href="http://localhost/wordpress-portfolio/index.php/recent/"><p>View all recent projects</p></a>
  </div>
</section>

<section class="sandbox container-fluid">
  <div class="container">
    <div class="sandbox-title">
      <h3>Sandbox Development</h3>
    </div>
    <div class="sandbox-projects">

      <?php
        $sandboxOrder = new WP_Query(array(
          'post_type' => 'sandbox',
          'posts_per_page' => 8,
          'order' => 'ASC',
        ));
        while($sandboxOrder->have_posts()) {
          $sandboxOrder->the_post(); ?>
          <div class="sandbox-content">
            <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
            <p><?php the_field('sandbox_categories') ?></p>
          </div>
        <?php }
        echo paginate_links();
      ?>

    </div>
    <a href="http://localhost/wordpress-portfolio/index.php/sandbox/"><p>View all sandbox projects</p></a>
  </div>
</section>

<section class="design container-fluid">
  <div class="container">
    <div class="design-title">
      <h3>Design</h3>
    </div>
    <div class="card-deck">

      <?php
        $designOrder = new WP_Query(array(
          'post_type' => 'design',
          'posts_per_page' => 3,
          'order' => 'ASC',
        ));
        while($designOrder->have_posts()) {
          $designOrder->the_post(); ?>
            <div class="card">
              <img class="card-img-top" src="<?php the_field('design_image') ?>" alt="Card image cap">
              <div class="card-body">
                <a href="<?php the_field('design_url') ?>" target=”_blank”><h4><?php the_title(); ?></h4></a>
                <p class="card-text"><?php the_content(); ?></p>
              </div>
            </div>
        <?php }
        echo paginate_links();
      ?>

    </div>
    <a href="http://localhost/wordpress-portfolio/index.php/design/"><p>View all designs</p></a>
  </div>
</section>

<section class="roles container-fluid">
  <div class="container">
    <div class="roles-title">
      <h3>Roles</h3>
    </div>
    <div class="roles-jobs">

      <?php
        $rolesOrder = new WP_Query(array(
          'post_type' => 'role',
          'posts_per_page' => 3,
          'order' => 'ASC',
        ));
        while($rolesOrder->have_posts()) {
          $rolesOrder->the_post(); ?>
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
        <?php }
        echo paginate_links();
      ?>

    </div>
    <a href="http://localhost/wordpress-portfolio/index.php/roles/"><p>View all roles</p></a>
  </div>
</section>

<?php get_footer(); ?>