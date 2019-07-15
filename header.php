<header class="ob-header">

  <svg class="nav-menu-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
    <path fill="currentColor" d="M24 3c0-.6-.4-1-1-1H1c-.6 0-1 .4-1 1v2c0 .6.4 1 1 1h22c.6 0 1-.4 1-1V3zM24 11c0-.6-.4-1-1-1H1c-.6 0-1 .4-1 1v2c0 .6.4 1 1 1h22c.6 0 1-.4 1-1v-2zM24 19c0-.6-.4-1-1-1H1c-.6 0-1 .4-1 1v2c0 .6.4 1 1 1h22c.6 0 1-.4 1-1v-2z"/>
  </svg>

  <nav id="main-menu">
    <?php $args = [
      'theme_location' => 'main-menu',
      'menu_class' => 'main-nav__list',
      'container_class' => 'main-nav'
      ] ?>
		<?php wp_nav_menu($args); ?>
	</nav>
  <img src="<?php echo get_template_directory_uri() . '/images/logo.jpg' ?>" alt="">
</header>
