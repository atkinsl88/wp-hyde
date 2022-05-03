<?php get_header(); ?>

<section class="hero container-fluid">
  <div class="container">
    <div class="gradient-shape">
    </div>
    <div class="hero-content">
      <div class="hero-text-intro">
        <p>Passionate and commercially-aware digital creative.</p>
      </div>
      <div class="hero-text-1 fade-in">
        <h1>Software Developer</h1>
      </div>
      <div class="hero-text-2 fade-in">
        <h1>Digital Design</h1>
      </div>
      <div class="hero-text-3 fade-in">
        <h1>& Delivery</h1>
      </div>
    </div>
  </div>
</section>

<section class="recent container-fluid">
  <div class="container">
    <div class="recent-title">
      <h2>Recent</h2>
      <a href="http://localhost/wordpress-portfolio/index.php/recent/"><button class="btn-primary">View all</button></a>
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
              <h3><?php the_title(); ?></h3>
              <p><?php the_field('recent_description') ?></p>
              <a href="<?php the_permalink(); ?>"><button class="btn-secondary">Read more</button></a>
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
          'name' => 'dkl'
        ));
        while($recentOrder2->have_posts()) {
          $recentOrder2->the_post(); ?>
          <div class="recent-content-two">
            <div class="content-two">
              <h3><?php the_title(); ?></h3>
              <p><?php the_field('recent_description') ?></p>
              <a href="<?php the_permalink(); ?>"><button class="btn-secondary">Read more</button></a>
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
          'name' => 'moses-motorcycles'
        ));
        while($recentOrder3->have_posts()) {
          $recentOrder3->the_post(); ?>
          <div class="recent-content-three">
            <div class="content-three">
              <h3><?php the_title(); ?></h3>
              <p><?php the_field('recent_description') ?></p>
              <a href="<?php the_permalink(); ?>"><button class="btn-secondary">Read more</button></a>
            </div>
            <img src="<?php the_field('recent_image') ?>" alt="<?php the_title(); ?>">
          </div>
        <?php }
        echo paginate_links();
      ?>

    </div>
  </div>
</section>

<section class="sandbox container-fluid">
  <div class="">
    <div class="container sandbox-title fade-in">
      <h2>Sandbox</h2>
    </div>
    <div class="sandbox-projects">
      <?php
      $sandboxPage = new WP_Query(array(
        'posts_per_page' => 6,
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
    <div class="container">
      <a href="http://localhost/wordpress-portfolio/index.php/sandbox/"><button class="btn-primary">View all</button></a>
    </div>
  </div>
</section>

<section class="design container-fluid">
  <div class="container">
    <div class="design-title">
      <h2>Design</h2>
    </div>
    <div class="card-deck">

      <?php
        $designOrder = new WP_Query(array(
          'post_type' => 'design',
          'posts_per_page' => 3,
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
    <a href="http://localhost/wordpress-portfolio/index.php/design/"><button class="btn-primary">View all</button></a>
  </div>
</section>

<section class="roles container-fluid">
  <div class="container">
    <div class="roles-title fade-in">
      <h2>Roles</h2>
    </div>
    <div class="roles-jobs">

      <?php
        $rolesOrder = new WP_Query(array(
          'post_type' => 'role',
          'posts_per_page' => 4,
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
    </div>
    <div class="container">
      <a href="http://localhost/wordpress-portfolio/index.php/roles/"><button class="btn-primary">View all</button></a>
    </div>
  </div>
</section>

<?php get_footer(); ?>