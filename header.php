<header class="ob-header">
  <nav id="menu">
    <?php $args = [
      'theme_location' => 'main-menu',
      'menu_class' => 'main-nav__list',
      'container_class' => 'main-nav'
      ] ?>
		<?php wp_nav_menu($args); ?>
	</nav>
  <!-- <img src="<?php echo get_template_directory_uri() . '/images/logo.jpg' ?>" alt=""> -->
</header>
