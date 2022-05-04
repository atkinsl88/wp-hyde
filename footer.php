<footer class="container-fluid">
  <div class="footer container">

  <div class="gradient-shape is-bottom">
    </div>

    <div class="footer-contents">

      <div class="footer-social">
        <a href="https://www.linkedin.com/in/liam-atkins-51753444" target=”_blank”><button class="btn-secondary">LinkedIn</button></a>
        <a href="https://github.com/atkinsl88" target=”_blank”><button class="btn-secondary">GitHub</button></a>
      </div>

      <div class="footer-main">
        <div class="footer-info">
          <p></p>
        </div>
        <div class="footer-links">
          <div class="row-1">
          <a href="/recent" target=”_blank”>Recent Work</a>
          <a href="/sandbox" target=”_blank”>Sandbox</a>
          <a href="/design" target=”_blank”>Design</a>
          <a href="/roles" target=”_blank”>Roles</a>
          <a href="https://stackoverflow.com/users/9015783/hyde" target=”_blank”>Stack Overflow</a>
          </div>
        </div>
        
      </div>

      <div class="footer-title fade-in">
        <p>Hy-de</p>
      </div>

      <div class="footer-date">
        <h3>2022</h3>
      </div>

    </div>
  </div>
</footer>

<div id="myDIV" class="modal mystyle">
  <nav class="container-fluid">
    <div class="navigation container">
      <div class="navigation-title">
        <a href="<?php echo site_url() ?>"><p>Hy-de</p></a>
      </div>
      <div class="navigation-burger">
        <div class="burger" onclick="myFunction()">
          <div class="line"></div>
          <div class="line"></div>
        </div>
        <div class="title">
          <p>Menu</p>
        </div>
      </div>
    </div>
  </nav>
  <div class="container-fluid"">
    <div class="container"">
      <div class="menu">
        <div class="menu-links">
          <a href="/recent"><h3>Recent Work</h3></a>
          <a href="/sandbox"><h3>Sandbox</h3></a>
          <a href="/design"><h3>Design</h3></a>
          <a href="/roles"><h3>Roles</h3></a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php wp_footer(); ?>
</body>
</html>