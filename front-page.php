<?php get_header(); ?>

<section class="hero">
  <div class="hero-text">
    <h1 class="marquee"><span>Hyde</span></h1>
  </div>
</section>

<section class="recent">
  <div class="container-fluid">
    <div class="recent-title">
      <h2>Recent</h2>
    </div>
    <?php
      $recent = get_page_by_title( 'recent' );
      $recent_content = apply_filters('the_content', $recent->post_content); 
      echo $recent_content;
    ?>
    <div class="recent-projects">
      <?php
        $recentOrder = new WP_Query(array(
          'post_type' => 'recent',
          'order' => 'ASC',
        ));
        while($recentOrder->have_posts()) {
          $recentOrder->the_post(); ?>
          <div class="recent-content">
            <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
            <p><?php the_field('recent_date') ?></p>
            <img src="<?php the_field('recent_image') ?>" alt="<?php the_title(); ?>">
          </div>
        <?php }
        echo paginate_links();
      ?>
    </div>
  </div>
</section>

<section class="sandbox">
  <div class="container-fluid">
    <div class="sandbox-title">
      <h2>Sandbox</h2>
    </div>
    <?php
      $sandbox = get_page_by_title( 'sandbox' );
      $sandbox_content = apply_filters('the_content', $sandbox->post_content); 
      echo $sandbox_content;
    ?>
    <div class="sandbox-projects">
      <?php
        $sandboxOrder = new WP_Query(array(
          'post_type' => 'sandbox',
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
  </div>
</section>

<?php get_footer(); ?>