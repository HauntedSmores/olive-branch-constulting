<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <?php get_header(); ?>

  <?php get_template_part('partials/hero'); ?>

  <?php get_template_part('partials/layouts'); ?>

  <?php get_footer(); ?>

  <?php wp_footer(); ?>

</body>

</html>
