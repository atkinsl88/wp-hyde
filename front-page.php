<?php get_header(); ?>

<section class="hero">
  <div class="hero-text">
    <h1 class="marquee"><span>Hyde</span></h1>
  </div>
</section>

<section class="recent container-fluid">
  <div class="container">
    <div class="recent-title">
      <h2>Recent</h2>
    </div>
    <div class="recent-projects">

      <?php
        // Project One
        $recentOrder1 = new WP_Query(array(
          'post_type' => 'recent',
          'posts_per_page' => 1,
          'name' => 'gatsby-wordpress'
        ));
        while($recentOrder1->have_posts()) {
          $recentOrder1->the_post(); ?>
          <div class="recent-content-one">
            <div class="content-one">
              <h4><?php the_title(); ?></h4>
              <a href="<?php the_permalink(); ?>"><p>Info</p></a>
              <p><?php the_field('recent_date') ?></p>
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
          'name' => 'park-house'
        ));
        while($recentOrder2->have_posts()) {
          $recentOrder2->the_post(); ?>
          <div class="recent-content-two">
            <div class="content-two">
              <h4><?php the_title(); ?></h4>
              <a href="<?php the_permalink(); ?>"><p>Info</p></a>
              <p><?php the_field('recent_date') ?></p>
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
              <h4><?php the_title(); ?></h4>
              <a href="<?php the_permalink(); ?>"><p>Info</p></a>
              <p><?php the_field('recent_date') ?></p>
            </div>
            <img src="<?php the_field('recent_image') ?>" alt="<?php the_title(); ?>">
          </div>
        <?php }
        echo paginate_links();
      ?>

    </div>
    <a href="http://localhost/wordpress-portfolio/index.php/recent/"><p>Read more</p></a>
  </div>
</section>

<section class="sandbox container-fluid">
  <div class="container">
    <div class="sandbox-title">
      <h2>Sandbox</h2>
    </div>
    <div class="sandbox-projects">

      <?php
        $sandboxOrder = new WP_Query(array(
          'post_type' => 'sandbox',
          'posts_per_page' => 5,
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
    <a href="http://localhost/wordpress-portfolio/index.php/sandbox/">Read more</a>
  </div>
</section>

<section class="roles container-fluid">
  <div class="container">
    <div class="roles-title">
      <h2>Roles</h2>
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
          <div class="company_title">
            <p><?php the_field('company_name') ?></p>
          </div>
          <div class="roles-content">
            <div class="company_info">
              <p><?php the_field('company_role') ?></p>
              <p><?php the_field('company_dates') ?></p>
            </div>
            <div class="company_bio">
              <p><?php the_content() ?></p>
            </div>
          </div>
        <?php }
        echo paginate_links();
      ?>

    </div>
    <a href="http://localhost/wordpress-portfolio/index.php/roles/"><p>Read more</p></a>
  </div>
</section>

<?php get_footer(); ?>